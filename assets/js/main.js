/**
 * Site-wide interactions (mobile menu, sticky sidebars, forms, etc.)
 */
(function ($) {
  'use strict';

  function readStickyTop() {
    return Math.round(Math.min(Math.max(window.innerWidth * 0.025, 20), 32));
  }

  function initMobileMenu() {
    var $toggle = $('[data-menu-toggle]');
    var $menu = $('[data-mobile-menu]');

    if (!$toggle.length || !$menu.length) return;

    $toggle.on('click', function () {
      var isOpen = $menu.attr('aria-hidden') === 'false';
      var nextOpen = !isOpen;
      $menu.attr('aria-hidden', nextOpen ? 'false' : 'true');
      $toggle.attr('aria-expanded', nextOpen ? 'true' : 'false');
      $toggle.attr('aria-label', nextOpen ? 'Close menu' : 'Open menu');
      $('body').toggleClass('menu-open', nextOpen);
    });
  }

  function normalizePageSlug(slug) {
    var aliases = {
      'apply-to-become': 'apply-to-join',
      'photo-media-consent': 'photo-media-consent-form'
    };

    return aliases[slug] || slug;
  }

  function pageSlug(value) {
    if (!value) return 'index';

    var pathname;
    try {
      pathname = new URL(value, window.location.href).pathname;
    } catch (err) {
      pathname = String(value);
    }

    var parts = pathname.replace(/\/+$/, '').split('/').filter(function (part) {
      return part.length > 0;
    });

    if (!parts.length) return 'index';

    var segment = parts[parts.length - 1].toLowerCase().replace(/\.html$/i, '');
    return normalizePageSlug(segment || 'index');
  }

  function linkSlug(href) {
    if (!href || href.charAt(0) === '#') return '';

    try {
      return pageSlug(new URL(href, window.location.href).pathname);
    } catch (err) {
      return pageSlug(href);
    }
  }

  function initNavActiveState() {
    var current = pageSlug(window.location.pathname);
    var exploreSubpages = ['creative-makers', 'young-ideas-lab', 'create-for-cause', 'community-adventures'];
    var $navLinks = $('.site-nav a[href], .mobile-menu a[href]');

    $navLinks.removeClass('is-active').removeAttr('aria-current');

    $navLinks.each(function () {
      var $link = $(this);
      var href = $link.attr('href');

      if (linkSlug(href) === current) {
        $link.addClass('is-active').attr('aria-current', 'page');
      }
    });

    if (exploreSubpages.indexOf(current) !== -1) {
      $navLinks.filter(function () {
        return linkSlug($(this).attr('href')) === 'explore';
      }).addClass('is-active');
    }
  }

  function initFaqPage() {
    var $page = $('.faq-page');
    if (!$page.length) return;

    var $accordion = $('#faq-accordion');
    var $items = $accordion.find('.faq-item');
    var $topics = $('.faq-topic');
    var $search = $('#faq-search-input');
    var $empty = $('#faq-empty');
    var activeTopic = 'about';
    var topicFilterEnabled = false;

    function itemMatchesTopic($item, topic) {
      var topics = ($item.attr('data-faq-topic') || '').split(/\s+/);
      return topics.indexOf(topic) !== -1;
    }

    function itemMatchesSearch($item, query) {
      if (!query) return true;
      return $item.text().toLowerCase().indexOf(query) !== -1;
    }

    function updateVisibility() {
      var query = ($search.val() || '').trim().toLowerCase();
      var visibleCount = 0;

      $items.each(function () {
        var $item = $(this);
        var topicMatch = !topicFilterEnabled || itemMatchesTopic($item, activeTopic);
        var searchMatch = itemMatchesSearch($item, query);
        var show = topicMatch && searchMatch;
        $item.toggle(show);
        if (show) visibleCount += 1;
      });

      $empty.prop('hidden', visibleCount > 0);
    }

    $accordion.on('click', '.faq-item__trigger', function () {
      var $item = $(this).closest('.faq-item');
      var isOpen = $item.hasClass('is-open');

      if (isOpen) {
        $item.removeClass('is-open');
        $(this).attr('aria-expanded', 'false');
        return;
      }

      $items.not($item).each(function () {
        var $other = $(this);
        $other.removeClass('is-open');
        $other.find('.faq-item__trigger').attr('aria-expanded', 'false');
      });

      $item.addClass('is-open');
      $(this).attr('aria-expanded', 'true');
    });

    $topics.on('click', function () {
      activeTopic = $(this).attr('data-faq-topic');
      topicFilterEnabled = true;
      $topics.removeClass('is-active').attr('aria-selected', 'false');
      $(this).addClass('is-active').attr('aria-selected', 'true');
      updateVisibility();
    });

    $search.on('input', updateVisibility);
    updateVisibility();
  }

  function initMediaPolicyPage() {
    var $page = $('.media-policy-page, .privacy-policy-page').first();
    if (!$page.length) return;

    var $navLinks = $page.find('.media-policy-nav__link');
    var $navList = $page.find('.media-policy-nav__list');
    var $sections = $page.find('[data-media-section]');
    var $main = $page.find('.media-policy-main');
    var $sidebar = $page.find('.media-policy-sidebar');
    var $panel = $page.find('.media-policy-sidebar__sticky');
    var $content = $page.find('.media-policy-content');
    var desktopMq = window.matchMedia('(min-width: 1025px)');
    var observer;
    var sectionVisibility = {};
    var currentActiveId = null;
    var sidebarMetrics = {
      width: 0,
      left: 0,
      top: 32,
      naturalTop: 0,
    };

    function getScrollOffset() {
      if (desktopMq.matches) return 120;
      return ($sidebar.outerHeight() || 0) + 16;
    }

    function resetSidebarPosition() {
      $sidebar.removeClass('is-fixed is-at-bottom');
      $panel.css({ width: '', left: '', right: '' });
      $sidebar.css('min-height', '');
    }

    function measureSidebar() {
      resetSidebarPosition();
      if (!$sidebar.length || !$main.length) return;

      if (desktopMq.matches) {
        sidebarMetrics.top = readStickyTop();
        sidebarMetrics.width = $sidebar.outerWidth();
        sidebarMetrics.left = $sidebar.offset().left;
        $sidebar.css('min-height', '');
        sidebarMetrics.naturalTop = 0;
        return;
      }

      sidebarMetrics.top = 0;
      sidebarMetrics.width = $(window).width();
      sidebarMetrics.left = 0;
      sidebarMetrics.naturalTop = $sidebar.offset().top;
    }

    function updateSidebarPosition() {
      if (!$main.length || !$sidebar.length || !$panel.length) return;

      var scrollTop = $(window).scrollTop();
      var mainTop = $main.offset().top;
      var mainHeight = $main.outerHeight();
      var panelHeight = $panel.outerHeight();
      var top = desktopMq.matches ? readStickyTop() : sidebarMetrics.top;
      var startFix = desktopMq.matches
        ? mainTop - top
        : sidebarMetrics.naturalTop - top;
      var endFix = mainTop + mainHeight - panelHeight - top;

      if (scrollTop <= startFix) {
        resetSidebarPosition();
        if (!desktopMq.matches) {
          sidebarMetrics.naturalTop = $sidebar.offset().top;
        }
        return;
      }

      if (scrollTop >= endFix) {
        if (desktopMq.matches) {
          $sidebar.removeClass('is-fixed').addClass('is-at-bottom');
          $panel.css({
            width: sidebarMetrics.width,
            left: '',
            right: '',
          });
          $sidebar.css('min-height', $content.outerHeight());
        } else {
          $sidebar.addClass('is-fixed').removeClass('is-at-bottom');
          $panel.css({
            width: '100%',
            left: 0,
            right: 0,
          });
          $sidebar.css('min-height', panelHeight);
        }
        return;
      }

      $sidebar.addClass('is-fixed').removeClass('is-at-bottom');
      $panel.css({
        width: desktopMq.matches ? sidebarMetrics.width : '100%',
        left: desktopMq.matches ? sidebarMetrics.left : 0,
        right: desktopMq.matches ? '' : 0,
      });
      $sidebar.css('min-height', panelHeight);
    }

    function refreshSidebarLayout() {
      measureSidebar();
      updateSidebarPosition();
    }

    function scrollActiveNavIntoView(id) {
      if (desktopMq.matches || !$navList.length) return;

      var $active = $navLinks.filter('[href="#' + id + '"]');
      if (!$active.length) return;

      var listEl = $navList.get(0);
      var linkEl = $active.get(0);
      var linkLeft = linkEl.offsetLeft;
      var linkWidth = linkEl.offsetWidth;
      var listScroll = listEl.scrollLeft;
      var listWidth = listEl.clientWidth;
      var edgePad = 12;

      if (linkLeft < listScroll + edgePad) {
        listEl.scrollTo({ left: Math.max(0, linkLeft - edgePad), behavior: 'smooth' });
        return;
      }

      if (linkLeft + linkWidth > listScroll + listWidth - edgePad) {
        listEl.scrollTo({
          left: linkLeft + linkWidth - listWidth + edgePad,
          behavior: 'smooth',
        });
      }
    }

    function setActiveSection(id) {
      if (!id || id === currentActiveId) return;
      currentActiveId = id;
      $navLinks.removeClass('is-active');
      $navLinks.filter('[href="#' + id + '"]').addClass('is-active');
      scrollActiveNavIntoView(id);
    }

    function resolveActiveSectionFromScroll() {
      if (!$sections.length) return;

      var offset = getScrollOffset();
      var scrollPos = $(window).scrollTop() + offset + 8;
      var activeId = $sections.first().attr('id');

      $sections.each(function () {
        if ($(this).offset().top <= scrollPos) {
          activeId = this.id;
        }
      });

      setActiveSection(activeId);
    }

    $navLinks.on('click', function (event) {
      event.preventDefault();
      var targetId = $(this).attr('href');
      var $target = $(targetId);

      if (!$target.length) return;

      currentActiveId = null;
      setActiveSection(targetId.replace('#', ''));

      $('html, body').animate(
        {
          scrollTop: $target.offset().top - getScrollOffset(),
        },
        420
      );
    });

    if ('IntersectionObserver' in window && $sections.length) {
      observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            sectionVisibility[entry.target.id] = entry.isIntersecting
              ? entry.intersectionRatio
              : 0;
          });

          var bestId = null;
          var bestRatio = 0;

          Object.keys(sectionVisibility).forEach(function (id) {
            if (sectionVisibility[id] > bestRatio) {
              bestRatio = sectionVisibility[id];
              bestId = id;
            }
          });

          if (bestId && bestRatio > 0 && desktopMq.matches) {
            setActiveSection(bestId);
          }
        },
        {
          root: null,
          rootMargin: desktopMq.matches ? '-25% 0px -55% 0px' : '-12% 0px -62% 0px',
          threshold: [0, 0.15, 0.35, 0.55, 0.75, 1],
        }
      );

      $sections.each(function () {
        observer.observe(this);
      });
    }

    refreshSidebarLayout();
    resolveActiveSectionFromScroll();

    /* Re-measure after images load (sidebar card icon, etc.) */
    $page.find('img').on('load.mediaPolicySidebar', function () {
      refreshSidebarLayout();
    });

    $(window).on('scroll.mediaPolicySidebar', function () {
      updateSidebarPosition();
      if (!desktopMq.matches) {
        resolveActiveSectionFromScroll();
      }
    });
    $(window).on('resize.mediaPolicySidebar load.mediaPolicySidebar', function () {
      refreshSidebarLayout();
      resolveActiveSectionFromScroll();
    });

    if (typeof desktopMq.addEventListener === 'function') {
      desktopMq.addEventListener('change', function () {
        refreshSidebarLayout();
        resolveActiveSectionFromScroll();
      });
    } else if (typeof desktopMq.addListener === 'function') {
      desktopMq.addListener(function () {
        refreshSidebarLayout();
        resolveActiveSectionFromScroll();
      });
    }
  }

  function initApplyFormSidebar() {
    var $main = $('.apply-form').first();
    var $sidebar = $main.find('.apply-form__sidebar').first();
    if (!$main.length || !$sidebar.length) return;

    if (!$sidebar.children('.apply-form__sidebar-sticky').length) {
      $sidebar.wrapInner('<div class="apply-form__sidebar-sticky"></div>');
    }

    var $panel = $sidebar.find('.apply-form__sidebar-sticky').first();
    var $content = $main.find('.apply-form__main').first();
    var desktopMq = window.matchMedia('(min-width: 1025px)');
    var sidebarMetrics = {
      width: 0,
      left: 0,
      top: 32,
    };

    function resetSidebarPosition() {
      $sidebar.removeClass('is-fixed is-at-bottom');
      $panel.css({ width: '', left: '', right: '' });
      $sidebar.css('min-height', '');
    }

    function measureSidebar() {
      resetSidebarPosition();
      if (!desktopMq.matches) return;

      sidebarMetrics.top = readStickyTop();
      sidebarMetrics.width = $sidebar.outerWidth();
      sidebarMetrics.left = $sidebar.offset().left;
    }

    function updateSidebarPosition() {
      if (!$panel.length) return;

      if (!desktopMq.matches) {
        resetSidebarPosition();
        return;
      }

      var scrollTop = $(window).scrollTop();
      var mainTop = $main.offset().top;
      var mainHeight = $main.outerHeight();
      var panelHeight = $panel.outerHeight();
      var top = readStickyTop();
      var startFix = mainTop - top;
      var endFix = mainTop + mainHeight - panelHeight - top;

      if (scrollTop <= startFix) {
        resetSidebarPosition();
        return;
      }

      if (scrollTop >= endFix) {
        $sidebar.removeClass('is-fixed').addClass('is-at-bottom');
        $panel.css({
          width: sidebarMetrics.width,
          left: '',
          right: '',
        });
        $sidebar.css('min-height', $content.outerHeight());
        return;
      }

      $sidebar.addClass('is-fixed').removeClass('is-at-bottom');
      $panel.css({
        width: sidebarMetrics.width,
        left: sidebarMetrics.left,
        right: '',
      });
      $sidebar.css('min-height', panelHeight);
    }

    function refreshSidebarLayout() {
      measureSidebar();
      updateSidebarPosition();
    }

    refreshSidebarLayout();

    $main.find('img').on('load.applyFormSidebar', function () {
      refreshSidebarLayout();
    });

    $(window).on('scroll.applyFormSidebar', updateSidebarPosition);
    $(window).on('resize.applyFormSidebar load.applyFormSidebar', refreshSidebarLayout);

    if (typeof desktopMq.addEventListener === 'function') {
      desktopMq.addEventListener('change', refreshSidebarLayout);
    } else if (typeof desktopMq.addListener === 'function') {
      desktopMq.addListener(refreshSidebarLayout);
    }
  }

  function initApplySelects() {
    $('[data-apply-select]').each(function () {
      var $wrap = $(this);
      if ($wrap.data('applySelectInit')) return;

      var $native = $wrap.find('.apply-select__native');
      var $trigger = $wrap.find('.apply-select__trigger');
      var $value = $wrap.find('.apply-select__value');
      var $menu = $wrap.find('.apply-select__menu');
      var $options = $wrap.find('.apply-select__option');
      var placeholder = $native.find('option:disabled').first().text() || 'Select';

      if (!$options.length) {
        $menu.empty();
        $native.find('option').each(function () {
          var $opt = $(this);
          var val = $opt.attr('value');

          if ($opt.is(':disabled') || val === '') return;

          $('<li><button type="button" class="apply-select__option" role="option"></button></li>')
            .find('button')
            .attr('data-value', val)
            .text($.trim($opt.text()))
            .end()
            .appendTo($menu);
        });
        $options = $wrap.find('.apply-select__option');
      }

      function closeMenu() {
        $wrap.removeClass('is-open');
        $trigger.attr('aria-expanded', 'false');
        $menu.prop('hidden', true);
      }

      function openMenu() {
        $wrap.addClass('is-open');
        $trigger.attr('aria-expanded', 'true');
        $menu.prop('hidden', false);
      }

      function setValue(nextValue, label) {
        $native.val(nextValue).trigger('change');
        $value.text(label).toggleClass('is-placeholder', !nextValue);
        $options.removeClass('is-selected').filter('[data-value="' + nextValue + '"]').addClass('is-selected');
        $options.attr('aria-selected', 'false');
        $options.filter('[data-value="' + nextValue + '"]').attr('aria-selected', 'true');
      }

      $trigger.on('click', function () {
        if ($wrap.hasClass('is-open')) {
          closeMenu();
        } else {
          openMenu();
        }
      });

      $options.on('click', function () {
        var $option = $(this);
        setValue($option.data('value'), $.trim($option.text()));
        closeMenu();
        $trigger.trigger('focus');
      });

      $(document).on('click.applySelect', function (event) {
        if (!$wrap.is(event.target) && $wrap.has(event.target).length === 0) {
          closeMenu();
        }
      });

      $(document).on('keydown.applySelect', function (event) {
        if (event.key === 'Escape') {
          closeMenu();
        }
      });

      $native.on('invalid', function () {
        $trigger.trigger('focus');
      });

      if (!$native.val()) {
        $value.text(placeholder).addClass('is-placeholder');
      }

      $wrap.data('applySelectInit', true);
    });
  }

  function applyScrollRevealTargets() {
    var animatePages = [
      'index',
      'about',
      'explore',
      'creative-makers',
      'young-ideas-lab',
      'create-for-cause',
      'community-adventures',
      'for-parents',
      'our-vision',
      'accessibility',
      'financial-transparency',
      'terms',
      'privacy-policy',
    ];
    var current = pageSlug(window.location.pathname);

    if (animatePages.indexOf(current) === -1) return;

    $('#main-content > section:not(.page-hero):not(.media-policy-main):not(.apply-form)').each(function (index) {
      var $section = $(this);
      if ($section.hasClass('scroll-rise')) return;
      $section.addClass('scroll-rise');
      if (index % 2 === 1) {
        $section.addClass('scroll-rise--delay-1');
      }
    });
  }

  function initScrollReveal() {
    applyScrollRevealTargets();
    var $items = $('.scroll-rise');
    if (!$items.length) return;

    if (!('IntersectionObserver' in window)) {
      $items.addClass('is-in-view');
      return;
    }

    var prefersReduced =
      window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReduced) {
      $items.addClass('is-in-view');
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-in-view');
          observer.unobserve(entry.target);
        });
      },
      {
        root: null,
        rootMargin: '0px 0px -8% 0px',
        threshold: 0.08,
      }
    );

    $items.each(function () {
      observer.observe(this);
    });
  }

  function initMediaConsentDateFields() {
    var $page = $('.media-consent-page');
    if (!$page.length) return;

    var today = new Date().toISOString().split('T')[0];
    var $dob = $page.find('input[name="child_dob"]');
    if ($dob.length) {
      $dob.attr('max', today);
    }

    $page.on('click', '.media-consent-field-box__btn', function () {
      var input = this.closest('.media-consent-field-box').querySelector('input[type="date"]');
      if (!input) return;

      if (typeof input.showPicker === 'function') {
        try {
          input.showPicker();
          return;
        } catch (error) {
          /* Some browsers throw if not triggered from a direct user gesture chain */
        }
      }

      input.focus();
      input.click();
    });
  }

  function initHomeMobileCarousels() {
    if (!document.body.classList.contains('home-page')) {
      return;
    }

    var media = window.matchMedia('(max-width: 767px)');
    var instances = [];

    var configs = [
      { track: '.home-pillars__row', item: '.home-pillar' },
      { track: '.home-different__grid', item: '.home-different__item' },
      { track: '.home-reality__steps', item: '.home-reality-step' },
      { track: '.home-explore__grid', item: '.experience-card' },
    ];

    function closestIndex(track, items) {
      var center = track.scrollLeft + track.clientWidth / 2;
      var best = 0;
      var bestDist = Infinity;

      items.forEach(function (item, index) {
        var itemCenter = item.offsetLeft + item.offsetWidth / 2;
        var dist = Math.abs(itemCenter - center);
        if (dist < bestDist) {
          bestDist = dist;
          best = index;
        }
      });

      return best;
    }

    function setActiveDot(dots, activeIndex) {
      dots.forEach(function (dot, index) {
        var isActive = index === activeIndex;
        dot.classList.toggle('is-active', isActive);
        dot.setAttribute('aria-current', isActive ? 'true' : 'false');
      });
    }

    function bindCarousel(track, itemSelector) {
      var items = Array.prototype.slice.call(track.querySelectorAll(itemSelector));
      if (items.length < 2) {
        return null;
      }

      var existing = track.parentNode.querySelector(':scope > .bdc-carousel-dots');
      if (existing) {
        existing.remove();
      }

      var dotsWrap = document.createElement('div');
      dotsWrap.className = 'bdc-carousel-dots';
      dotsWrap.setAttribute('role', 'tablist');
      dotsWrap.setAttribute('aria-label', 'Carousel pagination');

      var dots = items.map(function (item, index) {
        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'bdc-carousel-dots__dot';
        button.setAttribute('aria-label', 'Go to slide ' + (index + 1));
        button.addEventListener('click', function () {
          item.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        });
        dotsWrap.appendChild(button);
        return button;
      });

      track.insertAdjacentElement('afterend', dotsWrap);
      setActiveDot(dots, closestIndex(track, items));

      var ticking = false;
      function onScroll() {
        if (ticking) {
          return;
        }
        ticking = true;
        window.requestAnimationFrame(function () {
          setActiveDot(dots, closestIndex(track, items));
          ticking = false;
        });
      }

      track.addEventListener('scroll', onScroll, { passive: true });

      return {
        destroy: function () {
          track.removeEventListener('scroll', onScroll);
          if (dotsWrap.parentNode) {
            dotsWrap.parentNode.removeChild(dotsWrap);
          }
        },
      };
    }

    function teardown() {
      instances.forEach(function (instance) {
        if (instance && typeof instance.destroy === 'function') {
          instance.destroy();
        }
      });
      instances = [];
    }

    function setup() {
      teardown();
      if (!media.matches) {
        return;
      }

      configs.forEach(function (config) {
        document.querySelectorAll(config.track).forEach(function (track) {
          var instance = bindCarousel(track, config.item);
          if (instance) {
            instances.push(instance);
          }
        });
      });
    }

    setup();

    if (typeof media.addEventListener === 'function') {
      media.addEventListener('change', setup);
    } else if (typeof media.addListener === 'function') {
      media.addListener(setup);
    }
  }

  function init() {
    initMobileMenu();
    initNavActiveState();
    initApplySelects();
    initFaqPage();
    initMediaPolicyPage();
    initApplyFormSidebar();
    initMediaConsentDateFields();
    initLazyImages();
    initScrollReveal();
    initHomeMobileCarousels();
  }

  function initLazyImages() {
    if (!window.BrightDreamersLazyImages) {
      return;
    }

    var main = document.getElementById('main-content');
    if (main && main.querySelector('img.lazy-img[data-src]')) {
      window.BrightDreamersLazyImages.init(main);
    }
  }

  $(function () {
    init();
  });
})(jQuery);
