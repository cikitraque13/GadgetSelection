PROYECTO: GadgetSelection
DOCUMENTO: PLAN DE PRODUCCION GITHUB RAILWAY NAMECHEAP
VERSION: v1.0
ESTADO: pendiente
ULTIMA ACTUALIZACION: 2026-05-11
AUTORIDAD: operativa subordinada a docs/system y docs/operations/17

OBJETIVO

Preparar la salida a produccion de GadgetSelection desde el entorno local actual hacia un flujo profesional basado en:

    GitHub
    Railway
    Namecheap
    legal
    cookies
    afiliacion Amazon
    validacion tecnica
    apertura controlada

Este documento no sustituye al documento 17.
El documento 17 sigue siendo el estado operativo vivo del proyecto.
Este documento define el camino para pasar de localhost a produccion sin subir basura, sin romper el sistema y sin abrir trafico antes de estar preparado.

ESTADO ACTUAL

Proyecto activo:

    C:\Users\lucas\Desktop\PROYECTOS\GadgetSelection-clean

Estado actual:

    trabajo en localhost
    docs saneado
    docs/system limpio
    docs/operations saneado
    documento 17 actualizado
    4 mundos comerciales completos
    186 gadgets reales implementados

Mundos comerciales completos:

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion

Mundo comercial pendiente:

    energia-autonomia

Stack actual:

    PHP
    index.php
    router.php
    data JSON
    templates
    public assets
    localhost

Stack objetivo de produccion:

    GitHub como repositorio
    Railway como hosting
    Namecheap como dominio
    PHP app desplegada desde GitHub
    dominio propio con SSL
    legal y cookies activos antes de trafico real

REGLA PRINCIPAL

No desplegar produccion publica hasta que se cumplan estas condiciones:

    energia-autonomia cerrado comercialmente o decision explicita de lanzar sin el
    paginas legales creadas
    disclosure afiliado creado
    politica de cookies creada
    banner de cookies implementado si corresponde
    repositorio limpio
    .gitignore revisado
    sin backups internos
    sin archivos basura
    sin secretos
    localhost verde
    Railway temporal verde
    dominio Namecheap validado
    SSL activo
    rutas principales revisadas

No se sube una maquina potente con piezas sueltas debajo del asiento.

FASE 1 - CERRAR ENERGIA-AUTONOMIA

Objetivo:

    completar el ultimo mundo comercial pendiente

Mundo:

    energia-autonomia

Needs actuales:

    cables-usb-c
    cargadores-gan
    carga-inalambrica
    energia-escritorio
    estaciones-energia
    powerbanks
    regletas-viaje
    sai-ups

Regla estrategica:

    Energia-autonomia no es outdoor-supervivencia.

Outdoor:

    mochila
    ruta
    lluvia
    camping ligero
    emergencia exterior
    radios
    linternas
    filtros
    powerbanks resistentes de mochila

Energia-autonomia:

    camper
    rulot
    vanlife
    estaciones electricas
    paneles solares grandes
    SAI / UPS
    autonomia prolongada
    energia domestica de respaldo
    carga en escritorio
    carga de vehiculo o vida movil

Metodo:

    1. Auditar indice real de energia-autonomia.
    2. Confirmar orden visual.
    3. Crear/verificar carpetas de imagenes de gadgets.
    4. Crear/verificar carpetas JSON.
    5. Elegir primera tarjeta visual.
    6. Hacer prospeccion Amazon por funcion.
    7. Guardar imagenes reales.
    8. Recibir TXT con enlace, titulo y precio.
    9. Definir naming final.
    10. Auditar imagenes.
    11. Crear JSON individuales.
    12. Validar.
    13. Revisar localhost.
    14. Pasar a la siguiente tarjeta.

Criterio de cierre:

    energia-autonomia debe quedar con gadgets reales, imagenes correctas, enlaces Amazon, precios, JSON individuales y localhost verde.

FASE 2 - LEGAL, AFILIACION Y COOKIES

