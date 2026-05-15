PROYECTO: GadgetSelection
DOCUMENTO: PLAN DE PRODUCCION GITHUB RAILWAY NAMECHEAP
VERSION: v1.1
ESTADO: activo
FECHA ORIGINAL: 2026-05-11
ULTIMA ACTUALIZACION: 2026-05-15
AUTORIDAD: operativa subordinada a docs/system y docs/operations/17

============================================================
OBJETIVO
============================================================

Registrar el plan de produccion real de GadgetSelection y su estado actualizado tras:

    cierre comercial completo de los cinco mundos
    limpieza legacy
    creacion del repositorio GitHub
    despliegue en Railway
    conexion del dominio principal de Namecheap
    creacion de paginas legales
    optimizacion global WebP
    inicio de la fase mobile UX
    preparacion para cookies, Google Analytics, SEO tecnico y apertura controlada

Este documento no sustituye al documento 17.

El documento 17 sigue siendo el estado operativo vivo del proyecto.
Este documento define y actualiza el camino de produccion desde localhost hasta web publica.

============================================================
CARPETA ACTIVA
============================================================

Proyecto activo:

    C:\Users\lucas\Desktop\PROYECTOS\GadgetSelection-clean

Repositorio GitHub:

    cikitraque13/GadgetSelection

Dominio principal:

    https://gadgetselection.com

Hosting:

    Railway

Proveedor dominio:

    Namecheap

============================================================
ESTADO ACTUAL DEL PROYECTO
============================================================

Estado general:

    sistema comercial completo
    desplegado en produccion
    dominio principal conectado
    catalogo cerrado
    legal base creado
    imagenes optimizadas globalmente a WebP
    legacy tecnico principal eliminado
    fase activa: mobile UX y preparacion de medicion

Mundos comerciales completos:

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion
    energia-autonomia

Mundos comerciales pendientes:

    ninguno

Totales comerciales:

    dolor-ergonomia -> 40 gadgets reales
    outdoor-supervivencia -> 52 gadgets reales
    viaje-tecnologia -> 48 gadgets reales
    entrenamiento-recuperacion -> 46 gadgets reales
    energia-autonomia -> 45 gadgets reales

Total global:

    231 gadgets reales
    231 JSON individuales
    231 imagenes comerciales WebP
    231 enlaces Amazon
    231 cards comerciales funcionando

Stack actual:

    PHP
    index.php
    router.php
    data JSON
    templates
    public assets
    GitHub
    Railway
    Namecheap
    dominio propio
    WebP global

============================================================
REGLA PRINCIPAL DE PRODUCCION
============================================================

No considerar la apertura publica amplia hasta cerrar:

    experiencia movil
    cookies y consentimiento
    Google Analytics configurado con consentimiento
    SEO tecnico minimo
    auditoria final
    validacion de rutas
    validacion de enlaces Amazon
    validacion legal
    validacion de rendimiento
    validacion de dominio y SSL

No se deben abrir nuevos frentes de catalogo salvo correccion puntual.

No se deben crear mas gadgets salvo necesidad real.

No se debe tocar codigo sin auditoria previa.

No se debe mezclar:

    mobile UX con catalogo
    cookies con SEO
    analytics con legal sin consentimiento
    footer con header
    JSON con CSS
    produccion con experimentos

============================================================
FASE 1 - CIERRE DE CATALOGO
============================================================

Estado:

    completada

Resultado:

    5 mundos comerciales completos
    231 gadgets reales
    231 JSON individuales
    231 imagenes comerciales
    231 enlaces Amazon

Mundos:

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion
    energia-autonomia

Energia-autonomia:

    completado
    redisenado conceptualmente
    ya no es mundo de cables, cargadores y powerbanks
    ahora es mundo de vida autonoma en camper, caravana, roulot y camping base

Indice final energia-autonomia:

    averias-pinchazos-bateria -> 6 gadgets
    estaciones-energia -> 5 gadgets
    electricidad-12v-230v -> 6 gadgets
    carga-exterior-camper -> 5 gadgets
    agua-ducha-depositos -> 6 gadgets
    frio-cocina-12v -> 6 gadgets
    solar-camper -> 5 gadgets
    habitabilidad-seguridad-camper -> 6 gadgets

Total energia-autonomia:

    45 gadgets comerciales reales

Estado:

    validado
    sin BOM
    sin mojibake
    sin descuadres JSON/imagen
    cards comerciales funcionando

============================================================
FASE 2 - LEGAL, AFILIACION Y COOKIES
============================================================

Estado legal base:

    completado parcialmente

