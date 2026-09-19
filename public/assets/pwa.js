(() => {
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => navigator.serviceWorker.register('/public/sw.js'));
  }
  let installPrompt = null;
  const button = document.querySelector('[data-install-app]');
  if (!button) return;
  window.addEventListener('beforeinstallprompt', event => {
    event.preventDefault();
    installPrompt = event;
    button.hidden = false;
  });
  button.addEventListener('click', async () => {
    if (!installPrompt) return;
    await installPrompt.prompt();
    installPrompt = null;
    button.hidden = true;
  });
  window.addEventListener('appinstalled', () => {
    installPrompt = null;
    button.hidden = true;
  });
})();