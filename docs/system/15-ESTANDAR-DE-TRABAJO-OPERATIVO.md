PROYECTO: GadgetSelection
DOCUMENTO: ESTANDAR DE TRABAJO OPERATIVO
VERSION: v1.0
ESTADO: vigente
ULTIMA_ACTUALIZACION: 2026-05-11
AUTORIDAD: operativa subordinada a docs/operations/17

OBJETIVO

Fijar la forma correcta de trabajar en GadgetSelection-clean.

Este documento convierte la metodologia validada en regla operativa.

MANDATO

No se trabaja a ciegas.
No se abren varios frentes a la vez.
No se corrige una capa que no contiene el problema.
No se redisenia el motor cuando el problema es dato.
No se toca CSS cuando el problema es imagen.
No se toca JSON cuando el problema es visual.

SECUENCIA OPERATIVA POR NECESIDAD

    1. Auditar indice real.
    2. Confirmar necesidad.
    3. Hacer prospeccion Amazon por funcion.
    4. Seleccionar productos reales.
    5. Guardar imagenes en la carpeta canonica.
    6. Recibir TXT con enlace, titulo y precio.
    7. Definir naming final.
    8. Auditar imagenes contra productos reales.
    9. Renombrar imagenes si hace falta.
    10. Crear JSON individuales.
    11. Validar JSON.
    12. Validar imagenes.
    13. Validar affiliate_url.
    14. Validar price.
    15. Validar mojibake.
    16. Validar BOM.
    17. Revisar localhost.
    18. Corregir solo la pieza minima.
    19. Pasar a la siguiente necesidad.

REGLA DE VALIDACION

Una necesidad no se considera cerrada hasta que:

    JSON validos
    imagenes OK
    affiliate_url OK
    price OK
    sin mojibake
    sin BOM
    localhost verde

REGLA DE IMAGENES CRUZADAS

Si dos cards muestran imagen intercambiada y los JSON apuntan a los nombres correctos:

    se intercambian los nombres fisicos de las imagenes
    no se toca JSON

REGLA DE TXT REAL

El TXT del usuario manda sobre la prospeccion previa.

Si el producto real cambia:

    cambia naming
    cambia JSON
    cambia imagen esperada
    cambia ranking si hace falta

REGLA DE MUNDOS

No mezclar mundos.

Dolor y ergonomia:

    dolor, postura, ergonomia, recuperacion pasiva en casa

Outdoor y supervivencia:

    mochila, ruta, exterior, emergencia, lluvia, agua, luz

Viaje y tecnologia:

    aeropuertos, hoteles, trenes, aviones, movilidad tech

Entrenamiento y recuperacion:

    entrenamiento, medicion, movilidad, recuperacion activa, pasiva y termica

Energia y autonomia:

    camper, rulot, vanlife, estaciones electricas, SAI, autonomia prolongada

REGLA DE DOCUMENTACION

El documento 17 es estado operativo vivo.

docs/system contiene reglas generales actuales.
docs/system no debe contener sistema antiguo de asistentes.
docs/system no debe contener reglas de chats, roles antiguos, prompts o gobernanza de asistentes.

CIERRE

La maquina ya existe.
El trabajo es meter combustible bueno:

    producto bueno
    naming limpio
    JSON validado
    imagen correcta
    localhost verde