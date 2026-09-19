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
                <select id="footer-world" name="world" required>
                    <option value="" selected disabled>Elige un mundo</option>
                    <option value="/energia-autonomia">Energía y autonomía</option>
                    <option value="/dolor-ergonomia">Dolor y ergonomía</option>
                    <option value="/viaje-tecnologia">Viaje y tecnología</option>
                    <option value="/outdoor-supervivencia">Outdoor y supervivencia</option>
                    <option value="/entrenamiento-recuperacion">Entrenamiento y recuperación</option>
                </select>
                <button type="submit">Seguir con criterio</button>
            </form>

            <p class="footer-capture-trust">Cinco mundos. Entra por el que mejor responda a lo que necesitas.</p>
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
</footer>