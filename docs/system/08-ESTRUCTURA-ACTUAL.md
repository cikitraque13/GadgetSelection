PROYECTO: GadgetSelection
DOCUMENTO: ESTRUCTURA ACTUAL
VERSION: v3.0
ESTADO: vigente
ULTIMA_ACTUALIZACION: 2026-05-11
AUTORIDAD: estructural subordinada a docs/operations/17

OBJETIVO

Registrar la estructura operativa actual del proyecto sin replicar todo el arbol de archivos.

La autoridad operativa viva esta en el documento 17.
Este documento resume la estructura funcional que debe respetarse.

RAIZ ACTIVA

    C:\Users\lucas\Desktop\PROYECTOS\GadgetSelection-clean

Raiz esperada:

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

CARPETAS PRINCIPALES

app

    Contiene controladores, repositorios y logica de lectura.

data

    Contiene mundos, necesidades y gadgets.

public

    Contiene assets publicos, imagenes y CSS.

templates

    Contiene plantillas de render.

docs

    Contiene documentacion viva y operaciones.

storage

    No se usa como taller de importacion.
    No se usa para backups internos de trabajo.
    No manda sobre el sistema vivo.

DATOS

Mundos:

    data/worlds/{world}.json

Needs:

    data/needs/{world}/{need}.json

Gadgets:

    data/gadgets/{world}/{need}/{gadget-id}.json

IMAGENES

Heroes y tarjetas de indice:

    public/assets/images/needs/{world}/hero.png
    public/assets/images/needs/{world}/{need}.png

Gadgets:

    public/assets/images/gadgets/{world}/{need}/{gadget-id}.png

RENDER COMERCIAL

Flujo actual:

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

REGLA DE INTERVENCION

No tocar PHP si el problema es de datos.
No tocar CSS si el problema es de imagenes.
No tocar JSON si el problema es visual.
No usar storage como taller.
No crear backups dentro del proyecto.
No trabajar fuera de GadgetSelection-clean.

CIERRE

La estructura actual ya funciona.
El trabajo principal no es reconstruir la maquina.
El trabajo principal es alimentar el sistema con productos reales, imagenes limpias, JSON validado y localhost verde.