Paginas creadas:

    /aviso-legal
    /politica-privacidad
    /politica-cookies
    /afiliacion-amazon

Archivos:

    templates/pages/aviso-legal.php
    templates/pages/politica-privacidad.php
    templates/pages/politica-cookies.php
    templates/pages/afiliacion-amazon.php

Footer:

    actualizado como zona legal

Footer actual:

    Aviso legal
    Privacidad
    Cookies
    Afiliacion Amazon

Hamburguesa:

    mantiene paginas editoriales de confianza

Hamburguesa actual:

    Metodo riguroso
    Fallos reales
    Claves tecnicas

Datos visibles actuales en aviso legal:

    Titular: Lucas Diaz Arias
    Email: lucasdiazarias85@gmail.com

Decision de privacidad:

    No publicar DNI ni domicilio personal durante la fase pre-apertura amplia.
    Antes de apertura publica definitiva se revisara cumplimiento legal aplicable.
    Se recomienda sustituir el email personal por email profesional del dominio cuando este disponible en Namecheap.

Estado visual legal:

    paginas compactas
    fondo verde/grafito continuo
    cards limpias
    CTA final integrado
    boton "Explorar mundos"
    sin BOM
    sin mojibake

Pendiente legal/cookies:

    banner cookies
    consentimiento para cookies no tecnicas
    carga de GA4 solo tras aceptar analitica
    posible actualizacion de politica de privacidad cuando se configure proveedor real de email/newsletter
    revisar datos legales definitivos antes de apertura amplia

============================================================
FASE 3 - AUDITORIA PRE-GITHUB
============================================================

Estado:

    completada

Acciones realizadas:

    limpieza legacy con guardias
    auditoria de catalogo
    auditoria de imagenes
    auditoria de rutas
    auditoria de BOM/mojibake
    auditoria PHP lint
    auditoria pre-commit

Legacy eliminado:

    assets-source
    data/_archive
    data/rankings
    data/scenarios
    data/test
    data/subcontexts
    app/core/gadget_engine
    app/engine
    app/monetization
    controladores legacy
    repositorios legacy
    templates/landing
    templates/pages/gadget
    templates/pages/scenario
    templates/pages/subcontext
    templates/components
    scripts
    storage/backups
    public/assets/images/worlds
    public/assets/images/landing

Resultado:

    catalogo intacto
    PHP lint sin errores
    rutas principales limpias
    sin basura critica
    repo preparado para GitHub

============================================================
FASE 4 - GITHUB
============================================================

Estado:

    completada

Repositorio:

    cikitraque13/GadgetSelection

Rama:

    main

Commit inicial:

    Initial production-ready GadgetSelection build

Archivos de despliegue creados:

    composer.json
    railway.json

Configuracion:

    aplicacion PHP plana
    router.php como router local/produccion

Estado:

    repo creado
    push realizado
    estructura del proyecto visible en GitHub
    sin carpetas legacy principales
    sin backups internos
    sin archivos grandes innecesarios detectados

============================================================
FASE 5 - RAILWAY TEMPORAL
============================================================

Estado:

    completada

Hosting:

    Railway

Repositorio conectado:

    cikitraque13/GadgetSelection

Configuracion:

    composer.json
    railway.json

Start command:

    php -S 0.0.0.0:$PORT router.php

Resultado:

    despliegue online
    URL temporal generada
    Home validada
    mundos validados
    needs validadas
    cards comerciales validadas
    paginas legales validadas
    404 validado
    imagenes cargando correctamente

Estado:

    Railway funcional

============================================================
FASE 6 - NAMECHEAP Y DOMINIO
============================================================

Estado:

    completada parcialmente

Dominio conectado:

    gadgetselection.com

Dominio activo:

    https://gadgetselection.com

Proveedor dominio:

    Namecheap

Hosting destino:

    Railway

Registros usados:

    CNAME @ -> tm7ksycm.up.railway.app
    TXT _railway-verify -> railway-verify=...

Estado:

    gadgetselection.com validado en Railway
    web accesible en dominio principal
    SSL activo

www.gadgetselection.com:

    pospuesto

Motivo:

    limite actual de dominio personalizado en el plan Railway

Decision:

    dominio oficial actual = https://gadgetselection.com

Pendiente futuro:

    activar www si se amplia plan Railway o se configura redireccion alternativa

============================================================
FASE 7 - OPTIMIZACION WEBP GLOBAL
============================================================

Estado:

    completada

Objetivo:

    reducir peso visual del sistema antes de apertura amplia

Backup previo:

    C:\Users\lucas\Desktop\GS_BACKUPS\GadgetSelection-clean-BACKUP-20260514-001240

