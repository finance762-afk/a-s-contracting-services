/* ============================================
   Page One Insights — Main JavaScript
   Auto-generated from build-plan.json
   ============================================ */

document.documentElement.classList.add('js-anim');

document.addEventListener('DOMContentLoaded', function() {

  /* === Smooth Scroll for Anchor Links === */
  var pageHeader = document.querySelector('[data-header]');
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var targetId = this.getAttribute('href').substring(1);
      if (!targetId) return;
      var target = document.getElementById(targetId);
      if (target) {
        e.preventDefault();
        var headerHeight = pageHeader ? pageHeader.offsetHeight : 0;
        var top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  /* === IntersectionObserver for .reveal-* scroll animations === */
  var revealElements = document.querySelectorAll('.reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale');
  if (revealElements.length > 0 && 'IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    revealElements.forEach(function(el) { revealObserver.observe(el); });
  } else {
    // Fallback: immediately show all reveal elements if IntersectionObserver is unavailable
    revealElements.forEach(function(el) { el.classList.add('revealed'); });
  }

  // Safety net: after 1.5s reveal anything the observer hasn't touched yet
  // (guards against tall sections that never cross the intersection threshold)
  setTimeout(function() {
    document.querySelectorAll('.reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale').forEach(function(el) {
      if (!el.classList.contains('revealed')) { el.classList.add('revealed'); }
    });
  }, 1500);

  /* === Counter Animation for data-counter elements === */
  var counters = document.querySelectorAll('[data-counter]');
  if (counters.length > 0 && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseInt(el.getAttribute('data-counter'), 10);
          var suffix = el.getAttribute('data-suffix') || '';
          var prefix = el.getAttribute('data-prefix') || '';
          var duration = 2000;
          var startTime = null;

          function animate(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
            var current = Math.floor(eased * target);
            el.textContent = prefix + current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(animate);
            else el.textContent = prefix + target.toLocaleString() + suffix;
          }
          requestAnimationFrame(animate);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.3 });
    counters.forEach(function(el) { counterObserver.observe(el); });
  }

  /* === Swiper Carousel Init for .reviews-swiper === */
  if (typeof Swiper !== 'undefined') {
    var reviewsSwiper = document.querySelector('.reviews-swiper');
    if (reviewsSwiper) {
      new Swiper('.reviews-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
          640: { slidesPerView: 2 },
          1024: { slidesPerView: 3 }
        }
      });
    }
  }

});
