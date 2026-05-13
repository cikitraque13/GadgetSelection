PROYECTO: GadgetSelection
DOCUMENTO: DICCIONARIO CANONICO
VERSION: v3.0
ESTADO: vigente
ULTIMA_ACTUALIZACION: 2026-05-11
AUTORIDAD: estructural subordinada a docs/operations/17

OBJETIVO

Fijar el vocabulario operativo actual de GadgetSelection.

Este documento evita que vuelvan terminos antiguos o ambiguos.

VOCABULARIO ACTUAL

world

    Mundo principal del sistema.

need

    Necesidad concreta dentro de un mundo.
    Tambien corresponde a una tarjeta del indice visual.

gadget

    Producto, solucion o dispositivo concreto.

ranking

    Orden comercial de recomendacion dentro de una necesidad.

card

    Representacion visual compacta de un gadget o de una necesidad.

hero

    Imagen o bloque principal del mundo o de la pagina.

affiliate_url

    Enlace comercial de salida, normalmente Amazon.

affiliate_rel

    Relacion del enlace comercial.
    Valor canonico actual:

        sponsored nofollow noopener

MUNDOS CANONICOS

    dolor-ergonomia
    outdoor-supervivencia
    viaje-tecnologia
    entrenamiento-recuperacion
    energia-autonomia

NEEDS CANONICAS COMPLETADAS

dolor-ergonomia:

    dolor-cervical
    dolor-lumbar
    muneca-antebrazo
    piernas-circulacion
    postura-escritorio
    recuperacion-muscular

outdoor-supervivencia:

    cargadores-solares
    filtros-agua
    kits-emergencia
    linternas-recargables
    navegacion-comunicacion
    powerbanks-resistentes
    proteccion-clima
    radios-emergencia

viaje-tecnologia:

    adaptadores-viaje
    auriculares-viaje
    energia-viaje
    localizadores-bluetooth
    mochilas-tecnologicas
    organizadores-cables
    productividad-movil
    seguridad-equipaje

entrenamiento-recuperacion:

    pistolas-masaje
    frio-calor-recuperacion
    bandas-elasticas
    entrenamiento-casa
    electroestimuladores
    compresion-muscular
    movilidad-estiramientos
    hidratacion-medicion

energia-autonomia:

    cables-usb-c
    cargadores-gan
    carga-inalambrica
    energia-escritorio
    estaciones-energia
    powerbanks
    regletas-viaje
    sai-ups

TERMINOS OPERATIVOS

El sistema actual usa exclusivamente:

    world
    need
    gadget
    ranking

No se documentan equivalencias antiguas como autoridad viva.

REGLA DE NAMING

Los slugs deben ser:

    minusculas
    sin tildes
    con guiones
    estables
    legibles
    reutilizables en rutas, carpetas e imagenes

REGLA DE ARCHIVOS

Imagen de need:

    public/assets/images/needs/{world}/{need}.png

Imagen de gadget:

    public/assets/images/gadgets/{world}/{need}/{gadget-id}.png

JSON de gadget:

    data/gadgets/{world}/{need}/{gadget-id}.json

CIERRE

Un nombre canonico no se cambia por gusto.
Solo cambia si evita confusion real, mejora consistencia o corrige una frontera funcional.