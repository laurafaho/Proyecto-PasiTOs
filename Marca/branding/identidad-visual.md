# Identidad visual · Proyecto PasiTOs

> Versión 1.0 · 30-09-2026 · Los valores técnicos están en `tokens-web.json` y los archivos del logo en `logos/`.
> Contrastes calculados con la fórmula WCAG 2.x (luminancia relativa). Criterio aplicado: **AA 4,5:1 para todo texto**, también el grande, según tus normas.

---

## 1. Logotipo

El logo no cambia. Dos huellas que se encuentran dentro de un círculo representan al niño o niña y a quien le acompaña, avanzando juntos. El «TO» destacado recuerda el origen del proyecto en la Terapia Ocupacional.

**Versiones entregadas en `logos/`** (SVG vectorial y PNG transparente):

| Archivo | Uso |
|---|---|
| `pasitos-logo-horizontal-color` | Cabecera web, firma de email, documentos. **Versión principal en digital.** |
| `pasitos-logo-vertical-color` | Portadas, carteles, redes, papelería. |
| `pasitos-icono-color` | Favicon, avatar de redes, sello pequeño, marca de agua. |
| `pasitos-logo-horizontal-blanco` · `-vertical-blanco` · `-icono-blanco` | Sobre azul petróleo, azul medio, azul cielo o fotografía oscura. Disco y texto en blanco; las huellas quedan caladas y dejan ver el fondo. |
| `pasitos-sello-color.png` | Sello circular con el texto alrededor, para merchandising y redes. Solo en PNG. |
| `favicon-32.png` · `favicon-180.png` · `favicon-512.png` | Favicon y apple-touch-icon. |

**Cómo se han hecho los SVG:** vectorizados a partir de vuestro PNG original de 5001 px y comprobados contra él (diferencia media inferior al 1 %). Son fieles para web y para impresión corriente. Para rotulación o imprenta de gran formato conviene pedir el original vectorial al diseñador. [CONFIRMAR si existe]

**Normas de uso**
- **Zona de seguridad:** alrededor del logo, un margen igual a la altura de la «P» de PROYECTO.
- **Tamaño mínimo:** horizontal 140 px o 35 mm de ancho; vertical 90 px o 25 mm; icono 24 px o 8 mm.
- **Qué versión sobre qué fondo:** color sobre blanco, fondo claro o bruma; blanco sobre azul petróleo, azul medio, azul cielo o foto oscura.
- **No hacer:** deformar, girar, cambiar los colores, añadir sombras, poner la versión color sobre azul cielo o reescribir el nombre con otra tipografía.
- **En la web actual** el logo vertical aparece a 56 px de alto en la cabecera y el texto no se lee. Se propone usar el horizontal (ver `cambios-propuestos-web.md`).

---

## 2. Paleta final

### 2.1 Colores de marca (los que ya usáis, sin cambios)

| Nombre | HEX | RGB | Uso |
|---|---|---|---|
| **Azul petróleo** | `#0C4759` | 12 · 71 · 89 | Color principal: titulares, texto sobre claro, fondos de impacto (cabeceras de sección, pie, botón principal). |
| **Azul medio** | `#1B7796` | 27 · 119 · 150 | Enlaces, palabra destacada en titulares sobre claro, botones secundarios con texto blanco. |
| **Azul cielo** | `#00B0EA` | 0 · 176 · 234 | Solo gráfico: huellas, iconos, ilustraciones, detalles, líneas. **Nunca texto ni fondo con texto.** |
| **Fondo claro** | `#F1FAFD` | 241 · 250 · 253 | Fondo general de secciones alternas. |
| **Blanco** | `#FFFFFF` | 255 · 255 · 255 | Fondo principal; texto sobre azul petróleo y azul medio. |

### 2.2 Colores de apoyo (ya presentes en la web, ahora documentados)

| Nombre | HEX | Uso |
|---|---|---|
| **Gris azulado** | `#4A6E7B` | Texto secundario sobre claro (entradillas, pies, metadatos). |
| **Bruma** | `#EAF6FA` | Fondo de tarjetas y bloques destacados. |
| **Cielo claro** | `#7FD8F7` | Palabra destacada y enlaces **sobre azul petróleo**. Sustituye al azul cielo cuando hay texto. |
| **Gris sobre oscuro** | `#AECBD6` | Texto secundario sobre azul petróleo (pie de página). |

### 2.3 Colores fuera de la paleta de marca
- **Azul TO `#00A2DB`:** solo existe dentro del logotipo (el «TO»). No se usa en la web.
- **Verde WhatsApp `#25D366` con texto `#0B2E1A` (7,46:1):** solo en el botón de WhatsApp, para que se reconozca al instante.

