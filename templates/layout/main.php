<?php

ob_start();
require $view;
$content = ob_get_clean();

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>GadgetSelection</title>
    <!-- GadgetSelection favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/assets/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/assets/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/apple-touch-icon.png">
    <link rel="manifest" href="/public/site.webmanifest">
    <meta name="theme-color" content="#07120f">

<link rel="stylesheet" href="/public/assets/styles.css">


<link rel="stylesheet" href="/public/assets/css/world-need.css">
    <link rel="stylesheet" href="/public/assets/editorial.css">
</head>

<body>

<?php require __DIR__ . '/../blocks/header.php'; ?>

<main>

<?= $content ?>

</main>

<?php require __DIR__ . '/../blocks/footer.php'; ?>

</body>

</html>