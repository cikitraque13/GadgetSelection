<?php
$config = require __DIR__ . '/../../data/editorial/claves-tecnicas.php';
$hero = $config['hero'] ?? [];
$index = $config['index'] ?? ['items' => []];
$sections = $config['sections'] ?? [];
$cta = $config['cta'] ?? [];
$partialsDir = __DIR__ . '/../blocks/editorial';
?>
<section class="editorial-page editorial-page--claves">
    <div class="container">
        <?php include $partialsDir . '/hero.php'; ?>
        <?php include $partialsDir . '/index.php'; ?>

        <div class="editorial-flow">
            <?php foreach ($sections as $section): ?>
                <?php include $partialsDir . '/section.php'; ?>
            <?php endforeach; ?>

            <?php include $partialsDir . '/cta.php'; ?>
        </div>
    </div>
</section>