### 2.4 Proporción
Blanco y fondo claro 60 % · azul petróleo 25 % · azul medio y bruma 10 % · azul cielo 5 % (solo gráfico).

### 2.5 Opciones sobre un color de acento (norma 8: cambio importante, con justificación)

| Opción | Qué supone | A favor | En contra |
|---|---|---|---|
| **A · Paleta solo azul (recomendada)** | Se queda como está, con los tonos de apoyo documentados. | Coherente con el logo y con la web actual; sin coste de cambio. | Menos calidez; los CTA dependen del azul petróleo. |
| B · Añadir el acento cálido «Sol» `#FFC845` | Solo para el botón principal y un detalle por pieza, con texto azul petróleo (6,60:1). | Aporta calidez e infancia y hace que el CTA destaque más. | Nuevo color que mantener; no aparece en el logo. |

La versión anterior proponía la opción B. Tras ver la web publicada, **recomiendo la A**: la web ya funciona bien con el azul petróleo en el CTA y el verde de WhatsApp aporta el contrapunto de color.

---

## 3. Contraste de todas las combinaciones de texto y fondo

✅ = cumple AA (≥ 4,5:1) y se puede usar para texto · ❌ = no se usa para texto

| Texto ↓ / Fondo → | Blanco | Fondo claro | Bruma | Azul petróleo | Azul medio | Azul cielo |
|---|---|---|---|---|---|---|
| **Azul petróleo** `#0C4759` | ✅ 10,19 | ✅ 9,62 | ✅ 9,25 | — | ❌ 2,00 | ❌ 4,07 |
| **Azul medio** `#1B7796` | ✅ 5,09 | ✅ 4,81 | ✅ 4,62 | ❌ 2,00 | — | ❌ 2,04 |
| **Gris azulado** `#4A6E7B` | ✅ 5,52 | ✅ 5,21 | ✅ 5,01 | ❌ 1,85 | ❌ 1,08 | ❌ 2,21 |
| **Blanco** `#FFFFFF` | — | ❌ 1,06 | ❌ 1,10 | ✅ 10,19 | ✅ 5,09 | ❌ 2,50 |
| **Cielo claro** `#7FD8F7` | ❌ 1,61 | ❌ 1,52 | ❌ 1,46 | ✅ 6,34 | ❌ 3,17 | ❌ 1,56 |
| **Gris sobre oscuro** `#AECBD6` | ❌ 1,71 | ❌ 1,61 | ❌ 1,55 | ✅ 5,97 | ❌ 2,98 | ❌ 1,47 |
| **Azul cielo** `#00B0EA` | ❌ 2,50 | ❌ 2,36 | ❌ 2,27 | ❌ 4,07 | ❌ 2,04 | — |

**Combinaciones permitidas, en resumen**
- Sobre **blanco, fondo claro o bruma:** azul petróleo (titulares y texto), gris azulado (texto secundario) y azul medio (enlaces y destacados).
- Sobre **azul petróleo:** blanco (texto), cielo claro (destacados y enlaces) y gris sobre oscuro (texto secundario).
- Sobre **azul medio:** solo blanco (botones secundarios).
- **Azul cielo:** nunca lleva texto encima ni se usa como color de texto.

**Consecuencias en la web actual:** la palabra destacada del H1 («allí donde viven y aprenden») está en azul cielo sobre blanco (2,50:1, no cumple) y el botón «Aceptar» de cookies lleva azul petróleo sobre azul cielo (4,07:1, no cumple). Las dos correcciones están en `cambios-propuestos-web.md`.

---

## 4. Tipografía

### 4.1 Diagnóstico
La web usa **Fraunces** (serif) en los títulos y **Karla** en los textos. Coincidimos contigo en que Fraunces no conecta con el logo: el logotipo usa una palo seco recta, algo estrecha y de terminaciones suaves. La serif le da a la web un aire editorial que el logo no tiene.

### 4.2 Opciones (todas en Google Fonts, gratuitas para web)

| Opción | Títulos | Textos | A favor | En contra |
|---|---|---|---|---|
| **A · Recomendada** | **Barlow Semi Condensed** 600 / 700 | **Nunito Sans** 400 / 600 / 700 | Barlow Semi Condensed tiene las proporciones rectas y algo estrechas del logotipo: las R, Y, C y O casi coinciden. Nunito Sans es cálida, redondeada y muy legible en móvil. | Barlow en pesos altos puede sonar técnica si se abusa de las mayúsculas. |
| B · Máxima legibilidad | Barlow Semi Condensed 600 / 700 | Atkinson Hyperlegible Next 400 / 600 | Atkinson está diseñada para distinguir letras parecidas (I, l, 1; O, 0). Encaja con una marca que acompaña a personas con necesidades diversas de lectura. | Personalidad más peculiar en textos largos. |
| C · Más suave | M PLUS Rounded 1c 700 / 800 | Nunito Sans 400 / 600 | Muy amable e infantil. | Más ancha y redondeada que el logo, así que conecta peor con él. |

