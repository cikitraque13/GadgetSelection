<?php
$index = $index ?? [];
$items = is_array($index['items'] ?? null) ? $index['items'] : [];
if (!empty($items)):
?>
<div id="editorial-start" class="editorial-index">
    <?php foreach ($items as $item): ?>
        <?php
        $label = $item['label'] ?? '';
        $url = $item['url'] ?? '';
        if ($label === '' || $url === '') { continue; }
        ?>
        <a href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
        </a>
    <?php endforeach; ?>
</div>
<?php endif; ?>