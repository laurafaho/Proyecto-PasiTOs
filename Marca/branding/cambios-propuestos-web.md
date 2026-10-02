# Cambios propuestos para la web · www.proyectopasitos.es

> Versión 1.0 · 30-09-2026 · Revisión de la web publicada hecha el 30-09-2026: portada, Nosotros, Método, Familias, Sesiones online, Diagnóstico, Testimonios, Blog, Formación, Trabaja con nosotros, Contacto y Cheque servicio.
> **No se ha modificado nada en la web.** Esta lista es para el asistente que la mantiene.
> Prioridad: **P1** = hacer ya (accesibilidad, datos o normas de marca) · **P2** = mejora importante de marca o SEO · **P3** = pulido.

**Punto de partida:** la web ya está bien planteada. Tiene un mensaje claro, un proceso en 4 pasos, reseñas reales de Google, preguntas frecuentes con datos estructurados, un método con fuentes citadas y el aviso de que la PNI no sustituye la atención médica. Los cambios son de ajuste, no de rehacerla.

---

## P1 · Hacer ya

| # | Página | Qué cambiar | Por qué |
|---|---|---|---|
| 1 | Portada (H1) | La palabra destacada «allí donde viven y aprenden» está en azul cielo `#00B0EA` sobre blanco. Cambiarla a azul medio `#1B7796`. | Contraste de 2,50:1; no cumple AA. Con azul medio sube a 5,09:1. |
| 2 | Todas (banner de cookies) | El botón «Aceptar» lleva azul petróleo sobre azul cielo. Usar el mismo estilo para «Aceptar» y «Rechazar»: por ejemplo, los dos con fondo azul petróleo y texto blanco, o los dos con borde. | Contraste de 4,07:1, no cumple AA. Además, la guía de la AEPD pide que aceptar y rechazar tengan el mismo protagonismo. |
| 3 | Todas | Subir el texto de párrafo de 14 px a 18 px en escritorio y 17 px en móvil, con interlineado 1,6. | 14 px cansa en lectura larga y en móvil. El público llega cansado y lee de noche en el móvil. |
| 4 | Nosotros | Añadir el perfil de la logopeda del equipo (confirmado que existe). [CONFIRMAR nombre, formación y foto] Hoy la web ofrece logopedia pero no muestra a ninguna logopeda. | Coherencia y confianza: quien busca logopeda quiere verla en el equipo. |
| 5 | Blog (portada y listado) | Añadir texto alternativo a las imágenes de los artículos (hay 3 sin él en la portada). | Accesibilidad para lectores de pantalla, y SEO. |
| 6 | Portada y Familias | Confirmar que hay permiso escrito de Colegio Virgen de Atocha, CEU San Pablo Sanchinarro y Escuela Infantil Lullaby para aparecer. [CONFIRMAR] | Norma de no publicar colaboraciones sin confirmar. |
| 7 | Portada (FAQ) y Familias | La frase «colaboramos mano a mano con neuropediatras expertos en neurodiversidad infantil» necesita respaldo: nombres con su permiso, o una fórmula más prudente como «nos coordinamos con el neuropediatra de cada familia». [CONFIRMAR] | Afirmación sin prueba visible. |
| 8 | Familias (H2) | «Menos trayectos, más resultados reales» → «Menos trayectos, aprendizajes que se quedan». | Evita prometer resultados. |
| 9 | Blog | Revisar títulos y contenido de: «El estrés de las aulas mata el aprendizaje», «Por qué los métodos tradicionales no funcionan en bebés prematuros o niños con autismo» y «El cerebro también se alimenta». Suavizar los títulos (por ejemplo, «Cómo afecta el estrés al aprendizaje en el aula») y comprobar que las afirmaciones de salud llevan fuente. | Afirmaciones absolutas o de salud sin matiz. |

---

## P2 · Marca y SEO

