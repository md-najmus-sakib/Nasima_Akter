
window.addEventListener('DOMContentLoaded', event => {
    const mainNav = document.body.querySelector('#navbar-main');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#navbar-main',
            offset: 75,
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});