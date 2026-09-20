<footer class="site-footer">
    <div class="footer-shell">

        <section class="footer-top" aria-label="Cierre de marca">
            <div class="footer-brand-mark">GadgetSelection</div>
            <h2 class="footer-top-title">Criterio real para elegir mejor.</h2>
            <p class="footer-top-copy">
                Has recorrido un sistema pensado para filtrar ruido, reducir error y ayudarte a decidir con mas claridad.
            </p>
        </section>

        <section class="footer-capture" aria-label="Elige tu mundo">
            <div class="footer-capture-copy">
                <p class="footer-capture-kicker">SIGUE CON CRITERIO</p>
                <h3>¿Qué quieres resolver?</h3>
                <p>
                    Elige el mundo que más encaja contigo y te llevamos directamente allí.
                </p>
            </div>

            <form class="footer-capture-form" action="/" method="get" onsubmit="var destination=this.elements['world'].value; if(destination){window.location.href=destination;} return false;">
                <label class="sr-only" for="footer-world">Elige un mundo</label>
                <div class="footer-world-select">
                    <button class="footer-world-select__trigger" type="button" aria-haspopup="listbox" aria-expanded="false">Elige un mundo</button>
                    <div class="footer-world-select__menu" role="listbox" aria-label="Elige un mundo" hidden>
                        <button type="button" role="option" data-value="/energia-autonomia">Energía y autonomía</button>
                        <button type="button" role="option" data-value="/dolor-ergonomia">Dolor y ergonomía</button>
                        <button type="button" role="option" data-value="/viaje-tecnologia">Viaje y tecnología</button>
                        <button type="button" role="option" data-value="/outdoor-supervivencia">Outdoor y supervivencia</button>
                        <button type="button" role="option" data-value="/entrenamiento-recuperacion">Entrenamiento y recuperación</button>
                        <button type="button" role="option" data-value="/ia-robotica">IA y Robótica</button>
                    </div>
                    <input id="footer-world" name="world" type="hidden" required>
                </div>
                <button type="submit">Seguir con criterio</button>
            </form>
            <script>
                (function () {
                    var root = document.querySelector('.footer-world-select');
                    if (!root) return;
                    var trigger = root.querySelector('.footer-world-select__trigger');
                    var menu = root.querySelector('.footer-world-select__menu');
                    var input = root.querySelector('input[name="world"]');
                    var options = Array.prototype.slice.call(menu.querySelectorAll('[role="option"]'));

                    function closeMenu() {
                        menu.hidden = true;
                        trigger.setAttribute('aria-expanded', 'false');
                    }

                    function openMenu() {
                        menu.hidden = false;
                        trigger.setAttribute('aria-expanded', 'true');
                        options[0].focus();
                    }

                    trigger.addEventListener('click', function () {
                        if (menu.hidden) openMenu(); else closeMenu();
                    });

                    trigger.addEventListener('keydown', function (event) {
                        if (event.key === 'ArrowDown' || event.key === 'Enter' || event.key === ' ') {
                            event.preventDefault();
                            openMenu();
                        }
                    });

                    options.forEach(function (option, index) {
                        option.addEventListener('click', function () {
                            input.value = option.getAttribute('data-value');
                            trigger.textContent = option.textContent;
                            closeMenu();
                            trigger.focus();
                        });
                        option.addEventListener('keydown', function (event) {
                            if (event.key === 'ArrowDown') {
                                event.preventDefault();
                                options[(index + 1) % options.length].focus();
                            } else if (event.key === 'ArrowUp') {
                                event.preventDefault();
                                options[(index - 1 + options.length) % options.length].focus();
                            } else if (event.key === 'Escape') {
                                closeMenu();
                                trigger.focus();
                            }
                        });
                    });

                    document.addEventListener('click', function (event) {
                        if (!root.contains(event.target)) closeMenu();
                    });
                }());
            </script>

            <p class="footer-capture-trust">Seis mundos. Entra por el que mejor responda a lo que necesitas.</p>
        </section>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <p>(c) GadgetSelection</p>
            </div>

            <nav class="footer-micro-nav" aria-label="Navegacion legal">
                <a href="/aviso-legal">Aviso legal</a>
                <a href="/politica-privacidad">Privacidad</a>
                <a href="/politica-cookies">Cookies</a>
                <a href="/afiliacion-amazon">Afiliacion Amazon</a>
            </nav>
        </div>

    </div>
    <button type="button" class="footer-install-app" data-install-app hidden>Instalar GadgetSelection</button>
</footer>