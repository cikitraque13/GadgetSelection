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