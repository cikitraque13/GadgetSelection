<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
$root = __DIR__;

function sendStaticFile(string $file): void
{
    if (!is_file($file)) {
        error_log("STATIC MISS: " . $file);
        http_response_code(404);
        echo '404 static miss';
        exit;
    }

    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    $mimeTypes = [
        'css'  => 'text/css; charset=UTF-8',
        'js'   => 'application/javascript; charset=UTF-8',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
        'svg'  => 'image/svg+xml',
        'gif'  => 'image/gif',
        'ico'  => 'image/x-icon',
    ];

    if (isset($mimeTypes[$extension])) {
        header('Content-Type: ' . $mimeTypes[$extension]);
    }

    readfile($file);
    exit;
}

if (str_starts_with($uri, '/assets/')) {
    $assetPath = $root . '/public' . $uri;
    error_log("ASSET MAP: {$uri} -> {$assetPath}");
    sendStaticFile($assetPath);
}

if (str_starts_with($uri, '/public/')) {
    $publicPath = $root . $uri;
    error_log("PUBLIC MAP: {$uri} -> {$publicPath}");
    sendStaticFile($publicPath);
}

$physicalPath = $root . $uri;

if ($uri !== '/' && is_file($physicalPath)) {
    error_log("PHYSICAL FILE: {$uri} -> {$physicalPath}");
    sendStaticFile($physicalPath);
}

require $root . '/index.php';