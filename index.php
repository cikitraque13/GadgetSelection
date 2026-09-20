<?php

require_once __DIR__ . '/app/system/View.php';

require_once __DIR__ . '/app/controllers/HomeController.php';
require_once __DIR__ . '/app/controllers/WorldController.php';
require_once __DIR__ . '/app/controllers/NeedController.php';

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = rtrim($path, '/');
$path = $path === '' ? '/' : $path;

$worldIds = [
    'dolor-ergonomia',
    'outdoor-supervivencia',
    'viaje-tecnologia',
    'entrenamiento-recuperacion',
    'energia-autonomia',
    'ia-robotica',
];

if ($path === '/') {
    (new HomeController())->index();
    exit;
}

if ($path === '/metodo-riguroso') {
    View::render('pages/metodo-riguroso');
    exit;
}

if ($path === '/fallos-reales') {
    View::render('pages/fallos-reales');
    exit;
}

if ($path === '/claves-tecnicas') {
    View::render('pages/claves-tecnicas');
    exit;
}

if ($path === '/aviso-legal') {
    View::render('pages/aviso-legal');
    exit;
}

if ($path === '/politica-privacidad') {
    View::render('pages/politica-privacidad');
    exit;
}

if ($path === '/politica-cookies') {
    View::render('pages/politica-cookies');
    exit;
}

if ($path === '/afiliacion-amazon') {
    View::render('pages/afiliacion-amazon');
    exit;
}

$iaRoboticaEntries = [
    '/hogar-activo' => [
        'title' => 'Hogar activo',
        'description' => 'Robots y sistemas inteligentes para limpiar, mantener y automatizar tareas del hogar y el exterior.',
    ],
    '/robotica-util' => [
        'title' => 'Robótica útil',
        'description' => 'Robots para asistir, aprender, interactuar y acercar la nueva generación de máquinas inteligentes a la vida diaria.',
    ],
    '/drones-y-makers' => [
        'title' => 'Drones y makers',
        'description' => 'Drones, impresión 3D, robótica programable y herramientas para explorar, crear y experimentar.',
    ],
];

if ($path === '/ia-robotica') {
    View::render('pages/ia-robotica');
    exit;
}

if ($path === '/hogar-activo') {
    View::render('pages/hogar-activo');
    exit;
}

if ($path === '/robotica-util') {
    View::render('pages/robotica-util');
    exit;
}

if ($path === '/drones-y-makers') {
    View::render('pages/drones-y-makers');
    exit;
}

if (isset($iaRoboticaEntries[$path])) {
    View::render('pages/ia-robotica-entry', [
        'entryTitle' => $iaRoboticaEntries[$path]['title'],
        'entryDescription' => $iaRoboticaEntries[$path]['description'],
    ]);
    exit;
}
/*
|--------------------------------------------------------------------------
| Public structure: /world and /world/need
|--------------------------------------------------------------------------
*/

if (preg_match('#^/([a-z0-9\-]+)$#', $path, $matches)) {
    $worldId = $matches[1];

    if (in_array($worldId, $worldIds, true)) {
        (new WorldController())->show($worldId);
        exit;
    }
}

if (preg_match('#^/([a-z0-9\-]+)/([a-z0-9\-]+)$#', $path, $matches)) {
    $worldId = $matches[1];
    $needId = $matches[2];

    if (in_array($worldId, $worldIds, true)) {
        (new NeedController())->show($worldId, $needId);
        exit;
    }
}

http_response_code(404);
View::render('pages/404', [
    'message' => 'Página no encontrada',
]);