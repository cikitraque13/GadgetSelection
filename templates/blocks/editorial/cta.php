<?php
$cta = $cta ?? [];

$primaryText = $cta['primary_text'] ?? ($cta['button_text'] ?? '');
$primaryUrl = $cta['primary_url'] ?? ($cta['button_url'] ?? '');

$secondaryText = $cta['secondary_text'] ?? '';
$secondaryUrl = $cta['secondary_url'] ?? '';

$body = $cta['body'] ?? ($cta['text'] ?? '');

$hasTitle = !empty($cta['title']);
$hasBody = !empty($body);
$hasPrimaryCta = $primaryText !== '' && $primaryUrl !== '';
$hasSecondaryCta = $secondaryText !== '' && $secondaryUrl !== '';
$hasAnyCta = $hasPrimaryCta || $hasSecondaryCta;
$hasContent = $hasTitle || $hasBody || $hasAnyCta;

if ($hasContent):
?>
<section class="editorial-close">
    <?php if ($hasTitle): ?>
        <p class="editorial-close__title"><?php echo htmlspecialchars($cta['title'], ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <?php if ($hasBody): ?>
        <p><?php echo htmlspecialchars($body, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <?php if ($hasAnyCta): ?>
        <div class="editorial-cta-group">
            <?php if ($hasPrimaryCta): ?>
                <a class="editorial-cta editorial-cta--final" href="<?php echo htmlspecialchars($primaryUrl, ENT_QUOTES, 'UTF-8'); ?>">
                    <?php echo htmlspecialchars($primaryText, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php endif; ?>

            <?php if ($hasSecondaryCta): ?>
                <a class="editorial-cta editorial-cta--secondary" href="<?php echo htmlspecialchars($secondaryUrl, ENT_QUOTES, 'UTF-8'); ?>">
                    <?php echo htmlspecialchars($secondaryText, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>