Backup:

    618 archivos
    206,75 MB
    .git excluido
    numero de archivos coincide
    tamano total coincide

Proceso:

    prueba externa por bloque
    conversion WebP con Pillow
    validacion visual
    aplicacion por fases
    borrado de PNG solo tras validacion
    auditoria global final

Fases cerradas:

    Carrusel Home -> WebP cerrado
    public/assets/images/worlds -> eliminado por obsoleto
    Needs / heroes / indices -> WebP cerrado
    Gadgets dolor-ergonomia -> WebP cerrado
    Gadgets energia-autonomia -> WebP cerrado
    Gadgets entrenamiento-recuperacion -> WebP cerrado
    Gadgets outdoor-supervivencia -> WebP cerrado
    Gadgets viaje-tecnologia -> WebP cerrado

Resultado final:

    carousel -> 5 WebP / 0 PNG
    needs -> 43 WebP / 0 PNG
    gadgets -> 231 WebP / 0 PNG

JSON revisados:

    274

Estado JSON:

    todos apuntan a WebP

Peso antes:

    public/assets/images aprox 203,96 MB

Peso despues:

    carousel -> 0,70 MB
    needs -> 4,69 MB
    gadgets -> 16,45 MB

Total principal aproximado:

    21,84 MB

Reduccion:

    mas de 180 MB

Validacion:

    PHP clave OK
    sin BOM
    sin mojibake
    sin PNG/JPG en rutas principales
    auditoria final WebP global sin errores

Estado:

    optimizacion WebP global completada
    deploy validado en produccion

============================================================
FASE 8 - MOBILE UX
============================================================

Estado:

    en curso

Motivo:

    La version desktop esta validada, pero la experiencia movil necesita ajustes de densidad, jerarquia y scroll.

Regla:

    mobile no debe ser desktop reducido
    mobile debe ser una experiencia compacta y de decision

Header movil:

    decision aprobada:

        Logo GadgetSelection | Mundos | Hamburguesa

    No mostrar en barra movil:

        Soluciones
        Rankings
        Esenciales
        Gadgets

    Motivo:

        esas entradas ya se explican dentro de Home mediante:
            Accesos utiles
            Seleccion activa

    Archivo implicado:

        public/assets/header-footer.css

Home movil:

    pendiente de cierre final

    Objetivo:

        carrusel mas compacto
        accesos utiles mas densos
        seleccion activa mas usable
        footer menos pesado

    Archivo implicado:

        public/assets/home.css

Mundo / indice movil:

    parcialmente trabajado

    Archivos implicados:

        public/assets/landing.css
        public/assets/landing-variants.css
        templates/pages/world.php

Need movil:

    frente activo reciente

    Archivo implicado:

        public/assets/css/world-need.css

    Objetivo visual:

        primera vista de /dolor-ergonomia/dolor-cervical debe mostrar:
            breadcrumb
            DOLOR Y ERGONOMIA
            Dolor cervical
            descripcion
            boton azul
            imagen

        siguiente tramo:
            Seleccion GadgetSelection
            Gadgets recomendados: Dolor cervical
            cards

    Reglas:

        no tocar PHP
        no tocar JSON
        no tocar imagenes
        no tocar cards
        no tocar Amazon CTA
        no usar order
        no usar 100vh / 100svh
        no meter margin-top gigante
        no redisenar cards

    Bloques acumulados en world-need.css:

        GS NEED MOBILE HERO
        GS NEED MOBILE CARDS
        GS NEED MOBILE IMAGE BALANCE
        GS NEED MOBILE EYEBROW SPACING
        GS NEED MOBILE HERO RHYTHM
        GS NEED MOBILE HEADING SPACING

    Riesgo:

        acumulacion de parches CSS

    Decision:

        antes de seguir conviene auditar y consolidar world-need.css si se detectan contradicciones

Footer movil:

    pendiente de revision

Legal movil:

    pendiente de revision final

============================================================
FASE 9 - COOKIES Y GOOGLE ANALYTICS
============================================================

Estado:

    pendiente

Condicion previa:

    cerrar mobile UX basica

Objetivo:

    implementar banner de cookies
    permitir aceptar/rechazar
    enlazar politica de cookies
    guardar preferencia
    cargar GA4 solo tras consentimiento

Pendiente:

    obtener GA4 Measurement ID
    pasar informe al Director de metricas
    definir eventos
    definir conversiones
    implementar eventos
    validar medicion

Eventos candidatos:

    page_view
    header_nav_click
    home_carousel_world_click
    home_authority_need_click
    home_cta_essential_click
    view_world
    view_need
    amazon_outbound_click
    footer_legal_click
    newsletter_form_submit_attempt

