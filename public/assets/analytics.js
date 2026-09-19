(function () {
    'use strict';

    var CONSENT_KEY = 'gs_analytics_consent_v1';

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

    function updateConsent(granted) {
        if (typeof window.gtag !== 'function') return;
        window.gtag('consent', 'update', {
            analytics_storage: granted ? 'granted' : 'denied',
            ad_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied'
        });
    }

    function storeConsent(value) {
        try { window.localStorage.setItem(CONSENT_KEY, value); } catch (_) {}
    }

    function getStoredConsent() {
        try {
            var value = window.localStorage.getItem(CONSENT_KEY);
            return value === 'granted' || value === 'denied' ? value : null;
        } catch (_) {
            return null;
        }
    }

    function hideBanner() {
        var banner = document.getElementById('cookie-consent-banner');
        if (banner) banner.hidden = true;
    }

    function setConsent(value) {
        var granted = value === 'granted';
        storeConsent(value);
        updateConsent(granted);
        hideBanner();
    }

    var storedConsent = getStoredConsent();
    if (storedConsent) {
        updateConsent(storedConsent === 'granted');
    }

    document.addEventListener('DOMContentLoaded', function () {
        var banner = document.getElementById('cookie-consent-banner');
        if (banner) {
            if (storedConsent) {
                banner.hidden = true;
            } else {
                banner.hidden = false;
            }

            var accept = document.getElementById('cookie-consent-accept');
            var reject = document.getElementById('cookie-consent-reject');
            if (accept) accept.addEventListener('click', function () { setConsent('granted'); });
            if (reject) reject.addEventListener('click', function () { setConsent('denied'); });
        }

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
