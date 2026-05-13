<?php
$slides = [
    [
        'title' => 'Dolor y ergonomia',
        'support' => 'Alivio y correccion para reducir tension y mejorar postura.',
        'cta' => 'Corrige',
        'image' => '/public/assets/images/carousel/dolor-ergonomia.png',
        'href' => '/dolor-ergonomia',
    ],
    [
        'title' => 'Outdoor y supervivencia',
        'support' => 'Preparacion real para luz, agua, energia y emergencias fuera de casa.',
        'cta' => 'Explora',
        'image' => '/public/assets/images/carousel/outdoor-supervivencia.png',
        'href' => '/outdoor-supervivencia',
    ],
    [
        'title' => 'Viaje y<br>tecnologia',
        'support' => 'Orden, seguridad y movilidad para viajar con menos friccion.',
        'cta' => 'Organiza',
        'image' => '/public/assets/images/carousel/viaje-tecnologia.png',
        'href' => '/viaje-tecnologia',
    ],
    [
        'title' => 'Entrenamiento y recuperacion',
        'support' => 'Rendimiento y descarga para activar, recuperar y sostener el ritmo.',
        'cta' => 'Entrena',
        'image' => '/public/assets/images/carousel/entrenamiento-recuperacion.png',
        'href' => '/entrenamiento-recuperacion',
    ],
    [
        'title' => 'Energia y autonomia',
        'support' => 'Autonomia real para camper, caravana y vida fuera de casa.',
        'cta' => 'Equipa',
        'image' => '/public/assets/images/carousel/energia-autonomia.png',
        'href' => '/energia-autonomia',
    ],
];
?>

<section class="home-carousel">
    <div class="container">
        <div class="carousel-shell" id="homeCarousel">
            <?php foreach ($slides as $index => $slide): ?>
                <article class="carousel-slide<?= $index === 0 ? ' is-active' : '' ?>" style="background-image: url('<?= htmlspecialchars($slide['image'], ENT_QUOTES, 'UTF-8') ?>');" aria-hidden="<?= $index === 0 ? 'false' : 'true' ?>">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-content">
                        <h2><?= $slide['title'] ?></h2>
                        <p class="carousel-support"><?= htmlspecialchars($slide['support'], ENT_QUOTES, 'UTF-8') ?></p>
                        <a href="<?= htmlspecialchars($slide['href'], ENT_QUOTES, 'UTF-8') ?>" class="carousel-cta">
                            <?= htmlspecialchars($slide['cta'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>

            <div class="carousel-dots" id="homeCarouselDots">
                <?php foreach ($slides as $index => $slide): ?>
                    <button class="carousel-dot<?= $index === 0 ? ' is-active' : '' ?>" data-index="<?= $index ?>" aria-label="Ir al slide <?= $index + 1 ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    const root = document.getElementById('homeCarousel');
    if (!root) return;

    const slides = Array.from(root.querySelectorAll('.carousel-slide'));
    const dots = Array.from(document.querySelectorAll('#homeCarouselDots .carousel-dot'));

    let current = 0;
    let timer = null;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            const active = i === index;
            slide.classList.toggle('is-active', active);
            slide.setAttribute('aria-hidden', active ? 'false' : 'true');
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle('is-active', i === index);
        });

        current = index;
    }

    function nextSlide() {
        showSlide((current + 1) % slides.length);
    }

    function startAuto() {
        stopAuto();
        timer = setInterval(nextSlide, 4800);
    }

    function stopAuto() {
        if (timer) clearInterval(timer);
        timer = null;
    }

    dots.forEach((dot) => {
        dot.addEventListener('click', function () {
            showSlide(parseInt(this.dataset.index, 10));
            startAuto();
        });
    });

    root.addEventListener('mouseenter', stopAuto);
    root.addEventListener('mouseleave', startAuto);

    showSlide(0);
    startAuto();
})();
</script>