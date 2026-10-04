# Estrategia de Subida de 9 Artículos - 3 Tandas
**Objetivo:** Publicar progresivamente para máximo impacto SEO y distribución de autoridad

**Fecha de inicio:** 4 de octubre de 2026

---

## ARTÍCULOS A SUBIR (9 Total)

### ✅ SEMANA 1: 4 de octubre (HOY) 
**TANDA 1 - 2 artículos de LOGOPEDIA (Urgencia Alta)**

**Rationale:** Búsquedas con urgencia inmediata (padres buscando solución YA)
- Tiempo a ranking: 1-2 semanas
- Conversión: Alta (familias en acción)

**Artículos:**
1. **mi-hijo-no-habla-a-los-2-anos-necesita-logopedia.html**
   - Keyword: "hijo no habla 2 años logopedia"
   - Búsquedas mensuales: ~900
   - Audience: Padres con hijos 1-3 años sin lenguaje
   - CTA: Evaluación neuropsicológica + servicios logopedia

2. **hijo-le-cuesta-leer-escribir-terapia-logopeda-ocupacional.html**
   - Keyword: "hijo le cuesta leer escribir terapia"
   - Búsquedas mensuales: ~600
   - Audience: Padres con hijos 6-12 años con problemas lecto-escritura
   - CTA: Terapia ocupacional + logopedia

**Acción manual:**
```bash
# Estos artículos ya están en repo
# Solo verifica que están en /blog/
ls Web/web-source/blog/ | grep -E "no-habla-a-los-2|le-cuesta-leer"

# Luego: Enviar a Google Search Console manualmente
# https://search.google.com/search-console > URL Inspection
# Pega cada URL y haz "Request indexing"
```

---

### ⏳ SEMANA 2: 11 de octubre
**TANDA 2 - 2 artículos de INTEGRACIÓN SENSORIAL**

**Rationale:** Complementan TANDA 1, son soluciones concretas
- Apoyan los artículos anteriores
- Crean un cluster temático
- Timing: 1 semana después (Google time to index)

**Artículos:**
1. **hijo-se-desregula-explota-sensorial.html**
   - Keyword: "hijo se desregula explota sensorial"
   - Audience: Padres con hijos con problemas regulación
   - Enlaza a: /integracion-sensorial

2. **problemas-aula-integracion-sensorial-no-conducta.html**
   - Keyword: "problemas aula integración sensorial"
   - Audience: Padres, maestros buscando soluciones conducta
   - Enlaza a: /acompanamiento-sombra, /integracion-sensorial

**Acción:**
- Esperar 7 días desde TANDA 1
- Verificar que TANDA 1 aparece en GSC (debe haber impresiones)
- Subir TANDA 2

---

### ⏳ SEMANA 3: 18 de octubre
**TANDA 3 - 5 artículos VARIADOS (Consolidación)**

**Rationale:** Semanas 1-2 son prueba; semana 3 es consolidación
- Ya ves datos de GSC
- Puedes ajustar según resultados
- Estos 5 son más "explorativos"

**Artículos:**
1. **terapia-en-casa-o-en-centro-cual-es-mejor.html**
   - Keyword: "terapia en casa o en centro"
   - Audience: Padres tomando decisión
   - CTA: Portada + servicios

2. **hijo-inteligente-aburrido-frustrado-como-potenciar-talento.html**
   - Keyword: "hijo inteligente aburrido frustrated"
   - Audience: Padres con altas capacidades
   - CTA: Evaluación, servicios psicología

3. **hijo-se-distrae-interrumpe-no-atiende-cuando-ir-terapeuta.html**
   - Keyword: "hijo se distrae no atiende TDAH"
   - Audience: Padres sospechando TDAH
   - CTA: /tdah, evaluación

4. **lista-espera-crecovi-cheque-servicio-madrid.html**
   - Keyword: "CRECOVI cheque servicio madrid"
   - Audience: Padres buscando financiación
   - CTA: /cheque-servicio

5. **aula-adaptada-estrategias-terapia-ocupacional.html**
   - Keyword: "aula adaptada estrategias"
   - Audience: Maestros, orientadores escolares
   - CTA: /acompanamiento-sombra, /integracion-sensorial

**Acción:**
- Revisar GSC antes de subir (ver qué funcionó)
- Ajustar keywords si es necesario
- Subir los 5 en bloque

