/**
 * DIVERGENTES — Nosotros page JS
 * Activa el link del sidenav según la sección visible en pantalla.
 * Cargado solo en page-nosotros.php via functions.php (depende de jQuery del padre).
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var sections = document.querySelectorAll('.nos-dept');
    var navLinks = document.querySelectorAll('.nos-sidenav a');

    if (!sections.length || !navLinks.length) return;

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          navLinks.forEach(function (a) { a.classList.remove('is-active'); });
          var href = '#' + entry.target.id;
          var match = document.querySelector('.nos-sidenav a[href="' + href + '"]');
          if (match) match.classList.add('is-active');
        }
      });
    }, { rootMargin: '-25% 0px -70% 0px' });

    sections.forEach(function (s) { io.observe(s); });
  });

})();
