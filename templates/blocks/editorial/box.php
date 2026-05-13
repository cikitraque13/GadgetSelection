<?php
$box = $box ?? [];
$type = $box['type'] ?? 'criterion';
$text = $box['text'] ?? '';
$icon = $box['icon'] ?? '';

if ($icon !== '' && $icon !== 'x') {
    $icon = 'check';
}

if ($text !== ''):
?>
<div class="editorial-box editorial-box--<?php echo htmlspecialchars($type, ENT_QUOTES, 'UTF-8'); ?>">
    <?php if ($icon !== ''): ?>
        <div class="editorial-box__row">
            <span class="editorial-box__icon editorial-box__icon--<?php echo htmlspecialchars($icon, ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo $icon === 'x' ? '✕' : '✓'; ?>
            </span>
            <span><?php echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?></span>
        </div>
    <?php else: ?>
        <?php echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?>
    <?php endif; ?>
</div>
<?php endif; ?>