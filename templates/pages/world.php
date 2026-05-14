<?php
$world = is_array($world ?? null) ? $world : [];
$needs = is_array($needs ?? null) ? $needs : [];

$worldId = (string)($world['id'] ?? '');
$worldSlug = (string)($world['slug'] ?? $worldId);
$worldTitle = (string)($world['title'] ?? 'Mundo');
$worldDescription = (string)($world['description'] ?? '');
$worldHeroImage = (string)($world['image'] ?? '');

$isDolor = $worldId === 'dolor-ergonomia';

$themeClass = match ($worldId) {
    'dolor-ergonomia' => 'is-dolor-ergonomia',
    'outdoor-supervivencia' => 'is-outdoor-supervivencia',
    'viaje-tecnologia' => 'is-viaje-tecnologia',
    'entrenamiento-recuperacion' => 'is-entrenamiento-recuperacion',
    'energia-autonomia' => 'is-energia-autonomia',
    default => 'is-neutral',
};

$rootClass = 'landing-scenario ' . $themeClass;

if (!function_exists('h')) {
    function h(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

$heroConfigs = [
    'dolor-ergonomia' => [
        'eyebrow' => 'Dolor y ergonom' . "\u{00ed}" . 'a',
        'title' => 'Peque' . "\u{00f1}" . 'as mejoras. Grandes cambios.',
        'lead' => 'Ergonom' . "\u{00ed}" . 'a real para una vida en movimiento.',
        'benefits' => [
            [
                'title' => 'Menos dolor',
                'text' => 'Reduce tensi' . "\u{00f3}" . 'n acumulada.',
            ],
            [
                'title' => 'M' . "\u{00e1}" . 's enfoque',
                'text' => 'Mejora postura y concentraci' . "\u{00f3}" . 'n.',
            ],
            [
                'title' => 'Mejor ma' . "\u{00f1}" . 'ana',
                'text' => 'Tu cuerpo de hoy define tu energ' . "\u{00ed}" . 'a.',
            ],
        ],
        'context_title' => 'El problema que no ves',
        'context_items' => [
            [
                'label' => 'Cervical',
                'text' => 'Pantallas bajas y cuello cargado.',
                'class' => 'is-cervical',
            ],
            [
                'label' => 'Lumbar',
                'text' => 'Horas sentado y apoyo deficiente.',
                'class' => 'is-lumbar',
            ],
            [
                'label' => 'Fatiga',
                'text' => 'Tensi' . "\u{00f3}" . 'n acumulada por inactividad.',
                'class' => 'is-fatigue',
            ],
        ],
        'footer_title' => 'Tu espacio. Tu postura. Tu mejor versi' . "\u{00f3}" . 'n.',
        'footer_tags' => [
            'Postura saludable',
            'Prevenci' . "\u{00f3}" . 'n diaria',
            'Rendimiento sostenible',
            'Ergonom' . "\u{00ed}" . 'a con prop' . "\u{00f3}" . 'sito',
        ],
        'bridge' => 'Empieza por la zona del cuerpo o por el apoyo que mas condiciona tu dia.',
    ],

    'outdoor-supervivencia' => [
        'eyebrow' => 'Outdoor y supervivencia',
        'title' => 'Preparaci' . "\u{00f3}" . 'n real fuera de casa.',
        'lead' => 'Luz, agua, energ' . "\u{00ed}" . 'a y orientaci' . "\u{00f3}" . 'n para moverte con mas criterio.',
        'benefits' => [
            [
                'title' => 'Luz segura',
                'text' => 'Visibilidad cuando el entorno cambia.',
            ],
            [
                'title' => 'Agua y energ' . "\u{00ed}" . 'a',
                'text' => 'Recursos b' . "\u{00e1}" . 'sicos siempre cubiertos.',
            ],
            [
                'title' => 'Fallar menos',
                'text' => 'Equipo compacto para salir preparado.',
            ],
        ],
        'context_title' => 'Kit base',
        'context_items' => [
            [
                'label' => 'Luz',
                'text' => 'Linternas, frontales y faroles.',
                'class' => 'is-light',
            ],
            [
                'label' => 'Agua',
                'text' => 'Filtros y purificaci' . "\u{00f3}" . 'n port' . "\u{00e1}" . 'til.',
                'class' => 'is-water',
            ],
            [
                'label' => 'Energ' . "\u{00ed}" . 'a',
                'text' => 'Powerbanks, solar y carga esencial.',
                'class' => 'is-power',
            ],
        ],
        'footer_title' => 'Preparado no significa cargar mas. Significa fallar menos.',
        'footer_tags' => [
            'Iluminaci' . "\u{00f3}" . 'n',
            'Agua segura',
            'Energ' . "\u{00ed}" . 'a port' . "\u{00e1}" . 'til',
            'Navegaci' . "\u{00f3}" . 'n',
            'Preparaci' . "\u{00f3}" . 'n b' . "\u{00e1}" . 'sica',
        ],
        'bridge' => 'Empieza por el recurso que mas puede limitar tu salida.',
    ],

    'viaje-tecnologia' => [
        'eyebrow' => 'Viaje y tecnolog' . "\u{00ed}" . 'a',
        'title' => 'Mu' . "\u{00e9}" . 'vete con menos caos.',
        'lead' => 'Orden, carga, audio y seguridad para viajar con tecnolog' . "\u{00ed}" . 'a sin fricci' . "\u{00f3}" . 'n.',
        'benefits' => [
            [
                'title' => 'Menos caos',
                'text' => 'Cables y accesorios bajo control.',
            ],
            [
                'title' => 'M' . "\u{00e1}" . 's movilidad',
                'text' => 'Carga y trabaja donde lo necesites.',
            ],
            [
                'title' => 'Mejor control',
                'text' => 'Menos perdidas y menos errores.',
            ],
        ],
        'context_title' => 'Viaje tech',
        'context_items' => [
            [
                'label' => 'Carga',
                'text' => 'Powerbanks, GaN, adaptadores y cables.',
                'class' => 'is-charge',
            ],
            [
                'label' => 'Orden',
                'text' => 'Mochilas, pouches y organizadores.',
                'class' => 'is-order',
            ],
            [
                'label' => 'Seguridad',
                'text' => 'Localizadores, candados y tags.',
                'class' => 'is-security',
            ],
        ],
        'footer_title' => 'Viajar mejor no es llevar mas. Es llevar lo correcto.',
        'footer_tags' => [
            'Equipaje inteligente',
            'Carga compacta',
            'Orden digital',
            'Productividad m' . "\u{00f3}" . 'vil',
            'Viaje sin fricci' . "\u{00f3}" . 'n',
        ],
        'bridge' => 'Empieza por la fricci' . "\u{00f3}" . 'n que mas se repite cuando viajas.',
    ],

    'entrenamiento-recuperacion' => [
        'eyebrow' => 'Entrenamiento y recuperaci' . "\u{00f3}" . 'n',
        'title' => 'Rinde mejor. Recupera mejor.',
        'lead' => 'Herramientas para movilidad, descarga muscular, soporte y control del esfuerzo.',
        'benefits' => [
            [
                'title' => 'Recupera mejor',
                'text' => 'Descarga y movilidad sin acumular fatiga.',
            ],
            [
                'title' => 'M' . "\u{00e1}" . 's movilidad',
                'text' => 'Calienta, estira y mu' . "\u{00e9}" . 'vete mejor.',
            ],
            [
                'title' => 'Ritmo sostenible',
                'text' => 'Control y soporte para entrenar con cabeza.',
            ],
        ],
        'context_title' => 'Cuerpo activo',
        'context_items' => [
            [
                'label' => 'Descarga',
                'text' => 'Pistolas, rodillos y accesorios.',
                'class' => 'is-release',
            ],
            [
                'label' => 'Movilidad',
                'text' => 'Bandas, esterillas y piezas de control.',
                'class' => 'is-mobility',
            ],
            [
                'label' => 'Soporte',
                'text' => 'Cintas, bicis y cardio en casa.',
                'class' => 'is-support',
            ],
        ],
        'footer_title' => 'Entrenar fuerte sirve de poco si no entrenas con cabeza.',
        'footer_tags' => [
            'Recuperaci' . "\u{00f3}" . 'n muscular',
            'Movilidad',
            'Hidrataci' . "\u{00f3}" . 'n',
            'Entrenamiento en casa',
            'Entrenamiento port' . "\u{00e1}" . 'til',
        ],
        'bridge' => 'Empieza por lo que limita tu progreso: descarga, movilidad o soporte.',
    ],

    'energia-autonomia' => [
        'eyebrow' => 'Energ' . "\u{00ed}" . 'a y autonom' . "\u{00ed}" . 'a',
        'title' => 'Vive fuera sin depender de todo.',
        'lead' => 'Autonom' . "\u{00ed}" . 'a real para camper, caravana, roulot y camping base: energ' . "\u{00ed}" . 'a, agua, fr' . "\u{00ed}" . 'o, solar, aver' . "\u{00ed}" . 'as y carga exterior.',
        'benefits' => [
            [
                'title' => 'M' . "\u{00e1}" . 's autonom' . "\u{00ed}" . 'a',
                'text' => 'Energ' . "\u{00ed}" . 'a, agua y fr' . "\u{00ed}" . 'o para estar fuera mas tiempo.',
            ],
            [
                'title' => 'Menos imprevistos',
                'text' => 'Aver' . "\u{00ed}" . 'as, pinchazos y seguridad cubiertos antes de salir.',
            ],
            [
                'title' => 'Vida camper real',
                'text' => 'Carga exterior, solar y habitabilidad sin saturar el interior.',
            ],
        ],
        'context_title' => 'Camper lista',
        'context_items' => [
            [
                'label' => 'Energ' . "\u{00ed}" . 'a',
                'text' => 'Estaciones, solar y electricidad 12V/230V.',
                'class' => 'is-charge',
            ],
            [
                'label' => 'Autonom' . "\u{00ed}" . 'a',
                'text' => 'Agua, ducha, fr' . "\u{00ed}" . 'o y cocina para escapadas largas.',
                'class' => 'is-backup',
            ],
            [
                'label' => 'Ruta',
                'text' => 'Aver' . "\u{00ed}" . 'as, seguridad y carga exterior camper.',
                'class' => 'is-camper',
            ],
        ],
        'footer_title' => 'Autonom' . "\u{00ed}" . 'a no es llevar mas cosas. Es llevar lo que evita quedarte vendido.',
        'footer_tags' => [
            'Camper',
            'Caravana',
            'Solar',
            'Agua y ducha',
            'Carga exterior',
        ],
        'bridge' => 'Empieza por lo que mas limita tu escapada: energia, agua, frio, seguridad o carga exterior.',
    ],
];

$heroConfig = $heroConfigs[$worldId] ?? [
    'eyebrow' => $worldTitle,
    'title' => $worldTitle,
    'lead' => $worldDescription !== '' ? $worldDescription : 'Entrada clara para avanzar con criterio.',
    'benefits' => [],
    'context_title' => '',
    'context_items' => [],
    'footer_title' => '',
    'footer_tags' => [],
    'bridge' => 'Empieza por la necesidad principal.',
];

$heroEyebrow = (string)($heroConfig['eyebrow'] ?? '');
$heroTitle = (string)($heroConfig['title'] ?? '');
$heroSupport = (string)($heroConfig['lead'] ?? '');
$heroBenefits = is_array($heroConfig['benefits'] ?? null) ? $heroConfig['benefits'] : [];
$contextPanelTitle = (string)($heroConfig['context_title'] ?? '');
$contextPanelItems = is_array($heroConfig['context_items'] ?? null) ? $heroConfig['context_items'] : [];
$heroFooterTitle = (string)($heroConfig['footer_title'] ?? '');
$heroFooterTags = is_array($heroConfig['footer_tags'] ?? null) ? $heroConfig['footer_tags'] : [];
$bridgeText = (string)($heroConfig['bridge'] ?? 'Empieza por la necesidad principal.');

$needVisualMap = [
    'dolor-cervical' => [
        'title' => 'Descarga cuello y hombros',
        'description' => 'Soluciones dirigidas a tensi' . "\u{00f3}" . 'n alta, descarga localizada y alivio en la parte superior del cuerpo.',
        'class' => 'entry-cervical',
        'kicker' => 'Alivio localizado',
    ],
    'dolor-lumbar' => [
        'title' => 'Corrige la zona lumbar',
        'description' => 'Soportes y apoyos para reducir presi' . "\u{00f3}" . 'n, sostener mejor la espalda y mejorar la postura sentada.',
        'class' => 'entry-lumbar',
        'kicker' => 'Entrada principal',
    ],
    'muneca-antebrazo' => [
        'title' => 'Cuida mu' . "\u{00f1}" . 'eca y antebrazo',
        'description' => 'Ratones, reposamu' . "\u{00f1}" . 'ecas y accesorios para reducir tensi' . "\u{00f3}" . 'n por trabajo repetitivo.',
        'class' => 'entry-generic-2',
        'kicker' => 'Trabajo diario',
    ],
    'piernas-circulacion' => [
        'title' => 'Descansa piernas y circulaci' . "\u{00f3}" . 'n',
        'description' => 'Apoyos, elevadores y soluciones para piernas cansadas por muchas horas sentado o de pie.',
        'class' => 'entry-generic-1',
        'kicker' => 'Descanso',
    ],
    'postura-escritorio' => [
        'title' => 'Ordena tu puesto de trabajo',
        'description' => 'Ergonom' . "\u{00ed}" . 'a aplicada al entorno para prevenir sobrecarga y sostener mejor el cuerpo durante horas.',
        'class' => 'entry-workspace',
        'kicker' => 'Prevenci' . "\u{00f3}" . 'n',
    ],
    'recuperacion-muscular' => [
        'title' => 'Recupera en casa',
        'description' => 'Piezas pensadas para bajar carga corporal y favorecer una pausa ' . "\u{00fa}" . 'til tras la jornada.',
        'class' => 'entry-recovery',
        'kicker' => 'Recuperaci' . "\u{00f3}" . 'n',
    ],
];

$entries = [];

foreach ($needs as $index => $need) {
    $needId = (string)($need['id'] ?? '');
    $needSlug = (string)($need['slug'] ?? $needId);

    $visual = $needVisualMap[$needId] ?? [
        'title' => (string)($need['title'] ?? 'Entrada'),
        'description' => (string)($need['description'] ?? 'Entrada preparada para avanzar con criterio.'),
        'class' => 'entry-generic-' . (($index % 4) + 1),
        'kicker' => 'Entrada concreta',
    ];

    $entries[] = [
        'title' => $visual['title'],
        'description' => $visual['description'],
        'href' => '/' . $worldSlug . '/' . $needSlug,
        'class' => $visual['class'],
        'kicker' => $visual['kicker'],
        'image' => (string)($need['image'] ?? ''),
    ];
}

$heroStyle = '';

if ($worldHeroImage !== '') {
    $heroStyle = "background-image:url('" . h($worldHeroImage) . "');";
}
?>

<section class="<?php echo h($rootClass); ?>">
    <div class="container">
        <section class="landing-hero" aria-label="Hero del mundo">
            <div
                class="landing-hero__background"
                aria-hidden="true"
                <?php if ($heroStyle !== ''): ?>
                    style="<?php echo $heroStyle; ?>"
                <?php endif; ?>
            ></div>

            <div class="landing-hero__overlay" aria-hidden="true"></div>

            <div class="landing-hero__surface">
                <div class="landing-hero__content">
                    <p class="landing-eyebrow"><?php echo h($heroEyebrow); ?></p>

                    <div class="landing-hero__primary">
                        <h1><?php echo h($heroTitle); ?></h1>
                        <a class="landing-hero__index-link" href="#world-index">Ver indice</a>
                        <p class="landing-lead"><?php echo h($heroSupport); ?></p>
                    </div>

                    <?php if (!empty($heroBenefits)): ?>
                        <div class="landing-benefits" aria-label="Beneficios principales">
                            <?php foreach ($heroBenefits as $benefit): ?>
                                <article class="landing-benefit">
                                    <strong><?php echo h((string)($benefit['title'] ?? '')); ?></strong>
                                    <span><?php echo h((string)($benefit['text'] ?? '')); ?></span>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($heroFooterTitle) || !empty($heroFooterTags)): ?>
                        <div class="landing-hero__footer">
                            <?php if (!empty($heroFooterTitle)): ?>
                                <p class="landing-hero__footer-title"><?php echo h($heroFooterTitle); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($heroFooterTags)): ?>
                                <div class="landing-hero__footer-tags">
                                    <?php foreach ($heroFooterTags as $tag): ?>
                                        <span><?php echo h((string)$tag); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($contextPanelItems)): ?>
                    <aside class="landing-context-panel landing-diagnostic" aria-label="Panel contextual del mundo">
                        <?php if (!empty($contextPanelTitle)): ?>
                            <p class="landing-context-panel__eyebrow landing-diagnostic__eyebrow">
                                <?php echo h($contextPanelTitle); ?>
                            </p>
                        <?php endif; ?>

                        <div class="landing-context-panel__body landing-diagnostic__body">
                            <div class="landing-context-panel__visual landing-diagnostic__figure" aria-hidden="true">
                                <span class="landing-context-panel__node is-one"></span>
                                <span class="landing-context-panel__node is-two"></span>
                                <span class="landing-context-panel__node is-three"></span>
                            </div>

                            <ul class="landing-context-panel__list landing-diagnostic__list">
                                <?php foreach ($contextPanelItems as $item): ?>
                                    <li class="<?php echo h((string)($item['class'] ?? '')); ?>">
                                        <span class="landing-context-panel__tag landing-diagnostic__tag">
                                            <?php echo h((string)($item['label'] ?? '')); ?>
                                        </span>
                                        <span class="landing-context-panel__text landing-diagnostic__text">
                                            <?php echo h((string)($item['text'] ?? '')); ?>
                                        </span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </aside>
                <?php endif; ?>
            </div>
        </section>

        <section class="landing-bridge" aria-label="Puente">
            <div class="landing-bridge__inner">
                <p class="landing-bridge__text"><?php echo h($bridgeText); ?></p>
            </div>
        </section>

        <section id="world-index" class="landing-grid-block" aria-label="Rejilla de entradas">
            <div class="landing-grid-block__head">
                <p class="landing-section-kicker">Entradas activas</p>
                <h2><?php echo 'Elige por necesidad, no por acumulaci' . "\u{00f3}" . 'n'; ?></h2>
            </div>

            <?php if (!empty($entries)): ?>
                <div class="landing-grid">
                    <?php foreach ($entries as $entry): ?>
                        <article class="landing-entry-card <?php echo h((string)$entry['class']); ?>">
                            <div class="landing-entry-card__visual" aria-hidden="true">
                                <?php if (!empty($entry['image'])): ?>
                                    <img
                                        class="landing-entry-card__img"
                                        src="<?php echo h((string)$entry['image']); ?>"
                                        alt=""
                                        loading="lazy"
                                    >
                                <?php endif; ?>

                                <div class="landing-entry-card__visual-overlay"></div>
                                <div class="landing-entry-card__badge"><?php echo h((string)$entry['kicker']); ?></div>
                            </div>

                            <div class="landing-entry-card__body">
                                <h3><?php echo h((string)$entry['title']); ?></h3>
                                <p><?php echo h((string)$entry['description']); ?></p>
                                <a class="landing-link landing-link--subtle" href="<?php echo h((string)$entry['href']); ?>">
                                    Abrir esta entrada
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </div>
</section>