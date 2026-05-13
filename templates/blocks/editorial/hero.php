<?php
$hero = $hero ?? [];
$media = $hero['media'] ?? [];
$proofPoints = is_array($media['proof_points'] ?? null) ? $media['proof_points'] : [];
?>
<div class="editorial-hero">
    <div class="editorial-hero__content">
        <?php if (!empty($hero['eyebrow'])): ?>
            <p class="editorial-eyebrow"><?php echo htmlspecialchars($hero['eyebrow'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>

        <?php if (!empty($hero['title'])): ?>
            <h1><?php echo htmlspecialchars($hero['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <?php endif; ?>

        <?php if (!empty($hero['lead'])): ?>
            <p class="editorial-lead"><?php echo htmlspecialchars($hero['lead'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>

        <?php if (!empty($hero['support'])): ?>
            <p class="editorial-support"><?php echo htmlspecialchars($hero['support'], ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>

        <?php if (!empty($hero['tags']) && is_array($hero['tags'])): ?>
            <div class="editorial-tags">
                <?php foreach ($hero['tags'] as $tag): ?>
                    <span><?php echo htmlspecialchars((string) $tag, ENT_QUOTES, 'UTF-8'); ?></span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($hero['cta_text']) && !empty($hero['cta_url'])): ?>
            <a class="editorial-cta" href="<?php echo htmlspecialchars($hero['cta_url'], ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($hero['cta_text'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        <?php endif; ?>
    </div>

    <div class="editorial-hero__media">
        <div class="editorial-hero__art">
            <?php if (!empty($media['badge'])): ?>
                <span class="editorial-art__badge"><?php echo htmlspecialchars($media['badge'], ENT_QUOTES, 'UTF-8'); ?></span>
            <?php endif; ?>

            <?php if (!empty($proofPoints)): ?>
                <div class="editorial-art__proof" aria-label="Validación visual del sistema">
                    <?php foreach ($proofPoints as $point): ?>
                        <div class="editorial-proof__item">
                            <span class="editorial-proof__tick">✓</span>
                            <span><?php echo htmlspecialchars((string) $point, ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($media['headline']) || !empty($media['support'])): ?>
                <div class="editorial-art__caption">
                    <?php if (!empty($media['headline'])): ?>
                        <strong><?php echo htmlspecialchars($media['headline'], ENT_QUOTES, 'UTF-8'); ?></strong>
                    <?php endif; ?>
                    <?php if (!empty($media['support'])): ?>
                        <span><?php echo htmlspecialchars($media['support'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>