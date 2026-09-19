(function () {
    'use strict';

    function sendEvent(name, params) {
        if (typeof window.gtag !== 'function') return;
        try { window.gtag('event', name, params || {}); } catch (_) {}
    }

    function readContext(el) {
        return {
            world_id: el.dataset.worldId || undefined,
            need_id: el.dataset.needId || undefined
        };
    }

    document.addEventListener('DOMContentLoaded', function () {
        var world = document.querySelector('[data-ga-world-view]');
        if (world) {
            sendEvent('world_view', { world_id: world.dataset.worldId });
        }

        var need = document.querySelector('[data-ga-need-view]');
        if (need) {
            sendEvent('need_view', readContext(need));
        }

        var gadgets = document.querySelectorAll('[data-ga-gadget-view]');
        if ('IntersectionObserver' in window) {
            var seen = new WeakSet();
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting || seen.has(entry.target)) return;
                    seen.add(entry.target);
                    var el = entry.target;
                    sendEvent('gadget_view', {
                        world_id: el.dataset.worldId || undefined,
                        need_id: el.dataset.needId || undefined,
                        gadget_id: el.dataset.gadgetId || undefined,
                        brand: el.dataset.brand || undefined,
                        ranking: el.dataset.ranking || undefined
                    });
                    observer.unobserve(el);
                });
            }, { threshold: 0.25 });
            gadgets.forEach(function (el) { observer.observe(el); });
        } else {
            gadgets.forEach(function (el) {
                sendEvent('gadget_view', {
                    world_id: el.dataset.worldId || undefined,
                    need_id: el.dataset.needId || undefined,
                    gadget_id: el.dataset.gadgetId || undefined,
                    brand: el.dataset.brand || undefined,
                    ranking: el.dataset.ranking || undefined
                });
            });
        }

        document.addEventListener('click', function (event) {
            var link = event.target.closest('[data-ga-amazon-click]');
            if (!link) return;
            sendEvent('amazon_click', {
                gadget_id: link.dataset.gadgetId || undefined,
                need_id: link.dataset.needId || undefined,
                world_id: link.dataset.worldId || undefined,
                destination: 'amazon'
            });
        }, true);
    });
})();