Regla:

    no cargar GA4 antes de aceptar cookies analiticas

============================================================
FASE 10 - SEO TECNICO MINIMO
============================================================

Estado:

    pendiente

Elementos pendientes:

    favicon / diamante de marca
    robots.txt
    sitemap.xml
    canonical
    titles/metas si procede
    Search Console
    Open Graph si procede

Nota:

    El favicon es importante para imagen de marca, pero se pospuso porque mobile UX era mas urgente.

============================================================
FASE 11 - AUDITORIA FINAL PRE-APERTURA
============================================================

Pendiente cuando se cierren:

    mobile UX
    cookies
    GA4
    SEO tecnico minimo

Validar:

    rutas principales
    rutas legales
    404
    header desktop
    header movil
    Home desktop
    Home movil
    mundos
    needs
    cards
    botones Amazon
    velocidad
    WebP
    BOM
    mojibake
    PHP lint
    dominio
    SSL
    Git limpio
    Railway deploy verde

============================================================
CHECKLIST DE BLOQUEO ACTUALIZADO
============================================================

No hacer apertura amplia si ocurre alguno:

    mobile UX rota
    cookies sin consentimiento correcto
    GA4 cargando antes de aceptar
    sitemap/robots inexistente si se decide indexar
    enlaces Amazon rotos
    paginas legales ausentes
    rutas principales rotas
    imagenes rotas
    BOM
    mojibake
    errores PHP
    Git sucio sin control
    Railway deploy fallando

============================================================
ORDEN ACTUAL DE EJECUCION
============================================================

Desde este punto:

    1. Cerrar mobile UX:
        header movil
        Home movil
        mundo/indice movil
        need/cards movil
        legales/footer movil

    2. Consolidar CSS si hay parches acumulados:
        header-footer.css
        home.css
        world-need.css
        landing.css
        editorial.css

    3. Implementar favicon / diamante de marca.

    4. Implementar cookies + consentimiento.

    5. Integrar GA4 con consentimiento.

    6. Crear robots.txt y sitemap.xml.

    7. Auditoria final pre-apertura.

    8. Apertura controlada.

============================================================
FRASE DE CONTINUIDAD
============================================================

Continuamos GadgetSelection en produccion. El dominio https://gadgetselection.com funciona. GitHub y Railway estan activos. El catalogo esta cerrado con 5 mundos y 231 gadgets reales. Las imagenes principales estan optimizadas globalmente en WebP y la auditoria final WebP no dio errores. El documento 18 queda actualizado a v1.1 como plan de produccion ejecutado parcialmente. El frente activo es mobile UX, especialmente header movil, Home movil y paginas need moviles. La decision de header movil es Logo + Mundos + hamburguesa. La regla es no tocar PHP, JSON, imagenes, cards ni Amazon CTA durante ajustes mobile. Antes de seguir acumulando parches, se recomienda auditar y consolidar los CSS moviles.

============================================================
ADENDA 2026-05-15 — CIERRE MOBILE UX Y ESTADO POST-MOBILE
============================================================

OBJETIVO DE ESTA ADENDA

Registrar el cierre de la fase Mobile UX dentro del plan de producción de GadgetSelection.

Esta fase se ejecutó después de:

    cierre comercial completo
    deploy en Railway
    dominio gadgetselection.com activo
    optimización WebP global
    creación de páginas legales
    validación de Home y desktop

El objetivo fue cerrar la experiencia móvil antes de pasar a los siguientes frentes de producción.

============================================================
ESTADO MOBILE UX
============================================================

Estado:

    completado visualmente

Frentes móviles cerrados:

    Header móvil
    Home móvil
    Footer móvil
    Cookies móvil
    Legales móvil
    Hamburguesa editorial móvil
    Páginas Need móvil
    Mundos móvil

Regla de cierre:

    No tocar más CSS sin bug visual real.
    No seguir acumulando parches.
    No reabrir frentes visualmente aprobados.
    Si aparece un bug, auditar primero y tocar solo el frente afectado.

============================================================
AJUSTES REALIZADOS
============================================================

Header móvil:

    Logo GadgetSelection
    Mundos
    Hamburguesa

Home móvil:

    carrusel compacto
    accesos útiles claros
    selección activa usable
    separación correcta entre header y carrusel

Footer móvil:

    newsletter compactado
    paddings reducidos
    título reducido
    input y botón tocables
    enlaces legales ordenados

Cookies móvil:

    tarjetas normalizadas
    grid móvil corregido
    hero compacto
    CTA compacto

