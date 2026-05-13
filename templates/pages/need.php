<?php
$world = is_array($world ?? null) ? $world : [];
$need = is_array($need ?? null) ? $need : [];
$gadgets = is_array($gadgets ?? null) ? $gadgets : [];

$worldTitle = (string)($world['title'] ?? 'Mundo');
$worldSlug = (string)($world['slug'] ?? $world['id'] ?? '');
$needTitle = (string)($need['title'] ?? 'Necesidad');
$needDescription = (string)($need['description'] ?? '');
$needImage = (string)($need['image'] ?? '');

if (!function_exists('h')) {
    function h(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
?>

<section class="need-page need-page--selection">
    <nav class="breadcrumbs">
        <a href="/">Inicio</a>
        <span>›</span>
        <a href="/<?php echo h($worldSlug); ?>">
            <?php echo h($worldTitle); ?>
        </a>
        <span>›</span>
        <strong><?php echo h($needTitle); ?></strong>
    </nav>

    <header class="need-hero">
        <div class="need-hero__content">
            <p class="eyebrow"><?php echo h($worldTitle); ?></p>
            <h1><?php echo h($needTitle); ?></h1>
            <p><?php echo h($needDescription); ?></p>

            <div class="need-hero__actions">
                <a href="#gadgets" class="need-primary-link">Ver gadgets recomendados</a>
            </div>
        </div>

        <?php if (!empty($needImage)): ?>
            <figure class="need-hero__image">
                <img src="<?php echo h($needImage); ?>"
                     alt="<?php echo h($needTitle); ?>">
            </figure>
        <?php endif; ?>
    </header>

    <section class="gadget-list-section" id="gadgets">
        <div class="section-heading section-heading--commercial">
            <p class="eyebrow">Seleccion GadgetSelection</p>
            <h2>Gadgets recomendados: <?php echo h($needTitle); ?></h2>
            <p>Productos concretos para decidir rapido: imagen, precio, criterio de uso y enlace a Amazon. Sin enciclopedia. Sin humo.</p>
        </div>

        <?php if (empty($gadgets)): ?>
            <div class="empty-state">
                <h3>Catalogo pendiente</h3>
                <p>Todavia no hay gadgets publicados para esta necesidad.</p>
            </div>
        <?php else: ?>
            <div class="gadget-grid gadget-grid--commercial">
                <?php foreach ($gadgets as $gadget): ?>
                    <?php
                    $gadgetTitle = (string)($gadget['title'] ?? 'Gadget');
                    $gadgetImage = (string)($gadget['image'] ?? '');
                    $ranking = (string)($gadget['ranking'] ?? '');
                    $rankingLabel = (string)($gadget['ranking_label'] ?? '');
                    $price = (string)($gadget['price'] ?? '');
                    $score = isset($gadget['score']) ? (string)$gadget['score'] : '';
                    $summary = (string)($gadget['summary'] ?? '');
                    $bestFor = (string)($gadget['best_for'] ?? '');
                    $affiliateUrl = (string)($gadget['affiliate_url'] ?? '');
                    $affiliateRel = (string)($gadget['affiliate_rel'] ?? 'sponsored nofollow noopener');
                    ?>
                    <article class="gadget-card gadget-card--commercial">
                        <?php if (!empty($gadgetImage)): ?>
                            <figure class="gadget-card__image">
                                <img src="<?php echo h($gadgetImage); ?>"
                                     alt="<?php echo h($gadgetTitle); ?>"
                                     loading="lazy">
                            </figure>
                        <?php endif; ?>

                        <div class="gadget-card__body">
                            <div class="gadget-card__topline">
                                <?php if ($ranking !== ''): ?>
                                    <span class="gadget-card__rank">#<?php echo h($ranking); ?></span>
                                <?php endif; ?>

                                <?php if ($rankingLabel !== ''): ?>
                                    <span class="gadget-card__label"><?php echo h($rankingLabel); ?></span>
                                <?php endif; ?>
                            </div>

                            <h3><?php echo h($gadgetTitle); ?></h3>

                            <div class="gadget-card__meta">
                                <?php if ($price !== ''): ?>
                                    <strong><?php echo h($price); ?></strong>
                                <?php endif; ?>

                                <?php if ($score !== ''): ?>
                                    <span><?php echo h($score); ?>/10</span>
                                <?php endif; ?>
                            </div>

                            <?php if ($summary !== ''): ?>
                                <p class="gadget-card__summary"><?php echo h($summary); ?></p>
                            <?php endif; ?>

                            <?php if ($bestFor !== ''): ?>
                                <div class="gadget-card__decision">
                                    <div>
                                        <strong>Mejor para</strong>
                                        <p><?php echo h($bestFor); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($affiliateUrl !== ''): ?>
                                <a class="gadget-card__cta"
                                   href="<?php echo h($affiliateUrl); ?>"
                                   rel="<?php echo h($affiliateRel); ?>"
                                   target="_blank">
                                    Ver en Amazon
                                </a>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</section>