Objetivo:

    preparar el proyecto para trafico real y monetizacion sin parecer una web improvisada.

Piezas necesarias:

    aviso legal
    politica de privacidad
    politica de cookies
    disclosure afiliado Amazon
    banner de cookies
    pagina de contacto o informacion basica
    footer con enlaces legales

Paginas recomendadas:

    /aviso-legal
    /privacidad
    /cookies
    /afiliacion
    /contacto

Contenido minimo de aviso legal:

    responsable del sitio
    finalidad del sitio
    uso de enlaces de afiliado
    limitacion de responsabilidad
    contacto
    jurisdiccion si aplica

Contenido minimo de privacidad:

    que datos se recogen
    si existe formulario de contacto
    si se usan analiticas
    si se usan cookies
    base legal
    derechos del usuario
    contacto

Contenido minimo de cookies:

    que cookies se usan
    finalidad
    si son tecnicas
    si son analiticas
    si son de terceros
    como aceptar
    como rechazar
    como modificar consentimiento

Disclosure afiliado:

    GadgetSelection puede recibir comision por compras realizadas desde enlaces de afiliado.
    Esto no debe alterar el criterio editorial de seleccion.
    Los precios pueden cambiar.
    La compra se realiza en Amazon u otro comercio externo.

Banner cookies:

    Si solo hay cookies tecnicas, puede ser informativo.
    Si hay analitica, marketing o terceros no esenciales, debe pedir consentimiento antes de cargar esas cookies.
    No activar analytics sin consentimiento si aplica.

Regla:

    No abrir trafico real sin paginas legales y sin politica clara de cookies.

FASE 3 - AUDITORIA PRE-GITHUB

Objetivo:

    subir a GitHub solo un repositorio limpio.

Revisar antes de commit:

    raiz correcta GadgetSelection-clean
    docs saneado
    docs/system limpio
    docs/operations con documento 17 y 18
    no carpetas antiguas
    no copias externas
    no zips
    no capturas temporales
    no txt de trabajo sueltos
    no archivos de escritorio
    no secretos
    no .env real
    no backups internos
    no storage como taller
    no vendor si no procede
    no node_modules si existiera
    no cache innecesaria

Revisar .gitignore:

    .env
    *.log
    node_modules/
    vendor/ si se decide no versionar dependencias
    storage/backups/
    storage/tmp/
    storage/imports/
    *.zip
    *.rar
    *.7z
    Thumbs.db
    .DS_Store

Validar antes de commit:

    localhost carga
    Home carga
    mundos cargan
    needs comerciales cargan
    cards cargan
    imagenes cargan
    enlaces Amazon existen
    JSON valido
    sin BOM
    sin mojibake

FASE 4 - GITHUB

Objetivo:

    crear repositorio limpio y trazable.

Pasos:

    1. Crear repositorio en GitHub.
    2. Inicializar Git en GadgetSelection-clean si no existe.
    3. Revisar .gitignore.
    4. Primer commit limpio.
    5. Push a GitHub.
    6. Revisar en GitHub que no se ha subido basura.
    7. Revisar que no se han subido secretos.

Politica de commits:

    commits pequenos
    mensajes claros
    no mezclar legal con gadgets
    no mezclar CSS con datos
    no mezclar produccion con experimentos

Ejemplos de commits:

    docs: add production deployment plan
    data: complete energia autonomia gadgets
    legal: add privacy cookies and affiliate pages
    deploy: add railway config
    chore: prepare github repository

FASE 5 - RAILWAY TEMPORAL

Objetivo:

    desplegar desde GitHub a Railway sin dominio propio al principio.

Pasos:

    1. Crear proyecto Railway.
    2. Conectar repositorio GitHub.
    3. Seleccionar rama principal.
    4. Configurar build si hace falta.
    5. Configurar start command si hace falta.
    6. Ver dominio temporal Railway.
    7. Validar rutas principales.
    8. Revisar logs.
    9. Corregir solo errores reales.

