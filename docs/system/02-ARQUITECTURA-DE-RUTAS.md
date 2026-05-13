PROYECTO: GadgetSelection
DOCUMENTO: ARQUITECTURA DE RUTAS
VERSION: v4.0
ESTADO: vigente
ULTIMA_ACTUALIZACION: 2026-05-11
AUTORIDAD: estructural subordinada a docs/operations/17

OBJETIVO

Fijar las rutas activas y reservadas del sistema actual GadgetSelection.

Este documento no define el estado comercial.
El estado comercial vivo esta en docs/operations/17-ESTADO-ACTUAL-GADGETSELECTION-2026-05-08.md.

MANDATO

Una ruta solo puede considerarse activa si existe en el sistema real, carga en localhost y responde a una funcion actual.

No se crean rutas por deseo futuro.
No se enlazan rutas sin soporte real.
No se mantienen contratos antiguos si contradicen el sistema actual.

RUTAS ACTIVAS

Home:

    /

Mundo:

    /{world}

Need o necesidad:

    /{world}/{need}

Ejemplos:

    /dolor-ergonomia
    /dolor-ergonomia/dolor-cervical

    /outdoor-supervivencia
    /outdoor-supervivencia/filtros-agua

    /viaje-tecnologia
    /viaje-tecnologia/productividad-movil

    /entrenamiento-recuperacion
    /entrenamiento-recuperacion/frio-calor-recuperacion

    /energia-autonomia

RUTAS RESERVADAS

Ficha individual de gadget:

    /{world}/{need}/{gadget-id}

Esta ruta queda reservada para fichas futuras.
No se trata como ruta activa hasta que exista controlador, plantilla, datos y validacion localhost.

MUNDOS ACTIVOS

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion
    energia-autonomia

MUNDOS COMERCIALES COMPLETOS

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion

MUNDO COMERCIAL PENDIENTE

    energia-autonomia

REGLA DE COMPATIBILIDAD

La arquitectura actual usa solo:

    /{world}
    /{world}/{need}

No se documentan contratos antiguos como parte de la autoridad viva.

REGLA DE VALIDACION

Antes de considerar una ruta como activa:

    1. Debe existir dato real.
    2. Debe cargar en localhost.
    3. No debe depender de carpetas antiguas.
    4. No debe romper world, need, gadget o ranking.
    5. No debe contradecir el documento 17.

CIERRE

La ruta activa debe reducir confusion, no aumentarla.

Si una ruta no lleva al usuario de mundo a necesidad, de necesidad a gadgets y de gadgets a decision, no pertenece al flujo comercial actual.