---

## CALENDARIO DE ACTIVACIÓN

| Fecha | Tanda | Artículos | Status |
|-------|-------|-----------|--------|
| **4 oct** | 1 | 2 logopedia | 📍 HOY - Activa ahora |
| **11 oct** | 2 | 2 sensorial | ⏳ En 7 días |
| **18 oct** | 3 | 5 variados | ⏳ En 14 días |

---

## CHECKLIST DE ACTIVACIÓN

### TANDA 1 (4 de octubre - HOY):

**A. Verificación local:**
- [ ] Confirmar que archivos están en `/blog/`
  ```bash
  ls Web/web-source/blog/mi-hijo-no-habla*
  ls Web/web-source/blog/hijo-le-cuesta*
  ```
- [ ] Verificar que tienen HTML válido (sin errores)

**B. Google Search Console:**
- [ ] Abrir https://search.google.com/search-console
- [ ] Ir a **URL Inspection**
- [ ] Copiar URL: `https://www.proyectopasitos.es/blog/mi-hijo-no-habla-a-los-2-anos-necesita-logopedia`
- [ ] Clickear **Request indexing**
- [ ] Repetir para segundo artículo
- [ ] Esperar confirmación (24-72 horas)

**C. Monitoreo:**
- [ ] Anotar fecha: 4 octubre 2026
- [ ] Revisar GSC en 7 días (11 de octubre)
- [ ] Esperado: 10-50 impresiones en la primera semana

---

### TANDA 2 (11 de octubre - EN 7 DÍAS):

**A. Verificación GSC ANTES de subir:**
- [ ] ¿TANDA 1 aparece en GSC?
- [ ] ¿Cuántas impresiones?
- [ ] ¿Cuántos clics?
- [ ] ¿Posición media?

**B. Ajustes (si es necesario):**
- Si TANDA 1 no aparece: revisar que GSC rastreó correctamente
- Si TANDA 1 aparece pero con posición 50+: mejorar snippet

**C. Subida de TANDA 2:**
- [ ] Enviar a GSC (URL Inspection > Request indexing)
- [ ] Hacer lo mismo para 2 artículos

---

### TANDA 3 (18 de octubre - EN 14 DÍAS):

**A. Análisis completo de GSC:**
- [ ] Performance: últimos 14 días
- [ ] Total impresiones TANDA 1+2
- [ ] Top keywords
- [ ] Top páginas
- [ ] CTR promedio

**B. Decisión de subida:**
- Si resultados son buenos (50+ impresiones): subir TANDA 3 como planeado
- Si resultados son malos: revisar qué mejorar en TANDA 1+2 antes de subir TANDA 3

**C. Subida:**
- [ ] Enviar 5 artículos a GSC
- [ ] Documentar resultados

---

## ESPERADO vs REALIDAD

### Semana 1-2 (4-18 octubre):
- **Esperado:** 50-150 impresiones totales
- **Realidad:** Depende de competencia + calidad de snippet
- **Señal de salud:** Si >0 impresiones = búsqueda orgánica funciona

### Semana 2-3 (11-25 octubre):
- **Esperado:** 150-300 impresiones (crecimiento)
- **Realidad:** Depende de interlinking + mejoras realizadas
- **Señal de salud:** Si crece semana a semana = trending up

### Mes 1 (4 de nov):
- **Esperado:** 300-500 impresiones
- **Realidad:** Depende de todo arriba
- **Señal de salud:** Al menos 1 artículo en top 10 para su keyword

---

## NEXT STEPS DESPUÉS DE SEMANA 3

**18 de octubre:** Análisis completo
- Contactar para revisar GSC
- Decidir qué optimizar antes de interlinking

**Después:** Implementar interlinking según INTERLINKING-PLAN.md

---

## NOTAS

⚠️ **Importante:** Los artículos YA ESTÁN en el repo, solo necesitan ser "activados" en GSC

🔗 **Documentos relacionados:**
- GOOGLE-SEARCH-CONSOLE-SETUP.md (cómo configurar)
- INTERLINKING-PLAN.md (qué artículos enlazan)
- HITOS-SEO-CALENDARIO.md (timeline general)

📞 **Contactar el 18 de octubre** con screenshot de GSC Performance para análisis
