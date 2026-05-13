PROYECTO: GadgetSelection
DOCUMENTO: ESTADO ACTUAL GADGETSELECTION
VERSION: v1.4
ESTADO: activo
FECHA ORIGINAL: 2026-05-08
ULTIMA ACTUALIZACION: 2026-05-13
AUTORIDAD: operativa subordinada a docs/system

============================================================
OBJETIVO
============================================================

Registrar el estado real y vivo del proyecto GadgetSelection tras:

- limpieza y migracion a GadgetSelection-clean
- reconstruccion visual por mundos
- implementacion comercial completa de los cinco mundos activos
- saneamiento documental
- eliminacion del sistema antiguo de asistentes
- creacion del plan de produccion
- alineacion de paginas editoriales de confianza
- redisenyo completo del mundo energia-autonomia
- cierre comercial de energia-autonomia con 45 gadgets reales
- validacion final sin BOM, sin mojibake y sin descuadres
- correccion del 404 del header en la ruta antigua /energia-autonomia/powerbanks

Este documento no sustituye docs/system.
Este documento no modifica doctrina.
Este documento registra el estado operativo vivo para evitar perdida de contexto, duplicidad de carpetas, errores de fase, contaminacion por legacy y reintroduccion de flujos obsoletos.

GadgetSelection ya no esta en fase principal de carga de catalogo.
GadgetSelection entra en fase de preparacion de produccion, legal, auditoria y despliegue.

============================================================
CARPETA ACTIVA
============================================================

La carpeta activa del proyecto es:

    C:\Users\lucas\Desktop\PROYECTOS\GadgetSelection-clean

Regla absoluta:

    Solo se trabaja sobre GadgetSelection-clean.
    No tocar carpetas antiguas.
    No tocar copias externas.
    No usar storage como taller de importacion.
    No crear backups dentro del proyecto.
    No tocar motor, PHP o CSS si el problema es de datos, imagenes, naming o catalogo.
    No tocar varias capas a la vez.
    No hacer cambios a ciegas.
    Antes de modificar un archivo, se audita y se lee.

La raiz operativa esperada es:

    app
    assets-source
    config
    data
    docs
    public
    scripts
    storage
    templates
    .gitignore
    index.php
    router.php
    start-server.ps1
    stop-server.ps1

============================================================
ARQUITECTURA ACTUAL
============================================================

La navegacion visible se organiza asi:

    Home
    -> Mundo
    -> Need / indice visual
    -> Lista de gadgets
    -> Ficha de gadget

Equivalencias operativas:

    world = mundo principal
    need = necesidad / entrada del indice
    gadget = producto o solucion concreta
    ranking = orden de recomendacion

El sistema actual no se organiza como ecommerce generico por categorias sueltas.

Se organiza por:

    problemas reales
    situaciones de uso
    necesidades concretas
    decisiones comerciales claras

Objetivo comercial activo:

    problema -> gadgets -> decision -> Amazon

============================================================
MUNDOS ACTIVOS Y ESTADO GLOBAL
============================================================

Mundos activos:

    1. dolor-ergonomia
    2. outdoor-supervivencia
    3. viaje-tecnologia
    4. entrenamiento-recuperacion
    5. energia-autonomia

Mundos visuales cerrados:

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion
    energia-autonomia

Mundos comerciales completos:

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion
    energia-autonomia

Mundos comerciales pendientes:

    ninguno

Totales comerciales finales actuales:

    dolor-ergonomia -> 40 gadgets reales
    outdoor-supervivencia -> 52 gadgets reales
    viaje-tecnologia -> 48 gadgets reales
    entrenamiento-recuperacion -> 46 gadgets reales
    energia-autonomia -> 45 gadgets reales

Total global actualizado:

    231 gadgets reales
    231 JSON individuales
    231 imagenes organizadas
    231 enlaces Amazon
    231 cards comerciales funcionando

============================================================
REGLA DE IMAGENES
============================================================

