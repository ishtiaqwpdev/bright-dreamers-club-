/**
 * Blur-up lazy loading for content images (.lazy-img + data-src).
 * Icons and images without .lazy-img are never touched.
 *
 * Usage on new images:
 *   <div class="lazy-img-wrap">
 *     <img class="lazy-img" src="PLACEHOLDER" data-src="full-image.jpg" alt="..." />
 *   </div>
 */
(function ($) {
  'use strict';

  var PLACEHOLDER =
    'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

  function loadLazyImage(img) {
    if (!img || img.classList.contains('loaded') || img.dataset.lazyLoading === 'true') {
      return;
    }

    var fullSrc = img.getAttribute('data-src');
    if (!fullSrc) {
      return;
    }

    img.dataset.lazyLoading = 'true';

    var loader = new Image();

    loader.onload = function () {
      img.src = fullSrc;
      img.removeAttribute('data-src');
      delete img.dataset.lazyLoading;
      img.classList.add('loaded');
    };

    loader.onerror = function () {
      delete img.dataset.lazyLoading;
      img.classList.add('loaded');
    };

    loader.src = fullSrc;
  }

  function initLazyImages(root) {
    var scope = root && root.querySelectorAll ? root : document;
    var images = scope.querySelectorAll('img.lazy-img[data-src]');

    if (!images.length) {
      return;
    }

    images.forEach(function (img) {
      if (!img.getAttribute('src')) {
        img.setAttribute('src', PLACEHOLDER);
      }
    });

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (!entry.isIntersecting) {
              return;
            }
            loadLazyImage(entry.target);
            observer.unobserve(entry.target);
          });
        },
        {
          root: null,
          rootMargin: '200px 0px',
          threshold: 0.01,
        }
      );

      images.forEach(function (img) {
        observer.observe(img);
      });
      return;
    }

    function checkVisible() {
      Array.prototype.forEach.call(images, function (img) {
        if (img.classList.contains('loaded') || !img.getAttribute('data-src')) {
          return;
        }

        var rect = img.getBoundingClientRect();
        if (rect.bottom >= -200 && rect.top <= window.innerHeight + 200) {
          loadLazyImage(img);
        }
      });
    }

    checkVisible();
    $(window).on('scroll.lazyImg resize.lazyImg', checkVisible);
  }

  window.BrightDreamersLazyImages = {
    init: initLazyImages,
    load: loadLazyImage,
    placeholder: PLACEHOLDER,
  };
})(jQuery);