Punto tecnico:

    La app usa PHP con index.php y router.php.
    Railway debe ejecutar la app PHP correctamente.
    Si Railway no detecta bien el proyecto, habra que definir configuracion o start command.

Validaciones en Railway temporal:

    /
    /dolor-ergonomia
    /outdoor-supervivencia
    /viaje-tecnologia
    /entrenamiento-recuperacion
    /energia-autonomia

Validar paginas de need:

    /dolor-ergonomia/dolor-cervical
    /outdoor-supervivencia/filtros-agua
    /viaje-tecnologia/productividad-movil
    /entrenamiento-recuperacion/frio-calor-recuperacion

Validar:

    imagenes
    CSS
    botones Amazon
    rutas
    404
    mobile
    cookies
    paginas legales

No conectar dominio hasta que Railway temporal este verde.

FASE 6 - NAMECHEAP Y DOMINIO

Objetivo:

    conectar dominio propio al proyecto desplegado en Railway.

Proveedor dominio:

    Namecheap

Hosting:

    Railway

Pasos generales:

    1. Anadir dominio personalizado en Railway.
    2. Copiar registros DNS indicados por Railway.
    3. Entrar en Namecheap.
    4. Ir a Domain List.
    5. Manage.
    6. Advanced DNS.
    7. Host Records.
    8. Crear registros CNAME/TXT segun Railway.
    9. Esperar propagacion DNS.
    10. Validar dominio.
    11. Validar SSL.
    12. Revisar www y raiz.

Estrategia recomendada:

    usar www como dominio principal si facilita DNS
    redirigir raiz a www si procede

Ejemplo:

    www.dominio.com -> Railway
    dominio.com -> redireccion o configuracion equivalente

No improvisar registros DNS.
Copiar exactamente lo que Railway indique.

FASE 7 - VALIDACION FINAL PRODUCCION

Validar en dominio temporal Railway:

    Home
    mundos
    needs
    cards
    imagenes
    enlaces Amazon
    paginas legales
    banner cookies
    mobile
    errores 404
    velocidad aceptable

Validar en dominio propio:

    /
    /dolor-ergonomia
    /outdoor-supervivencia
    /viaje-tecnologia
    /entrenamiento-recuperacion
    /energia-autonomia
    paginas legales
    cookies
    enlaces Amazon
    SSL
    www
    raiz

Validar tecnica:

    sin BOM
    sin mojibake
    sin imagenes rotas
    sin JSON invalidos
    sin rutas antiguas
    sin sistema antiguo en docs
    sin storage como taller
    sin backups internos
    sin secretos

FASE 8 - SEO TECNICO MINIMO

Pendientes antes o justo despues de produccion:

    robots.txt
    sitemap.xml
    title dinamico
    meta description dinamica
    canonical
    Open Graph
    breadcrumbs
    schema basico
    favicon correcto

No bloquear produccion por SEO avanzado.
Si bloquear si hay:

    noindex accidental
    robots mal configurado
    dominio sin SSL
    enlaces rotos
    paginas legales ausentes

CHECKLIST DE BLOQUEO

No desplegar si ocurre cualquiera de estos puntos:

    energia-autonomia sigue sin decision
    docs tiene sistema antiguo
    falta aviso legal
    falta privacidad
    falta cookies
    falta disclosure afiliado
    falta banner si hay cookies no tecnicas
    hay .env con secretos
    hay backups internos
    hay imagenes rotas
    hay JSON invalidos
    hay mojibake
    hay BOM
    hay rutas principales rotas
    Railway temporal no esta verde
    dominio no tiene SSL

ERRORES PROHIBIDOS

    subir carpeta antigua
    subir capturas
    subir zips
    subir backups
    subir .env real
    usar storage como taller
    tocar PHP por problema de datos
    tocar CSS por problema de imagen
    desplegar sin legal
    conectar dominio antes de validar Railway temporal
    usar GitHub como basurero
    abrir trafico con medio catalogo roto