Imagenes de heroes e indices de mundos:

    public/assets/images/needs/{world}/hero.png
    public/assets/images/needs/{world}/{need}.png

La carpeta public/assets/images/needs/ es la autoridad visual actual para:

    heroes de mundo
    tarjetas de indices

Imagenes de gadgets:

    public/assets/images/gadgets/{world}/{need}/{gadget-id}.png

Ejemplo:

    public/assets/images/gadgets/entrenamiento-recuperacion/pistolas-masaje/bob-and-brad-c2-pistola-masaje-percusion.png

Regla:

    La ruta image dentro de cada JSON de gadget siempre empieza por:
    /public/assets/images/gadgets/...

No usar:

    /assets/images/...

Carpetas visuales legacy o de soporte:

    public/assets/images/carousel
    public/assets/images/landing
    public/assets/images/worlds

Uso actual:

    carousel -> Home
    needs -> indices y heroes de mundos
    gadgets -> productos comerciales

============================================================
REGLA DE DATOS DE GADGETS
============================================================

Estructura canonica de JSON de gadgets:

    data/gadgets/{world}/{need}/{gadget-id}.json

Cada gadget vive en un JSON individual.

No se usa JSON gigante por necesidad.

Ventajas:

    un producto = un archivo
    menos riesgo al editar
    mas facil de validar
    mas facil de escalar
    mas facil de reutilizar en futuras fichas individuales

Patron canonico de JSON de gadget:

    id
    title
    brand
    world_id
    need_ids
    category
    ranking
    ranking_label
    summary
    best_for
    not_for
    score
    price
    pros
    cons
    image
    affiliate_url
    affiliate_rel
    status

Reglas:

    usar world_id, no world
    usar need_ids, no need
    status debe ser published para aparecer
    affiliate_rel debe ser sponsored nofollow noopener
    image debe apuntar a /public/assets/images/gadgets/{world}/{need}/{image}.png
    price debe estar en formato texto, por ejemplo 39,99 EUR
    affiliate_url debe existir
    price debe existir
    imagen debe existir fisicamente
    no escribir JSON con BOM
    no dejar mojibake

============================================================
RENDER COMERCIAL ACTUAL
============================================================

