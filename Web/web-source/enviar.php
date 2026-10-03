<?php
date_default_timezone_set('Europe/Madrid');
/**
 * Proyecto PasiTOs — envío de formularios (contacto y candidaturas).
 * Se sube a la raíz de la web en Hostalia junto al resto de archivos.
 */

// ---------------- CONFIGURACIÓN ----------------
$DESTINOS = [
    'contacto'       => 'administracion@proyectopasitos.es', // todos los formularios llegan a administración
    'administracion' => 'administracion@proyectopasitos.es',
];
// Remitente técnico: debe ser una dirección del propio dominio para que el correo no acabe en spam.
$REMITENTE        = 'web@proyectopasitos.es';
$NOMBRE_REMITENTE = 'Web Proyecto PasiTOs';
$MAX_ENVIOS_HORA  = 5;                 // por IP
$MAX_CV_BYTES     = 5 * 1024 * 1024;   // 5 MB
// ------------------------------------------------

// --- Envío autenticado (SMTP) ---
// Hostalia exige enviar los correos de la web con un buzón del dominio y su contraseña.
// Los datos se guardan en smtp-config.php (lo rellena la titular desde el panel; nunca se comparte).
$SMTP = null;
if (is_readable(__DIR__ . '/smtp-config.php')) {
    $SMTP = include __DIR__ . '/smtp-config.php';
    if (!is_array($SMTP) || empty($SMTP['usuario']) || empty($SMTP['clave']) || strpos($SMTP['clave'], 'ESCRIBE_AQUI') !== false) { $SMTP = null; }
}
if ($SMTP) { $REMITENTE = $SMTP['usuario']; }

header('X-Robots-Tag: noindex');
$quiereJson = isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false;

function responder($ok, $error = '') {
    global $quiereJson;
    if ($quiereJson) {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code($ok ? 200 : 400);
        echo json_encode(['ok' => $ok, 'error' => $error], JSON_UNESCAPED_UNICODE);
    } elseif ($ok) {
        header('Location: /gracias', true, 303);
    } else {
        header('Content-Type: text/html; charset=utf-8');
        http_response_code(400);
        echo '<!doctype html><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">'
           . '<title>No se ha podido enviar</title><body style="font-family:system-ui,sans-serif;max-width:560px;margin:40px auto;padding:0 16px;color:#0C4759">'
           . '<h1>No se ha podido enviar el formulario</h1><p>' . htmlspecialchars($error) . '</p>'
           . '<p>Puedes volver atrás e intentarlo de nuevo, escribirnos por WhatsApp o llamar al +34 613 024 556.</p>'
           . '<p><a href="javascript:history.back()">Volver</a></p></body>';
    }
    exit;
}

function campo($nombre, $max) {
    $v = isset($_POST[$nombre]) ? trim((string) $_POST[$nombre]) : '';
    $v = str_replace("\0", '', $v);
    if (function_exists('mb_substr')) { return mb_substr($v, 0, $max, 'UTF-8'); }
    return substr($v, 0, $max);
}
function linea($v) { return trim(preg_replace('/[\r\n]+/', ' ', $v)); } // evita inyección de cabeceras
function asunto($t) { return '=?UTF-8?B?' . base64_encode($t) . '?='; }