ORDEN FINAL DE EJECUCION

    1. Crear este documento 18.
    2. Cerrar energia-autonomia.
    3. Crear legal.
    4. Crear banner cookies.
    5. Auditoria pre-GitHub.
    6. Subir a GitHub.
    7. Conectar Railway.
    8. Validar Railway temporal.
    9. Conectar Namecheap.
    10. Validar dominio y SSL.
    11. Abrir produccion controlada.

FRASE DE CONTINUIDAD

Continuamos GadgetSelection con docs limpio y sistema antiguo eliminado. El documento 17 es el estado operativo vivo del proyecto. El documento 18 define el plan de produccion con GitHub, Railway y Namecheap. Antes de desplegar hay que cerrar energia-autonomia, crear paginas legales, implementar cookies si corresponde, auditar el repositorio, subir a GitHub, validar Railway temporal y solo despues conectar el dominio de Namecheap.

============================================================
ADENDA 2026-05-14 — EJECUCION PARCIAL DEL PLAN DE PRODUCCION
============================================================

OBJETIVO DE ESTA ADENDA

Registrar el avance real del plan de produccion definido en este documento.

El plan ya no esta solo en fase teorica. Varias fases han sido ejecutadas y validadas.

============================================================
FASES EJECUTADAS
============================================================

1. Cierre de catalogo

Estado:

    completado

Resultado:

    5 mundos comerciales completos
    231 gadgets reales
    231 JSON individuales
    231 imagenes comerciales
    231 enlaces Amazon

2. Legal base

Estado:

    completado

Rutas creadas:

    /aviso-legal
    /politica-privacidad
    /politica-cookies
    /afiliacion-amazon

Estado visual:

    paginas legales compactas
    fondo verde/grafito continuo
    cards limpias
    CTA final integrado
    footer legal actualizado

3. GitHub

Estado:

    completado

Repositorio:

    cikitraque13/GadgetSelection

Commit inicial:

    Initial production-ready GadgetSelection build

4. Railway

Estado:

    completado

Configuracion:

    composer.json
    railway.json

Start command:

    php -S 0.0.0.0:$PORT router.php

Resultado:

    deploy online
    URL temporal validada
    servicio funcionando

5. Namecheap + dominio

Estado:

    completado parcialmente

Dominio principal conectado:

    gadgetselection.com

DNS:

    CNAME @ -> tm7ksycm.up.railway.app
    TXT _railway-verify -> railway-verify=...

Estado:

    dominio principal validado
    web funcionando en https://gadgetselection.com

www.gadgetselection.com:

    pendiente / pospuesto

Motivo:

    limite del plan actual de Railway para dominios personalizados

============================================================
OPTIMIZACION PREVIA A PRODUCCION
============================================================

Se realizo optimizacion global de imagenes a WebP antes de hacer push final de mejoras.

Resultado:

    carousel -> 5 WebP / 0 PNG
    needs -> 43 WebP / 0 PNG
    gadgets -> 231 WebP / 0 PNG

Peso principal antes:

    203,96 MB aprox

Peso principal despues:

    21,84 MB aprox

Reduccion:

    mas de 180 MB

Validacion:

    JSON revisados -> 274
    todos apuntan a WebP
    PHP clave OK
    sin BOM
    sin mojibake
    auditoria final WebP sin errores

============================================================
FASES PENDIENTES
============================================================

Quedan pendientes:

    1. Commit y push de la optimizacion WebP.
    2. Validacion Railway tras deploy actualizado.
    3. Implementar banner de cookies.
    4. Integrar Google Analytics solo tras consentimiento.
    5. Obtener GA4 Measurement ID.
    6. Definir eventos con Director de metricas.
    7. Auditoria final pre-apertura.
    8. Apertura controlada.

============================================================
DECISION DE FASE
============================================================

El siguiente trabajo ya no es construir catalogo ni preparar despliegue basico.

El siguiente trabajo es:

    medicion
    consentimiento
    validacion final
    performance
    apertura controlada

No se debe abrir un nuevo ciclo de gadgets salvo correccion puntual.