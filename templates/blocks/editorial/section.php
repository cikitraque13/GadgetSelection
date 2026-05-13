<?php
$section = $section ?? [];
$sectionId = $section['id'] ?? '';
$title = $section['title'] ?? '';
$coreIdea = $section['core_idea'] ?? '';
$body = is_array($section['body'] ?? null) ? $section['body'] : [];
$box = is_array($section['box'] ?? null) ? $section['box'] : [];
$microExample = $section['micro_example'] ?? '';
$echoLine = $section['echo_line'] ?? '';
$transition = $section['transition'] ?? '';
$compareItems = is_array($section['compare_items'] ?? null) ? $section['compare_items'] : [];
?>
<section<?php if ($sectionId !== ''): ?> id="<?php echo htmlspecialchars($sectionId, ENT_QUOTES, 'UTF-8'); ?>"<?php endif; ?> class="editorial-section">
    <?php if ($title !== ''): ?>
        <h2><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h2>
    <?php endif; ?>

    <?php if ($coreIdea !== ''): ?>
        <p class="editorial-core-idea"><strong><?php echo htmlspecialchars($coreIdea, ENT_QUOTES, 'UTF-8'); ?></strong></p>
    <?php endif; ?>

    <?php foreach ($body as $paragraph): ?>
        <p><?php echo htmlspecialchars((string)$paragraph, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endforeach; ?>

    <?php include __DIR__ . '/box.php'; ?>

    <?php if (!empty($compareItems)): ?>
        <div class="editorial-compare">
            <?php foreach ($compareItems as $row): ?>
                <div><?php echo htmlspecialchars((string)$row, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if ($microExample !== ''): ?>
        <p class="editorial-micro"><?php echo htmlspecialchars($microExample, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <?php if ($echoLine !== ''): ?>
        <p class="editorial-echo"><?php echo htmlspecialchars($echoLine, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <?php if ($transition !== ''): ?>
        <p class="editorial-transition"><?php echo htmlspecialchars($transition, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>
</section>