Legales móvil:

    aviso legal, privacidad y afiliación Amazon validados
    política de cookies corregida

Hamburguesa editorial móvil:

    /metodo-riguroso
    /fallos-reales
    /claves-tecnicas

    fondo oscuro continuo
    hero editorial alineado con lógica desktop
    panel visual secundario oculto en móvil
    tarjetas editoriales estabilizadas
    botón verde con sentido como acceso al contenido

Need móvil:

    hero de necesidad estabilizado
    heading comercial estabilizado
    cards móviles estabilizadas
    Amazon CTA intacto

Mundos móvil:

    hero de mundo auditado
    índice visual auditado
    cards de índice auditadas

============================================================
SANEAMIENTO CSS
============================================================

Archivo consolidado:

    public/assets/editorial.css

Resultado:

    estructura editorial y legal consolidada
    bloques de andamio/fix integrados
    mobile editorial y legal estabilizados

Archivos auditados y estables:

    public/assets/home.css
    public/assets/header-footer.css
    public/assets/css/world-need.css
    public/assets/landing.css
    public/assets/landing-variants.css

Decisión:

    home.css no se toca sin bug real
    header-footer.css no se toca sin bug real
    world-need.css no se toca sin bug real
    landing.css no se toca sin bug real
    editorial.css queda saneado y consolidado

============================================================
AUDITORÍA FINAL MOBILE UX
============================================================

Se realizó auditoría final de producción con user-agent móvil.

Rutas auditadas:

    /
    /dolor-ergonomia
    /outdoor-supervivencia
    /viaje-tecnologia
    /entrenamiento-recuperacion
    /energia-autonomia
    /dolor-ergonomia/dolor-cervical
    /dolor-ergonomia/dolor-lumbar
    /viaje-tecnologia/adaptadores-viaje
    /energia-autonomia/estaciones-energia
    /outdoor-supervivencia/linternas-recargables
    /entrenamiento-recuperacion/entrenamiento-casa
    /metodo-riguroso
    /fallos-reales
    /claves-tecnicas
    /aviso-legal
    /politica-privacidad
    /politica-cookies
    /afiliacion-amazon

Resultado:

    rutas principales 200
    viewport meta presente
    CSS cargado
    clases esperadas presentes
    footer presente
    legal presente donde corresponde
    editorial presente donde corresponde
    needs presentes donde corresponde
    Amazon refs presentes en páginas comerciales
    sin backups internos
    PHP lint sin errores
    CSS clave sin BOM ni mojibake
    llaves CSS balanceadas

============================================================
ESTADO POST-MOBILE
============================================================

Estado general:

    catálogo cerrado
    dominio activo
    producción online
    WebP global cerrado
    legal base creado
    Mobile UX cerrado visualmente

Pendientes siguientes:

    banner cookies
    consentimiento
    Google Analytics solo tras consentimiento
    SEO técnico mínimo
    favicon / diamante de marca
    auditoría final pre-apertura
    apertura controlada

Condición:

    No iniciar medición ni nuevos frentes hasta que el director del proyecto lo indique.

============================================================
ACTUALIZACIÓN DEL ORDEN DE EJECUCIÓN
============================================================

Orden actualizado desde este punto:

    1. Mantener Mobile UX cerrado salvo bug real.
    2. Implementar banner cookies cuando se indique.
    3. Implementar consentimiento.
    4. Integrar Google Analytics solo tras consentimiento.
    5. Configurar eventos de medición.
    6. Implementar SEO técnico mínimo.
    7. Ejecutar auditoría final pre-apertura.
    8. Apertura controlada.

============================================================
REGLA POST-MOBILE
============================================================

No tocar más CSS por estética interna.
No limpiar world-need.css ni landing.css si visualmente están estables.
No reabrir Home, footer, cookies o editorial si están aprobados.
No mezclar cookies con Analytics sin consentimiento.
No cargar GA4 antes de aceptar cookies analíticas.

Si aparece bug real:

    1. Auditar.
    2. Leer archivo real.
    3. Tocar un solo frente.
    4. Validar.
    5. Commit pequeño.

============================================================
FRASE DE CONTINUIDAD ACTUALIZADA
============================================================

Continuamos GadgetSelection en producción con dominio https://gadgetselection.com activo. El catálogo comercial está cerrado con 5 mundos y 231 gadgets reales. La optimización WebP global está completada. La experiencia móvil queda cerrada visualmente y editorial.css fue saneado y consolidado. Los CSS móviles restantes han sido auditados y quedan estables. No se debe tocar más CSS sin bug visual real. El siguiente frente del plan de producción queda pendiente de indicación del director del proyecto.