El render comercial esta conectado asi:

    URL /{world}/{need}
    -> NeedController
    -> GadgetRepository
    -> data/gadgets/{world}/{need}/*.json
    -> templates/pages/need.php
    -> cards comerciales

Archivos clave:

    app/catalog/GadgetRepository.php
    app/controllers/NeedController.php
    templates/pages/need.php
    public/assets/css/world-need.css

El repositorio solo lee, filtra y ordena.

Criterios de carga:

    world_id debe coincidir con el mundo
    need_ids debe contener la necesidad
    status debe ser published
    orden por ranking

No usar motores antiguos para estas paginas.

El JSON manda.

============================================================
DISENO DE CARDS COMERCIALES
============================================================

Comportamiento visual:

    desktop grande -> 4 columnas
    desktop medio -> 3 columnas
    tablet -> 2 columnas
    movil -> 1 columna

La card muestra:

    imagen
    ranking
    ranking label
    nombre
    precio
    score
    summary
    mejor para
    boton Ver en Amazon

No muestra:

    pros largos
    cons largos
    ficha tecnica completa
    bloques editoriales
    mapa de soluciones
    ranking intro gigante

Boton:

    mint / verde GadgetSelection

Decision:

    mantener boton mint como identidad visual
    no convertirlo en naranja Amazon
    diferenciarse de Amazon

============================================================
REGLA DE TEXTO Y CODIFICACION
============================================================

A partir de esta fase:

    preferir texto ASCII-safe en scripts PowerShell
    todo archivo generado debe quedar sin BOM
    todo mundo cerrado debe pasar:
        check JSON
        check imagenes
        check affiliate_url
        check price
        check mojibake
        check BOM
        prueba localhost

PowerShell debe escribir UTF-8 sin BOM:

    $Utf8NoBom = New-Object System.Text.UTF8Encoding($false)
    [System.IO.File]::WriteAllText($Path, $Content, $Utf8NoBom)

No ejecutar comandos por trozos si el bloque tiene estructuras complejas.

Si PowerShell entra en prompt:

    >>

salir con:

    Ctrl + C

No continuar despues de un throw como si nada.

============================================================
REGLA DE SERVIDOR LOCAL
============================================================

Servidor local:

    start-server.ps1

Parada de servidor:

    stop-server.ps1

No se deben mezclar comandos de servidor con comandos de edicion en la misma terminal.

============================================================
METODOLOGIA VALIDADA DE TRABAJO
============================================================

Flujo de trabajo validado:

    1. Auditar indice real del mundo.
    2. Crear o verificar carpetas de imagenes y JSON por necesidad.
    3. Elegir primera tarjeta del indice visual.
    4. Analizar Amazon y seleccionar productos por funcion.
    5. Usuario descarga/guarda imagenes en la carpeta correspondiente.
    6. Usuario pasa TXT/documento con enlace, titulo y precio de cada gadget.
    7. Se define naming final.
    8. Se auditan imagenes contra productos reales.
    9. Se renombran imagenes si hace falta.
    10. Se crea JSON individual por gadget.
    11. Se valida JSON, imagenes, affiliate_url, price, mojibake y BOM.
    12. Se revisa localhost.
    13. Si hay error, se corrige solo la pieza minima.
    14. Se pasa a la siguiente tarjeta.

Reglas:

    no tocar PHP si el problema es de datos
    no tocar CSS si el problema es de imagenes
    no tocar JSON si el problema es visual
    no tocar plantilla si el problema es CSS
    no tocar header si el problema esta en una pagina editorial
    no crear backups dentro del proyecto
    no usar storage como taller de importacion
    no mezclar necesidades
    no mezclar mundos
    no meter productos solo por llegar a 8
    si una tarjeta queda mejor con 5 o 6 gadgets, se queda en 5 o 6
    si hay imagenes cruzadas, se corrige la imagen fisica o el JSON minimo afectado
    el TXT real manda sobre propuestas previas
    la imagen debe coincidir con el producto real del TXT

Regla principal:

    La necesidad define el producto.
    El producto no redefine la necesidad.

============================================================
FLUJO OBSOLETO ELIMINADO
============================================================

Queda eliminado como flujo operativo:

    storage/imports/gadgets/
    gadgets.csv
    scripts/import_gadgets_from_csv.php
    --dry-run
    --import

Motivo:

    El flujo actual validado trabaja directamente con:
        public/assets/images/gadgets/{world}/{need}/
        data/gadgets/{world}/{need}/{gadget-id}.json

No usar storage como taller de importacion.
No reintroducir CSV como metodo principal mientras el sistema actual siga funcionando.

============================================================
ESTADO POR MUNDO
============================================================

------------------------------------------------------------
1. dolor-ergonomia
------------------------------------------------------------

Estado:

    mundo comercial completo
    validado en localhost
    cards comerciales funcionando
    40 gadgets reales
    40 JSON individuales
    40 imagenes organizadas
    40 enlaces Amazon

Needs:

    dolor-cervical -> 8 gadgets
    dolor-lumbar -> 7 gadgets
    muneca-antebrazo -> 6 gadgets
    piernas-circulacion -> 7 gadgets
    postura-escritorio -> 6 gadgets
    recuperacion-muscular -> 6 gadgets

Total:

    40 gadgets

Notas estrategicas:

    Recuperacion-muscular se reenfoco como recuperacion pasiva en casa, salon, sillones, asientos y descanso, para no invadir entrenamiento-recuperacion.

------------------------------------------------------------
2. outdoor-supervivencia
------------------------------------------------------------

Estado:

    mundo comercial completo
    validado en localhost
    cards comerciales funcionando
    52 gadgets reales
    52 JSON individuales
    52 imagenes organizadas
    52 enlaces Amazon

Needs:

    cargadores-solares -> 7 gadgets
    filtros-agua -> 7 gadgets
    kits-emergencia -> 6 gadgets
    linternas-recargables -> 8 gadgets
    navegacion-comunicacion -> 6 gadgets
    powerbanks-resistentes -> 6 gadgets
    proteccion-clima -> 7 gadgets
    radios-emergencia -> 5 gadgets

Total:

    52 gadgets

Separacion estrategica:

    Outdoor no es energia-autonomia.
    Outdoor = mochila, ruta, lluvia, camping ligero, emergencia exterior, radios, linternas, filtros, powerbanks resistentes de mochila.
    Energia-autonomia = camper, caravana, roulot, vanlife, camping base, electricidad 12V/230V, agua, frio, cocina, averias, solar, carga exterior, habitabilidad y seguridad.

------------------------------------------------------------
3. viaje-tecnologia
------------------------------------------------------------

Estado:

    mundo comercial completo
    validado en localhost
    cards comerciales funcionando
    48 gadgets reales
    48 JSON individuales
    48 imagenes organizadas
    48 enlaces Amazon

Needs:

    adaptadores-viaje -> 5 gadgets
    auriculares-viaje -> 7 gadgets
    energia-viaje -> 6 gadgets
    localizadores-bluetooth -> 7 gadgets
    mochilas-tecnologicas -> 6 gadgets
    organizadores-cables -> 6 gadgets
    productividad-movil -> 6 gadgets
    seguridad-equipaje -> 5 gadgets

Total:

    48 gadgets

Separaciones importantes:

    adaptadores-viaje != energia-viaje
    localizadores-bluetooth != seguridad-equipaje
    mochilas-tecnologicas != organizadores-cables
    productividad-movil != energia-viaje
    energia-viaje != powerbanks outdoor ni energia-autonomia

Viaje y tecnologia se orienta a:

    aeropuertos
    hoteles
    trenes
    aviones
    movilidad urbana
    viajes de trabajo
    equipaje de mano
    carga compacta
    organizacion tecnologica
    productividad fuera de casa

------------------------------------------------------------
4. entrenamiento-recuperacion
------------------------------------------------------------

Estado:

    mundo comercial completo
    validado en localhost
    indice visual alineado
    hero visual actualizado
    cards comerciales funcionando
    46 gadgets reales
    46 JSON individuales
    46 imagenes organizadas
    46 enlaces Amazon
    sin BOM
    sin mojibake en validaciones finales

Indice final:

    1. pistolas-masaje
    2. frio-calor-recuperacion
    3. bandas-elasticas
    4. entrenamiento-casa
    5. electroestimuladores
    6. compresion-muscular
    7. movilidad-estiramientos
    8. hidratacion-medicion

Tarjetas eliminadas del indice:

    soporte-articular
    rodillos-foam

Motivo de eliminar soporte-articular:

    solapamiento con dolor-ergonomia
    riesgo de convertir la tarjeta en ortopedia ligera
    menor potencia comercial que entrenamiento-casa

Motivo de crear entrenamiento-casa:

    faltaba entrenamiento domestico real:
        cinta
        walking pad
        bici estatica
        eliptica
        remo
        fuerza compacta

Motivo de eliminar rodillos-foam:

    solapamiento con movilidad-estiramientos y pistolas-masaje
    bajo diferencial comercial
    mercado muy comoditizado

Motivo de crear frio-calor-recuperacion:

    faltaba recuperacion termica:
        frio
        calor
        inmersion
        sauna domestica
        compresas reutilizables
        recuperacion post-esfuerzo

Necesidades finales y totales:

    bandas-elasticas -> 5 gadgets
    compresion-muscular -> 5 gadgets
    electroestimuladores -> 6 gadgets
    entrenamiento-casa -> 6 gadgets
    hidratacion-medicion -> 6 gadgets
    movilidad-estiramientos -> 6 gadgets
    pistolas-masaje -> 6 gadgets
    frio-calor-recuperacion -> 6 gadgets

Total:

    46 gadgets

Resultado conceptual:

    El mundo ya no es solo recuperacion.
    Ahora cubre entrenamiento + medicion + movilidad + recuperacion activa + recuperacion pasiva + recuperacion termica.

------------------------------------------------------------
5. energia-autonomia
------------------------------------------------------------

Estado:

    mundo comercial completo
    validado en localhost
    hero nuevo validado
    indice visual nuevo validado
    8 tarjetas activas
    45 gadgets reales
    45 JSON individuales
    45 imagenes comerciales
    45 enlaces Amazon
    45 cards comerciales funcionando
    sin BOM
    sin mojibake
    sin descuadres JSON/PNG

Nuevo enfoque:

    energia-autonomia = vida autonoma en camper, caravana, roulot y camping base

El enfoque anterior basado en cables USB-C, cargadores GaN, carga inalambrica, energia de escritorio, powerbanks, regletas de viaje, SAI y WC quimico fue descartado por solaparse o por no tener suficiente fuerza comercial.

Indice final de energia-autonomia:

    1. averias-pinchazos-bateria -> 6 gadgets
    2. estaciones-energia -> 5 gadgets
    3. electricidad-12v-230v -> 6 gadgets
    4. carga-exterior-camper -> 5 gadgets
    5. agua-ducha-depositos -> 6 gadgets
    6. frio-cocina-12v -> 6 gadgets
    7. solar-camper -> 5 gadgets
    8. habitabilidad-seguridad-camper -> 6 gadgets

Total:

    45 gadgets

Imagenes actuales del indice:

    hero.png
    averias-pinchazos-bateria.png
    estaciones-energia.png
    electricidad-12v-230v.png
    carga-exterior-camper.png
    agua-ducha-depositos.png
    frio-cocina-12v.png
    solar-camper.png
    habitabilidad-seguridad-camper.png

Needs activas:

    data/needs/energia-autonomia/averias-pinchazos-bateria.json
    data/needs/energia-autonomia/estaciones-energia.json
    data/needs/energia-autonomia/electricidad-12v-230v.json
    data/needs/energia-autonomia/carga-exterior-camper.json
    data/needs/energia-autonomia/agua-ducha-depositos.json
    data/needs/energia-autonomia/frio-cocina-12v.json
    data/needs/energia-autonomia/solar-camper.json
    data/needs/energia-autonomia/habitabilidad-seguridad-camper.json

Tarjetas antiguas eliminadas del indice:

    cables-usb-c
    cargadores-gan
    carga-inalambrica
    energia-escritorio
    powerbanks
    regletas-viaje
    sai-ups
    wc-quimico-aguas-negras

Separacion estrategica:

    Outdoor-supervivencia = mochila, ruta, lluvia, camping ligero, emergencia exterior.
    Viaje-tecnologia = aeropuerto, hotel, maleta, movilidad urbana, carga compacta.
    Energia-autonomia = camper, caravana, roulot, vanlife, camping base, electricidad 12V/230V, agua, frio, cocina, averias, solar, carga exterior, habitabilidad y seguridad.

Validacion final:

    45 JSON de gadgets
    45 imagenes comerciales
    8 need JSON
    8 tarjetas activas
    world JSON correcto
    PHP basico sin errores
    validacion final completa sin errores

============================================================
ESTADO CSS
============================================================

Archivos revisados:

    public/assets/css/world-need.css
    public/assets/landing.css
    public/assets/landing-variants.css
    public/assets/editorial.css

Decision:

    landing.css se mantiene como base
    landing-variants.css se mantiene como capa de variantes
    world-need.css contiene overrides del sistema nuevo
    editorial.css queda como capa especifica para paginas editoriales de confianza
    no tocar CSS base si el problema pertenece a una capa de override

Regla final sobre editorial.css:

    no seguir metiendo overrides indefinidos
    si editorial.css se descontrola, se audita y se consolida
    no tocar data/editorial si el problema es visual
    no tocar templates si el problema es CSS
    no tocar header

============================================================
HEADER, HOME Y BRANDING
============================================================

Header global:

    header oscuro premium
    fondo verde petroleo / grafito
    acentos mint y oro
    logo premium flotante
    navegacion limpia
    hamburguesa integrada
    mejor contraste sobre fondos oscuros

Navegacion conceptual:

    Mundos
    Soluciones
    Rankings
    Gadgets
    Hamburguesa

Branding:

    diamante
    brujula
    verde
    oro
    lema: Analizamos - comparamos - solucionamos

Logo:

    public/assets/logo_gadgetselection_premium.png

Home:

    aprobada
    carrusel congelado
    authority y CTA aprobados
    no tocar templates/blocks/home/carousel.php salvo bug real

Correccion reciente:

    Se corrigio el enlace antiguo del header y de authority que apuntaba a:
        /energia-autonomia/powerbanks

    Nueva ruta correcta:
        /energia-autonomia/estaciones-energia

    Texto orientativo:
        Necesito autonomia camper
        Estaciones de energia

============================================================
DOCUMENTACION Y AUTORIDAD
============================================================

La carpeta docs fue saneada.

Resultado final:

    docs limpio
    sin sistema antiguo de asistentes
    sin BOM
    sin mojibake
    sin markdown escapado

Autoridad documental actual:

    docs/system
    -> doctrina viva del sistema actual

    docs/operations
    -> estado operativo vivo
    -> documento 17 como referencia principal
    -> documento 18 como plan de produccion

docs/system queda con cinco documentos vivos:

    02-ARQUITECTURA-DE-RUTAS.md
    03-DICCIONARIO-CANONICO.md
    08-ESTRUCTURA-ACTUAL.md
    11-REGLA-DE-DECISION-COMERCIAL-Y-CLARIDAD.md
    15-ESTANDAR-DE-TRABAJO-OPERATIVO.md

Estos documentos fueron reescritos para el sistema actual y ya no contienen reglas del sistema antiguo.

docs/operations conserva el documento 17 como estado operativo vivo.
docs/operations conserva el documento 18 como plan de produccion.

============================================================
DOCUMENTO 18 — PLAN DE PRODUCCION
============================================================

Se creo el documento:

    docs/operations/18-PLAN-DE-PRODUCCION-GITHUB-RAILWAY-NAMECHEAP.md

Objetivo del documento 18:

Preparar la salida a produccion de GadgetSelection desde localhost hacia:

    GitHub
    Railway
    Namecheap
    paginas legales
    cookies
    disclosure afiliado
    validacion tecnica
    apertura controlada

El documento 18 no ejecuta produccion.
Define el camino.

Orden de produccion definido:

    1. Crear paginas legales:
        aviso legal
        politica de privacidad
        politica de cookies
        disclosure afiliado Amazon
    2. Implementar banner cookies si corresponde.
    3. Auditoria pre-GitHub.
    4. GitHub.
    5. Railway temporal.
    6. Namecheap + DNS + SSL.
    7. Validacion final.
    8. Apertura controlada.

============================================================
SISTEMA ANTIGUO ELIMINADO
============================================================

Se eliminaron de la autoridad viva restos del sistema antiguo:

    arquitecto
    cerebro
    asistente D
    coordinador del nucleo
    auditor maestro
    ecosistema de asistentes
    gobernanza de prompts
    contrato de uso del ecosistema
    Gadget Engine
    scenario
    subcontext
    storage/_legacy
    docs/prompts
    docs/rules
    docs/architecture/gadget_engine
    docs/workflows/gadget-engine-flow.md

Regla actual:

    Si no sirve al sistema actual de GadgetSelection-clean, se elimina.

No se conserva un museo del sistema antiguo.
No se crean carpetas nuevas de archivo antiguo.
No se deja doctrina vieja como autoridad secundaria.

============================================================
ESTADO DATA Y LEGACY
============================================================

Carpetas activas actuales:

    data/worlds
    data/needs
    data/gadgets
    data/editorial

data/editorial se conserva porque alimenta paginas de confianza:

    /metodo-riguroso
    /fallos-reales
    /claves-tecnicas

data/subcontexts:

    eliminado manualmente
    ya no pertenece al sistema actual

Carpetas legacy restantes detectadas:

    data/_archive
    data/rankings
    data/scenarios
    data/test

Estado:

    data/gadgets -> conservar
    data/needs -> conservar
    data/worlds -> conservar
    data/editorial -> conservar
    data/rankings -> candidata a borrar si sigue vacia y sin referencias vivas
    data/test -> candidata a borrar si sigue vacia y sin referencias vivas
    data/_archive -> revisar/borrar si no hay referencias vivas
    data/scenarios -> revisar tras router/controladores

Decision actual:

    La limpieza legacy restante queda como deuda tecnica pre-GitHub, no como bloqueo del catalogo.

============================================================
PAGINAS EDITORIALES DE CONFIANZA
============================================================

Se mantienen las tres paginas de confianza accesibles desde la hamburguesa:

    /metodo-riguroso
    /fallos-reales
    /claves-tecnicas

Funcion estrategica:

    Metodo riguroso -> confianza en el proceso
    Claves tecnicas -> confianza en el criterio tecnico
    Fallos reales -> confianza en lo que descartamos

No son:

    blog
    doctrina interna
    documento tecnico
    pagina legal
    libro
    PDF encubierto

Son piezas de confianza para que el usuario entienda que GadgetSelection no tira enlaces de Amazon al azar.

Estado final:

    contenido limpio
    sin placeholders
    sin legacy
    sin /mundos
    sin 404
    CTAs a Home
    boton final mint
    editorial.css cargado
    paginas aprobadas conceptualmente
    editorial.css pendiente solo de consolidacion si vuelve a descontrolarse visualmente

Regla final:

    No tocar data/editorial si el problema es visual.
    No tocar templates si el problema es CSS.
    No tocar header.
    No seguir acumulando overrides indefinidos.

============================================================
PROBLEMAS RESUELTOS
============================================================

Se resolvieron:

    sistema antiguo dentro de docs
    autoridad documental contaminada
    docs/system con reglas de asistentes antiguos
    docs/prompts legacy
    docs/rules legacy
    docs/architecture/gadget_engine
    docs/workflows/gadget-engine-flow.md
    docs/operations antiguos
    BOM en documentacion
    mojibake en documentacion
    markdown escapado en documentacion
    CTAs rotos a /mundos
    contenido placeholder en paginas editoriales
    editorial.css no cargado
    paginas editoriales con aspecto de Word
    boton final de metodo riguroso mal coloreado
    franja blanca entre header y paginas editoriales
    scroll interno mal planteado
    capsulas inferiores redundantes
    data/subcontexts eliminado
    indice antiguo de energia-autonomia eliminado
    hero antiguo de energia-autonomia sustituido
    tarjetas antiguas de energia-autonomia retiradas
    carga-exterior-camper sustituye a wc-quimico-aguas-negras
    8 tarjetas finales de energia-autonomia reinsertadas
    ruta /energia-autonomia validada visualmente
    enlace roto /energia-autonomia/powerbanks corregido

============================================================
FASE ACTUAL
============================================================

GadgetSelection deja de estar en fase de carga comercial principal.

Estado actual:

    5 mundos comerciales completos
    231 gadgets reales implementados
    231 JSON individuales
    231 imagenes organizadas
    231 enlaces Amazon
    231 cards comerciales funcionando

La maquina comercial esta completa a nivel de catalogo inicial.

El siguiente trabajo no es crear mas catalogo.
El siguiente trabajo es produccion, legal, validacion y despliegue.

============================================================
PRIORIDADES ACTUALES
============================================================

Orden recomendado desde este punto:

    1. Crear paginas legales:
        aviso legal
        politica de privacidad
        politica de cookies
        disclosure afiliado Amazon
    2. Implementar banner cookies si corresponde.
    3. Auditoria pre-GitHub:
        JSON global
        imagenes
        rutas 404
        PHP lint
        BOM
        mojibake
        carpetas legacy
        scripts antiguos
        archivos temporales
    4. GitHub.
    5. Railway temporal.
    6. Namecheap + DNS + SSL.
    7. Validacion final en produccion.
    8. Apertura controlada.

============================================================
REGLA DE FASE
============================================================

A partir de esta version:

    no seguir creando gadgets salvo correccion puntual
    no redisenar mundos
    no tocar motor, PHP o CSS sin auditoria
    no tocar varias capas a la vez
    no abrir carpetas antiguas
    no usar storage como taller
    no reintroducir CSV
    no reintroducir sistema antiguo
    no limpiar legacy tecnico si bloquea la salida comercial sin auditoria previa

El siguiente trabajo es de produccion, legal, validacion y despliegue.

============================================================
CONCLUSION
============================================================

GadgetSelection ha pasado de proyecto visual saneado a sistema comercial real de seleccion de gadgets.

Estado actual:

    5 mundos comerciales completos
    231 gadgets reales implementados
    231 JSON individuales
    231 imagenes organizadas
    231 enlaces Amazon
    231 cards comerciales funcionando

La maquina ya existe.
La metodologia esta validada.
El catalogo inicial esta completo.
El siguiente trabajo es preparar produccion de forma profesional.

Cambio estrategico clave:

    energia-autonomia dejo de ser un mundo de cargadores, cables y powerbanks.
    ahora es un mundo de vida autonoma para camper, caravana, roulot y camping base.
    la tarjeta wc-quimico-aguas-negras fue eliminada.
    carga-exterior-camper la sustituye como capa de carga exterior real.

Este cambio debe mantenerse.

============================================================
FRASE DE CONTINUIDAD
============================================================

Continuamos GadgetSelection desde el documento canonico 17 actualizado a v1.4. Los cinco mundos comerciales estan completos: dolor-ergonomia, outdoor-supervivencia, viaje-tecnologia, entrenamiento-recuperacion y energia-autonomia. El proyecto cuenta con 231 gadgets reales, 231 JSON individuales, 231 imagenes organizadas, 231 enlaces Amazon y 231 cards comerciales funcionando.

Energia-autonomia fue cerrada con 45 gadgets distribuidos en averias-pinchazos-bateria, estaciones-energia, electricidad-12v-230v, carga-exterior-camper, agua-ducha-depositos, frio-cocina-12v, solar-camper y habitabilidad-seguridad-camper. La validacion final confirma 45 JSON, 45 imagenes, sin BOM, sin mojibake, sin descuadres y PHP basico sin errores.

El enlace antiguo /energia-autonomia/powerbanks fue corregido en header/home authority y sustituido por /energia-autonomia/estaciones-energia.

El siguiente paso ya no es crear catalogo: es preparar produccion con paginas legales, cookies si corresponde, disclosure afiliado Amazon, auditoria pre-GitHub, GitHub, Railway temporal y Namecheap.

============================================================
ADENDA 2026-05-13 — AJUSTE DE DATOS LEGALES VISIBLES
============================================================

Se ajusto el aviso legal para no exponer publicamente DNI ni domicilio personal del responsable durante la fase previa a produccion.

Estado actual visible en aviso legal:

    Titular: Lucas Diaz Arias
    Email: lucasdiazarias85@gmail.com

Decision:

    No publicar DNI ni domicilio personal en la web mientras el proyecto sigue en fase pre-produccion.
    Antes de la apertura publica definitiva se revisara el cumplimiento legal aplicable, especialmente en relacion con LSSI, afiliacion y actividad economica.
    Se recomienda sustituir el email personal por un email profesional del dominio cuando quede configurado en Namecheap.

El resto de paginas legales se mantiene:
    politica de privacidad
    politica de cookies
    afiliacion Amazon