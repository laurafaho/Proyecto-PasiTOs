# Google Search Console Setup - Guía Paso a Paso
**Para:** proyectopasitos.es  
**Objetivo:** Monitorear qué búsquedas traen tráfico y optimizar

---

## PASO 1: Acceder a Google Search Console

1. Ve a **https://search.google.com/search-console**
2. Inicia sesión con tu **Google Account** (la misma que usa proyectopasitos@gmail.com)
3. Si ya existe el sitio, verás proyectopasitos.es en el listado

---

## PASO 2: Si NO tienes GSC configurado (Primeras veces)

### Opción A: DNS (Recomendada - verificación permanente)

1. Haz clic en **Agregar propiedad** → **URL prefix** → `https://www.proyectopasitos.es`
2. Elige **Verificar mediante Google Analytics** (más fácil)
   - Si ya tienes Google Analytics conectado, se verifica automáticamente
   - Si no: necesitarás acceder a tu panel de Hostinger/hosting para añadir un DNS record

3. O elige **Método alternativo** → **HTML tag**
   - Copia el `<meta>` tag
   - Pégalo en `Web/web-source/index.html` (antes del `</head>`)
   - Espera 24-48 horas a que Google rastree

---

## PASO 3: Una vez configurado, verás el Dashboard

**Secciones importantes:**

### 1. **Performance (Rendimiento)**
- **Clics:** Cuántas personas clickearon tu sitio en Google
- **Impresiones:** Cuántas veces apareciste en búsquedas
- **CTR:** Click-through rate (clics ÷ impresiones)
- **Posición media:** En qué posición apareces (1, 2, 3, etc.)

**Qué hacer:**
- Filtrar por fecha (últimos 7 días, 28 días, 3 meses)
- Filtrar por **Queries** (búsquedas) para ver qué keywords te traen tráfico
- Filtrar por **Pages** para ver cuál página rankea mejor

### 2. **Coverage (Cobertura)**
- **Submitted:** Artículos que mandaste a Google
- **Valid:** Los que Google entiende y puede indexar
- **Errors:** Errores de estructura o acceso

**Qué hacer:**
- Revisar que todos tus artículos están en "Valid"
- Si hay errores: investigar el motivo

### 3. **Sitemap (Mapa del sitio)**
- Verifica que tu `sitemap.xml` está enviado
- Google debe ver: 61 artículos + 5 páginas = ~66 URLs

**Si NO tienes sitemap:**
- Crea uno (herramienta gratuita: https://www.xml-sitemaps.com/)
- Súbelo a `Web/web-source/sitemap.xml`
- Envía en GSC → Sitemaps

### 4. **Mobile Usability**
- Verifica que no hay errores de móvil
- Tus páginas son responsive (se ven bien en teléfono)

---

## PASO 4: Monitoreo semanal (Checklist)

**Cada lunes:**
- [ ] Performance: ¿Cuántos clics esta semana?
- [ ] Qué artículos nuevos aparecen en búsquedas
- [ ] Posición media de palabras clave principales
  - "terapia infantil a domicilio madrid" ¿en qué posición?
  - "TDAH madrid" ¿en qué posición?
  - "autismo madrid" ¿en qué posición?
- [ ] CTR: ¿Gente clickea cuando nos ve?

---

## PASO 5: Optimizar basándote en GSC

**Escenario 1:** Apareces en búsquedas pero pocos clics
- Problema: El título/descripción no convence
- Solución: Mejora el título o meta description

**Escenario 2:** No apareces en búsquedas esperadas
- Problema: No rankeas esa palabra clave
- Solución: Añade esa keyword al artículo o crea uno nuevo

**Escenario 3:** Posición media es 8-10, pero baja CTR
- Problema: Necesitas mejorar el snippet (title + meta)
- Solución: Hazlo más atractivo, añade número o dato (ej: "5 señales de...")

**Escenario 4:** Posición media es 20+
- Problema: Tienes contenido pero no es lo suficientemente fuerte
- Solución: Mejorar la calidad del artículo (más links, mejor estructura, más largo)

---

## PASO 6: Enviar URL manualmente (para artículos nuevos)

Cuando subes un artículo nuevo:

1. Ve a GSC → **URL inspection**
2. Pega la URL del artículo: `https://www.proyectopasitos.es/blog/nuevo-articulo`
3. Haz clic en **Request indexing**
4. Google rastreará en 24-72 horas (en lugar de esperar semanas)

---

## PASO 7: Configurar alertas de problemas

GSC → **Settings** → **Notifications**

- ☑️ Core Web Vitals issues
- ☑️ Crawl errors
- ☑️ Security issues

**Por qué:** Notificaciones por email si algo falla

---

## MÉTRICAS CLAVE A TRACKEAR

### Después de 2 semanas (primeros artículos):
- [ ] ¿Aparecen en impresiones?
- [ ] ¿Cuántas impresiones?
- [ ] ¿Cuántos clics?

### Después de 1 mes (consolidación):
- [ ] Top 3 queries que traen tráfico
- [ ] CTR promedio
- [ ] Posición media de palabras clave principales

### Después de 2-3 meses:
- [ ] ¿Algún artículo en top 3 de búsquedas?
- [ ] ¿Crecimiento semanal de impresiones?
- [ ] ¿Conversiones (contactos) desde búsqueda orgánica?

---

## PALABRAS CLAVE A MONITOREAR

**Principales:**
- terapia infantil a domicilio madrid
- TDAH madrid
- autismo madrid
- terapia ocupacional madrid

**Secundarias:**
- evaluación neuropsicológica madrid
- terapeuta sombra madrid
- logopeda infantil madrid
- integración sensorial madrid

**Largos/específicos:**
- mi hijo no habla a los 2 años
- hijo se distrae en clase
- hijo le cuesta escribir

---

## INTEGRACIÓN CON ANALYTICS

**Bonus:** Conecta Google Analytics a tu sitio para ver:
- Desde qué búsquedas vienen usuarios
- Qué páginas visitan después
- Si hacen clic en CTA (WhatsApp, teléfono, contacto)

---

## ERRORES COMUNES

❌ **Error:** No enviar URL manualmente
→ Solución: Envía en GSC > URL inspection para acelerar indexación

❌ **Error:** No revisar coverage
→ Solución: Verifica que todos los artículos están "Valid"

❌ **Error:** Ignorar la posición 11-20
→ Solución: Mejora esos artículos para entrar top 10

❌ **Error:** No revisar CTR
→ Solución: Si CTR es bajo, mejora el snippet en Google (title + meta)

---

## CHECKLIST FINAL

- [ ] GSC está conectado y verifica sitio
- [ ] Sitemap XML enviado
- [ ] Mobile usability: sin errores
- [ ] Primeros artículos enviados manualmente
- [ ] Alerts de problemas activadas
- [ ] Palabras clave principales bajo seguimiento
- [ ] Calendario de revisión semanal establecido

---

## PRÓXIMOS PASOS (Después de 2 semanas)

1. **Revisar Performance** en GSC
2. **Identificar** qué artículos rankean bien
3. **Mejorar** los que no rankean (añadir keywords, mejorar estructura)
4. **Crear artículos nuevos** sobre palabras clave high-intent que ves en GSC
5. **Optimizar snippets** de artículos con baja CTR