Las tres opciones se han comprobado cargándolas desde Google Fonts junto al logo real. **Decidido (30-09-2026): opción A, Barlow Semi Condensed + Nunito Sans.** Si el equipo valora especialmente la legibilidad en informes y materiales para familias, se puede usar Atkinson Hyperlegible Next solo en documentos (opción B) sin cambiar la web.

### 4.3 Escala tipográfica (opción A)

| Estilo | Fuente y peso | Escritorio | Móvil | Interlineado |
|---|---|---|---|---|
| Display (portadas, hero) | Barlow Semi Condensed 700 | 56 px | 38 px | 1,05 |
| H1 | Barlow Semi Condensed 700 | 44 px | 32 px | 1,1 |
| H2 | Barlow Semi Condensed 600 | 32 px | 26 px | 1,15 |
| H3 | Barlow Semi Condensed 600 | 22 px | 20 px | 1,25 |
| Entradilla | Nunito Sans 400 | 20 px | 18 px | 1,55 |
| Texto | Nunito Sans 400 | 18 px | 17 px | 1,6 |
| Texto destacado y botones | Nunito Sans 700 | 17 px | 16 px | 1,3 |
| Pequeño (pies, metadatos) | Nunito Sans 600 | 15 px | 14 px | 1,45 |
| Legal | Nunito Sans 400 | 13 px | 13 px | 1,45 |

Hoy la web muestra el texto a 14 px. Subirlo a 17-18 px mejora mucho la lectura, sobre todo en móvil y para madres y padres cansados.

- Ancho de línea: 60-70 caracteres. Titulares con `text-wrap: balance`.
- Mayúsculas: solo en etiquetas cortas (con espaciado de 0,06 em), nunca en titulares completos.
- **Alternativas fuera de la web** (Word, Canva, email): Arial Narrow o Arial en negrita para títulos, Arial para textos.

---

## 5. Fotografía

- **Real, nunca generada con IA**, ni del equipo ni de familias ni de testimonios. Sesiones reales en casas y colegios, con luz natural.
- **Cámara a la altura del niño o niña.** Manos, materiales, juego y gestos antes que caras.
- **Autorización escrita** de la familia para cualquier imagen en la que se reconozca a un menor. Sin ella se usan planos de manos y objetos, o se desenfoca.
- **Sin estética clínica** (batas, consultas, fondos blancos) ni fotos de banco con sonrisas forzadas.
- **Diversidad real:** distintas familias, edades de 1 a 18 años (incluir también adolescentes) y entornos de casa y de colegio.
- **Retoque:** tono natural y cálido, sin filtros de color. Se puede aplicar una capa de azul petróleo al 80 % para poner texto blanco encima.
- La foto del hero actual [CONFIRMAR si es real o de banco de imágenes]. Si es de banco, conviene sustituirla por una sesión real con autorización.

---

## 6. Iconos y recursos gráficos

- **Estilo:** línea de 2 px, extremos y esquinas redondeados, sin relleno. Familia recomendada: **Phosphor Icons** (estilo regular) o **Lucide**, ambas gratuitas.
- **Color:** azul petróleo sobre claro, blanco sobre oscuro, azul cielo solo como acento decorativo.
- **Tamaños:** 20 px junto a texto, 32 px en tarjetas y 48 px en iconos de servicio.
- **Recurso gráfico propio, el «rastro de pasitos»:** los cuatro círculos crecientes de los dedos del isotipo, en azul cielo. Sirve para marcar un recorrido (por ejemplo, los pasos «Cómo empezamos»), separar secciones o acompañar un titular. Uno por pieza como máximo.
- **Formas:** esquinas redondeadas (12-24 px), botones en píldora y curvas suaves que salen del círculo del logo.
- **Emojis:** no se usan como iconos de la interfaz.

---

## Cambios respecto a la versión anterior (guía v0.1, 29-09-2026)
1. Paleta: se adoptan vuestros valores (#1B7796 azul medio, #F1FAFD fondo claro); desaparecen #0077A8, #E3F5FC, #F4F9FB y la tinta #072C38; el azul TO queda solo dentro del logo.
2. Contraste: nueva tabla completa con el criterio estricto de 4,5:1 para todo texto, lo que prohíbe el cielo sobre petróleo que antes se permitía en titulares grandes.
3. Tipografía: aprobada la opción A (Barlow Semi Condensed + Nunito Sans), que sustituye a la propuesta anterior (M PLUS Rounded 1c).
4. El acento «Sol» pasa de propuesta a opción B no recomendada.
5. Logos: nueva versión en blanco con las huellas caladas, SVG vectorizados y normas de uso actualizadas.