function smtp_leer($f) {
    $r = '';
    while (($l = fgets($f, 515)) !== false) { $r .= $l; if (strlen($l) < 4 || $l[3] === ' ') break; }
    return $r;
}
function smtp_cmd($f, $c, $esperado) {
    if ($c !== null) fwrite($f, $c . "\r\n");
    $r = smtp_leer($f);
    if ((int) substr($r, 0, 3) !== $esperado) { throw new Exception('SMTP: ' . trim($r)); }
    return $r;
}
/** Envía un mensaje ya compuesto (cabeceras + cuerpo) por SMTP autenticado con STARTTLS. */
function enviar_smtp($cfg, $para, $asunto, $cuerpo, $cabeceras, $remitente) {
    $host = $cfg['servidor'] ?? 'smtp.servidor-correo.net';
    $puerto = (int) ($cfg['puerto'] ?? 587);
    $seguridad = $cfg['seguridad'] ?? 'tls'; // tls | ssl | ninguna
    $destino = ($seguridad === 'ssl' ? 'ssl://' : 'tcp://') . $host . ':' . $puerto;
    $ctx = stream_context_create(['ssl' => ['verify_peer' => true, 'verify_peer_name' => true, 'peer_name' => $host]]);
    $f = @stream_socket_client($destino, $errno, $errstr, 20, STREAM_CLIENT_CONNECT, $ctx);
    if (!$f) throw new Exception("No se pudo conectar con $host:$puerto ($errstr)");
    stream_set_timeout($f, 20);
    try {
        smtp_cmd($f, null, 220);
        $yo = $_SERVER['SERVER_NAME'] ?? 'proyectopasitos.es';
        smtp_cmd($f, "EHLO $yo", 250);
        if ($seguridad === 'tls') {
            smtp_cmd($f, 'STARTTLS', 220);
            if (!stream_socket_enable_crypto($f, true, STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT | STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT)) throw new Exception('No se pudo activar TLS');
            smtp_cmd($f, "EHLO $yo", 250);
        }
        smtp_cmd($f, 'AUTH LOGIN', 334);
        smtp_cmd($f, base64_encode($cfg['usuario']), 334);
        smtp_cmd($f, base64_encode($cfg['clave']), 235);
        smtp_cmd($f, "MAIL FROM:<$remitente>", 250);
        smtp_cmd($f, "RCPT TO:<$para>", 250);
        smtp_cmd($f, 'DATA', 354);
        $msg  = "To: <$para>\r\nSubject: $asunto\r\nDate: " . date('r') . "\r\nMessage-ID: <" . md5(uniqid('', true)) . '@' . substr(strrchr($remitente, '@'), 1) . ">\r\n";
        $msg .= rtrim($cabeceras, "\r\n") . "\r\n\r\n" . $cuerpo;
        $msg  = preg_replace('/^\./m', '..', str_replace(["\r\n", "\n"], ["\n", "\r\n"], $msg));
        fwrite($f, $msg . "\r\n.\r\n");
        smtp_cmd($f, null, 250);
        fwrite($f, "QUIT\r\n");
    } finally { fclose($f); }
    return true;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') { responder(false, 'Método no permitido.'); }

// --- Antispam: campo trampa y tiempo mínimo de relleno ---
if (campo('web', 200) !== '') { responder(true); }              // bot: fingimos éxito
$segundos = (int) campo('t', 10);
if (isset($_POST['t']) && $segundos < 3) { responder(true); }    // demasiado rápido para una persona

// --- Límite de envíos por IP ---
$ip = $_SERVER['REMOTE_ADDR'] ?? 'desconocida';
$fichero = rtrim(sys_get_temp_dir(), '/\\') . '/pasitos_form_' . md5($ip);
$ahora = time();
$marcas = [];
if (is_readable($fichero)) {
    $marcas = array_filter(array_map('intval', explode(',', (string) @file_get_contents($fichero))), function ($m) use ($ahora) { return $m > $ahora - 3600; });
}
if (count($marcas) >= $MAX_ENVIOS_HORA) { responder(false, 'Has enviado varios mensajes seguidos. Espera un rato antes de volver a intentarlo.'); }

// --- Campos ---
$tipo      = campo('tipo', 20) === 'candidatura' ? 'candidatura' : 'contacto';
$nombre    = linea(campo('nombre', 80));
$apellidos = linea(campo('apellidos', 120));
$email     = linea(campo('email', 150));
$telefono  = linea(campo('telefono', 30));
$zona      = linea(campo('zona', 120));
$puesto    = linea(campo('puesto', 60));
$pagina    = linea(campo('pagina', 200));
$mensaje   = campo('mensaje', 4000);
$legal     = campo('legal', 5);

if ($nombre === '') { responder(false, 'Falta tu nombre.'); }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { responder(false, 'El correo electrónico no parece válido.'); }
if ($legal !== 'si') { responder(false, 'Necesitamos que aceptes la política de privacidad.'); }

if ($tipo === 'candidatura') {
    $para = $DESTINOS['administracion'];
} else {
    $destino = campo('destino', 20);
    $para = isset($DESTINOS[$destino]) ? $DESTINOS[$destino] : $DESTINOS['contacto'];
}

// --- Adjunto (solo candidaturas) ---
$adjunto = null;
if ($tipo === 'candidatura') {
    if (empty($_FILES['cv']) || $_FILES['cv']['error'] !== UPLOAD_ERR_OK) {
        responder(false, 'Adjunta tu CV en PDF o Word.');
    }
    if ($_FILES['cv']['size'] > $MAX_CV_BYTES) { responder(false, 'El CV pesa más de 5 MB.'); }
    $ext = strtolower(pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION));
    $tipos = ['pdf' => 'application/pdf', 'doc' => 'application/msword', 'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    if (!isset($tipos[$ext])) { responder(false, 'El CV tiene que ser PDF o Word (.pdf, .doc o .docx).'); }
    if (function_exists('finfo_open')) {
        $fi = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($fi, $_FILES['cv']['tmp_name']);
        finfo_close($fi);
        $permitidos = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/octet-stream', 'application/CDFV2'];
        if (!in_array($mime, $permitidos, true)) { responder(false, 'El archivo del CV no es un PDF o Word válido.'); }
    }
    $base = preg_replace('/[^A-Za-z0-9_-]+/', '-', $nombre . '-' . $apellidos);
    $adjunto = [
        'nombre' => 'CV-' . trim($base, '-') . '.' . $ext,
        'tipo'   => $tipos[$ext],
        'datos'  => file_get_contents($_FILES['cv']['tmp_name']),
    ];
}

// --- Composición del correo ---
$nombreCompleto = trim($nombre . ' ' . $apellidos);
if ($tipo === 'candidatura') {
    $titulo = 'Candidatura web — ' . ($puesto ?: 'Sin puesto') . ' — ' . $nombreCompleto;
} else {
    $titulo = 'Contacto web — ' . $nombreCompleto;
}
$texto  = ($tipo === 'candidatura' ? "Nueva candidatura desde la web\n" : "Nueva solicitud de contacto desde la web\n");
$texto .= "========================================\n\n";
$texto .= "Nombre:    $nombreCompleto\n";
$texto .= "Correo:    $email\n";
$texto .= "Teléfono:  " . ($telefono ?: '—') . "\n";
if ($tipo === 'candidatura') { $texto .= "Puesto:    " . ($puesto ?: '—') . "\n"; }
else { $texto .= "Zona:      " . ($zona ?: '—') . "\n"; }
if ($pagina) { $texto .= "Página:    $pagina\n"; }
$texto .= "\nMensaje:\n" . ($mensaje !== '' ? $mensaje : '(sin mensaje)') . "\n\n";
$texto .= "----------------------------------------\n";
$texto .= "Ha aceptado la política de privacidad el " . date('d/m/Y H:i') . ".\n";
$texto .= "Para responder, pulsa «Responder»: el correo irá a $email.\n";

$cabeceras  = "From: " . asunto($NOMBRE_REMITENTE) . " <$REMITENTE>\r\n";
$cabeceras .= "Reply-To: " . asunto($nombreCompleto) . " <$email>\r\n";
$cabeceras .= "MIME-Version: 1.0\r\n";
$cabeceras .= "X-Mailer: PasiTOs-web\r\n";

if ($adjunto) {
    $limite = 'pp_' . md5(uniqid('', true));
    $cabeceras .= "Content-Type: multipart/mixed; boundary=\"$limite\"\r\n";
    $cuerpo  = "--$limite\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n";
    $cuerpo .= chunk_split(base64_encode($texto)) . "\r\n";
    $cuerpo .= "--$limite\r\nContent-Type: {$adjunto['tipo']}; name=\"{$adjunto['nombre']}\"\r\n";
    $cuerpo .= "Content-Transfer-Encoding: base64\r\nContent-Disposition: attachment; filename=\"{$adjunto['nombre']}\"\r\n\r\n";
    $cuerpo .= chunk_split(base64_encode($adjunto['datos'])) . "\r\n--$limite--\r\n";
} else {
    $cabeceras .= "Content-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n";
    $cuerpo = chunk_split(base64_encode($texto));
}

$enviado = false;
if ($SMTP) {
    try { $enviado = enviar_smtp($SMTP, $para, asunto($titulo), $cuerpo, $cabeceras, $REMITENTE); }
    catch (Exception $e) { error_log('PasiTOs formulario: ' . $e->getMessage()); $enviado = false; }
} else {
    $enviado = @mail($para, asunto($titulo), $cuerpo, $cabeceras, '-f' . $REMITENTE);
    if (!$enviado) { $enviado = @mail($para, asunto($titulo), $cuerpo, $cabeceras); }
}
if (!$enviado) { responder(false, 'El servidor no ha podido enviar el mensaje en este momento.'); }

$marcas[] = $ahora;
@file_put_contents($fichero, implode(',', $marcas), LOCK_EX);
responder(true);