| # | Página | Qué cambiar | Por qué |
|---|---|---|---|
| 10 | Todas | Tipografía (aprobada): sustituir Fraunces + Karla por **Barlow Semi Condensed** (títulos, 600/700) + **Nunito Sans** (textos, 400/600/700), según `identidad-visual.md`. URL de Google Fonts en `tokens-web.json`. | Fraunces no conecta con el logotipo. Barlow Semi Condensed repite sus proporciones rectas y estrechas. |
| 11 | Cabecera | Sustituir el logo vertical de 56 px por `logos/pasitos-logo-horizontal-color.svg` a unos 44-48 px de alto. | A 56 px, el texto del logo vertical no se lee. El horizontal se lee y ocupa menos. |
| 12 | Cabecera | El menú tiene 9 enlaces y a 1280 px se parte en dos líneas. Agrupar en: Servicios (desplegable) · Diagnóstico · Método · Nosotros · Blog · Contacto. «Testimonios» y «Trabaja con nosotros» pueden ir al pie. | Menú más limpio. «Servicios» da entrada a las páginas del punto 13. |
| 13 | Nuevas páginas de servicio | Crear una página por servicio y condición: terapia ocupacional a domicilio, logopedia infantil a domicilio, psicología infantil a domicilio, atención temprana a domicilio, psicomotricidad, integración sensorial, autismo (TEA), TDAH y en el colegio / profesor sombra. Títulos, H1 y palabras clave en `C:\Proyecto PasiTOs\Web\Palabras clave y competencia SEO PasiTOs.xlsx`. | Hoy todo vive en Portada y Familias. Los competidores directos (Logopedas en Casa, Centro Juntos) ganan en Google con una página por servicio. |
| 14 | «Cómo trabajamos con los colegios» | El enlace lleva a /familias. Crear una página propia para colegios, con intervención en el aula, profesor sombra, formación y CTA «Pide una propuesta para tu centro». Enlazar ahí /formacion. | Los colegios son un público distinto con una decisión distinta. |
| 15 | Cheque servicio | La página /cheque-servicio existe y ya aparece en Google, pero no está en el menú. Enlazarla desde el bloque «Cheque Servicio» de la portada (hoy el botón lleva al contacto) y cambiar el título a «Cheque servicio de la Comunidad de Madrid: qué es y cómo pedirlo | PasiTOs». | Aprovechar una página que ya atrae tráfico y resolver una objeción clave (el precio). |
| 16 | Portada (H1) | «niños/as neurodivergentes» → «niños y niñas neurodivergentes». | Las barras cortan la lectura; norma de lenguaje inclusivo sin barras en los titulares. |
| 17 | Portada | «Es normal sentirse perdido» → «Es comprensible sentirse perdido». | Coherencia con la norma de evitar «normal». |
| 18 | Portada («¿A quién acompañamos?») | Revisar la lista: «Trastornos psicomotores» y «Problemas de coordinación» → «Dificultades de motricidad y coordinación»; «Trastornos del aprendizaje» → «Dificultades del aprendizaje». Mantener los nombres oficiales (Autismo (TEA), TDAH, Dislexia, Altas capacidades). | Lenguaje neuroafirmativo sin perder las palabras que buscan las familias. |
| 19 | Portada (regulación sensorial) | «rabietas intensas» → «momentos de desbordamiento o rabietas intensas». | Distinguir la crisis sensorial de la rabieta. |
| 20 | Nosotros / Sesiones online | Añadir una sección visible para jóvenes de 12 a 18 años, con texto dirigido a ellos, en la página de sesiones online o en una propia. | El brief incluye a jóvenes neurodivergentes como público, y hoy la web habla casi solo a madres y padres. |

---

## P3 · Pulido

| # | Página | Qué cambiar | Por qué |
|---|---|---|---|
| 21 | Pie de página | Completar la descripción «Terapia ocupacional, logopedia y psicología infantil a domicilio, por Laura Fajardo y su equipo» con «de 1 a 18 años, en casa y en el cole» y añadir el tagline «Terapia infantil que va a casa y al cole.» | Refuerza el posicionamiento en todas las páginas. |
| 22 | Portada | Las secciones aparecen con animación al hacer scroll. Comprobar que el contenido se ve sin JavaScript y en capturas de pantalla (en la revisión algunas secciones salían en blanco hasta hacer scroll). | Accesibilidad, SEO y vistas previas al compartir. |
| 23 | Portada (hero) | [CONFIRMAR] si la foto es real o de banco de imágenes. Si es de banco, sustituirla por una sesión real con autorización. | Norma de fotografía real (ver `identidad-visual.md`). |
| 24 | Favicon | Sustituir `favicon-32.png` por los de `logos/` (32, 180 y 512 px), generados desde el icono vectorial. | Mejor nitidez en pestañas y en la pantalla de inicio del móvil. |
| 25 | Todas | Aplicar los colores de apoyo y los estilos de `tokens-web.json` para que no aparezcan colores sueltos. | Mantenimiento más fácil. |
| 26 | Evaluación neuropsicológica | Añadir precio orientativo o «desde» si el equipo lo aprueba. [CONFIRMAR] | Los competidores de evaluación (menteAmente) tienen página de tarifas, y el precio es una duda frecuente. |

---

## Orden recomendado de trabajo
1. Puntos 1, 2, 3 y 5: accesibilidad, menos de una hora.
2. Puntos 4, 6, 7, 8 y 9: confirmar datos con el equipo.
3. Puntos 10, 11 y 12: tipografía, logo y menú, de una vez.
4. Puntos 13, 14 y 15: nuevas páginas, empezando por Autismo (TEA), TDAH y Colegios.

---

## Cambios respecto a la versión anterior (guía v0.1 y mapa SEO del 29-09-2026)
1. Documento nuevo: antes solo había recomendaciones sueltas en la guía y en el Excel de SEO.
2. Se basa en la web publicada hoy, y no en la antigua de Witaps que describía la investigación de experiencia de cliente.
3. Añade dos fallos de contraste medidos en la web (H1 y botón de cookies) y el tamaño de texto de 14 px.
4. Detecta incoherencias de datos: logopedia sin logopeda en el equipo, colegios y neuropediatras sin confirmar.
5. Integra el plan de páginas del mapa SEO en una lista priorizada.
