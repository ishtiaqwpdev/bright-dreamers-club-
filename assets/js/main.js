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

    function setMenuOpen(nextOpen) {
      $menu.attr('aria-hidden', nextOpen ? 'false' : 'true');
      $toggle.attr('aria-expanded', nextOpen ? 'true' : 'false');
      $toggle.attr('aria-label', nextOpen ? 'Close menu' : 'Open menu');
      $('body').toggleClass('menu-open', nextOpen);

      if (nextOpen) {
        $menu.removeAttr('inert');
        $menu.find('[data-menu-close]').first().trigger('focus');
      } else {
        $menu.attr('inert', '');
        $toggle.trigger('focus');
      }
    }

    $toggle.on('click', function () {
      setMenuOpen($menu.attr('aria-hidden') !== 'false');
    });

    $menu.on('click', '[data-menu-close]', function () {
      setMenuOpen(false);
    });

    $menu.on('click', '[data-mobile-accordion]', function () {
      var $button = $(this);
      var $item = $button.closest('.mobile-nav__item');
      var $panel = $item.find('.mobile-nav__sublist').first();
      var nextOpen = !$item.hasClass('is-open');

      $item.toggleClass('is-open', nextOpen);
      $button.attr('aria-expanded', nextOpen ? 'true' : 'false');

      if (nextOpen) {
        $panel.removeAttr('inert');
      } else {
        $panel.attr('inert', '');
      }
    });

    $(document).on('keydown', function (event) {
      if (event.key === 'Escape' && $menu.attr('aria-hidden') === 'false') {
        setMenuOpen(false);
      }
    });

    $(window).on('resize', function () {
      if (window.innerWidth >= 1024 && $menu.attr('aria-hidden') === 'false') {
        setMenuOpen(false);
      }
    });
  }

  function normalizePageSlug(slug) {
    var aliases = {
      'apply-to-become': 'apply-to-join',
      'photo-media-consent': 'photo-media-consent-form',
      'parents': 'for-parents',
      'for_parents': 'for-parents',
      'contact-us': 'contact'
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
    var $navLinks = $('.site-nav a[href], .mobile-nav__list a[href]');

    $navLinks.removeClass('is-active').removeAttr('aria-current');
    $('.mobile-nav__subitem').removeClass('is-active');

    $navLinks.each(function () {
      var $link = $(this);
      var href = $link.attr('href');

      if (linkSlug(href) === current) {
        $link.addClass('is-active').attr('aria-current', 'page');
        $link.closest('.mobile-nav__item').addClass('is-active');
        $link.closest('.mobile-nav__subitem').addClass('is-active');
      }
    });

    if (exploreSubpages.indexOf(current) !== -1) {
      $navLinks.filter(function () {
        return linkSlug($(this).attr('href')) === 'explore';
      }).addClass('is-active');

      $('.mobile-nav__item--accordion').each(function () {
        var $item = $(this);
        if ($item.find('.mobile-nav__subitem.is-active').length) {
          $item.addClass('is-open');
          $item.find('[data-mobile-accordion]').attr('aria-expanded', 'true');
        }
      });
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

  function initMobileCarousels() {
    var phoneMedia = window.matchMedia('(max-width: 767px)');
    var tabletMedia = window.matchMedia('(max-width: 991px)');
    var twoColPeekMedia = window.matchMedia('(max-width: 375px)');
    var instances = [];
    var phasePages = [
      'index',
      'about',
      'explore',
      'creative-makers',
      'young-ideas-lab',
      'create-for-cause',
      'community-adventures',
      'for-parents',
      'our-vision',
      'get-involved',
      'partners',
      'contact',
      'accessibility',
      'financial-transparency',
      'faq',
      'privacy-policy',
      'terms',
      'photo-media-policy',
      'photo-media-consent-form',
      'newsletter-signup',
      'donation-interest',
      'apply-to-join',
      'volunteer-application',
      'partner-inquiry-form',
    ];

    var knownConfigs = [
      { track: '.home-pillars__row', item: '.home-pillar', mode: 'full' },
      { track: '.home-different__grid', item: '.home-different__item', mode: 'peek' },
      { track: '.home-reality__steps', item: '.home-reality-step', mode: 'peek' },
      { track: '.home-explore__grid', item: '.experience-card', mode: 'full' },
      { track: '.we-believe__slider', item: '.believe-card', mode: 'peek' },
      { track: '.role-icons', item: '.role-icons__item', mode: 'peek' },
      { track: '.approach-steps', item: '.approach-step', mode: 'peek' },
      { track: '.explore-ways__grid', item: '.explore-way', mode: 'full' },
      { track: '.explore-skills__grid', item: '.explore-skill', mode: 'peek' },
      { track: '.explore-grow__track', item: '.explore-grow-stage', mode: 'full' },
      { track: '.explore-impact__track', item: '.explore-impact-card, .explore-impact-quote', mode: 'full' },
      { track: '.creative-makers-explore__grid', item: '.creative-makers-activity', mode: 'peek' },
      { track: '.for-parents-expect__grid', item: '.for-parents-expect-card', mode: 'full' },
      { track: '.for-parents-info-card__features', item: '.for-parents-info-feature', mode: 'peek' },
      { track: '.vision-pillars__grid', item: '.vision-pillar-card', mode: 'peek' },
      { track: '.vision-journey-steps', item: '.vision-journey-step', mode: 'peek' },
      { track: '.vision-partner__icons', item: '.vision-partner__icon-item', mode: 'peek' },
      { track: '.get-involved-ways__grid', item: '.get-involved-ways-card', mode: 'full' },
      { track: '.partners-ways__grid', item: '.partners-ways-card', mode: 'peek' },
      { track: '.partners-impact__grid', item: '.partners-impact-card', mode: 'full' },
      { track: '.partners-founding__grid', item: '.partners-founding-card', mode: 'full' },
      { track: '.accessibility-provide-grid', item: '.accessibility-provide-card', mode: 'peek' },
      { track: '.financial-support-grid', item: '.financial-support-card', mode: 'peek' },
      { track: '.financial-promise-grid', item: '.financial-promise-item', mode: 'peek' },
      { track: '.newsletter-role-grid', item: '.newsletter-role-card', mode: 'peek' },
      { track: '.media-consent-usage-grid', item: '.media-consent-usage-card', mode: 'peek' },
      { track: '.donation-support-grid', item: '.donation-support-card', mode: 'peek' },
    ];

    var skipTrackSelector = [
      '.media-policy-nav__list',
      '.home-spotlight__grid',
      '.vision-moments__gallery',
      '.vision-together__grid',
      '.vision-roadmap__list',
      '.vision-hero-checklist',
      '.creative-makers-parents__tablist',
      '.creative-makers-parents__accordion',
      '.creative-makers-parents__panels',
      '.creative-makers-info__grid',
      '.for-parents-fit__grid',
      '.for-parents-info-steps',
      '.for-parents-cta',
      '.get-involved-impact__inner',
      '.get-involved-timeline',
      '.partners-opportunity-cta__card',
      '.contact-form',
      '.contact-cta',
      '.accessibility-panels',
      '.accessibility-commitment',
      '.financial-commitment',
      '.financial-questions',
      '.faq-topic-list',
      '.faq-accordion',
      '.faq-search',
      '.faq-contact-cta',
      '.apply-form',
      '.volunteer-interest-grid',
      '.terms-sections-grid',
      '.terms-commitment',
      '.newsletter-receive-list',
      '.media-policy-content',
      '.about-panels__grid',
      '.compare-different__bar',
      '.footer-acc',
    ].join(',');

    function isPhasePage() {
      var body = document.body;
      if (body) {
        if (
          body.classList.contains('home-page') ||
          body.classList.contains('about-page') ||
          body.classList.contains('explore-page') ||
          body.classList.contains('creative-makers-page') ||
          body.classList.contains('young-ideas-lab-page') ||
          body.classList.contains('create-for-cause-page') ||
          body.classList.contains('community-adventures-page') ||
          body.classList.contains('for-parents-page') ||
          body.classList.contains('our-vision-page') ||
          body.classList.contains('get-involved-page') ||
          body.classList.contains('partners-page') ||
          body.classList.contains('contact-page') ||
          body.classList.contains('accessibility-page') ||
          body.classList.contains('financial-transparency-page') ||
          body.classList.contains('faq-page') ||
          body.classList.contains('privacy-policy-page') ||
          body.classList.contains('terms-page') ||
          body.classList.contains('media-policy-page') ||
          body.classList.contains('media-consent-page') ||
          body.classList.contains('newsletter-signup-page') ||
          body.classList.contains('donation-interest-page') ||
          body.classList.contains('apply-to-become-page')
        ) {
          return true;
        }
      }
      if (document.querySelector('.for-parents-hero, .for-parents-expect, .get-involved-ways, .partners-founding, .contact-hero, .accessibility-provide-grid, .financial-support-grid, .faq-hero, .newsletter-role-grid, .donation-support-grid, .media-consent-usage-grid')) {
        return true;
      }
      return phasePages.indexOf(pageSlug(window.location.pathname)) !== -1;
    }

    function isSkipped(track) {
      if (!track) {
        return true;
      }
      if (skipTrackSelector && (track.matches(skipTrackSelector) || track.closest(skipTrackSelector))) {
        return true;
      }
      var className = String(track.className || '');
      return (
        className.indexOf('faq') !== -1 ||
        className.indexOf('accordion') !== -1 ||
        className.indexOf('tablist') !== -1 ||
        className.indexOf('creative-makers-parents') !== -1
      );
    }

    function isInset(track) {
      return !!(
        track.matches(
          '.role-icons, .approach-steps, .vision-partner__icons, .partners-impact__grid, .for-parents-expect__grid, .for-parents-info-card__features, .financial-promise-grid, .newsletter-role-grid, .media-consent-usage-grid, .donation-support-grid'
        ) ||
        track.closest(
          '.panel-card, .partners-impact__box, .for-parents-info-card, .newsletter-form-wrap, .apply-form__main, .donation-form-card, .media-consent-card, .media-policy-content'
        )
      );
    }

    function configFor(track) {
      return knownConfigs.find(function (config) {
        return track.matches(config.track);
      }) || null;
    }

    function modeFor(track) {
      if (!isPhasePage()) {
        return 'full';
      }
      var match = configFor(track);
      return match && match.mode === 'peek' ? 'peek' : 'full';
    }

    function peekPerView() {
      return twoColPeekMedia.matches ? 2 : 3;
    }

    function itemSelectorFor(track) {
      var match = configFor(track);
      return match ? match.item : null;
    }

    function getItems(track) {
      var selector = itemSelectorFor(track);
      var items;

      if (selector) {
        items = Array.prototype.slice.call(track.querySelectorAll(selector));
      } else {
        items = Array.prototype.filter.call(track.children, function (child) {
          return child.nodeType === 1;
        });
      }

      return items.filter(function (item) {
        var className = String(item.className || '');
        return className.indexOf('arrow') === -1 && className.indexOf('deco') === -1;
      });
    }

    function collectTracks() {
      var root = document.getElementById('main-content') || document.body;
      var tracks = [];
      var seen = [];

      function addTrack(track) {
        if (!track || seen.indexOf(track) !== -1 || isSkipped(track)) {
          return;
        }
        if (getItems(track).length < 2) {
          return;
        }
        seen.push(track);
        tracks.push(track);
      }

      knownConfigs.forEach(function (config) {
        root.querySelectorAll(config.track).forEach(addTrack);
      });

      root.querySelectorAll('div, ul, ol').forEach(function (el) {
        if (seen.indexOf(el) !== -1 || isSkipped(el)) {
          return;
        }
        var style = window.getComputedStyle(el);
        var overflowX = style.overflowX;
        var snap = style.scrollSnapType || '';
        if ((overflowX !== 'auto' && overflowX !== 'scroll') || snap === 'none' || snap.indexOf('x') === -1) {
          return;
        }
        addTrack(el);
      });

      return tracks;
    }

    function closestItemIndex(track, items) {
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

    function closestPageIndex(track, items, perView) {
      var pageCount = Math.max(1, Math.ceil(items.length / perView));
      var best = 0;
      var bestDist = Infinity;

      for (var page = 0; page < pageCount; page += 1) {
        var item = items[page * perView];
        if (!item) {
          continue;
        }
        var dist = Math.abs(item.offsetLeft - track.scrollLeft);
        if (dist < bestDist) {
          bestDist = dist;
          best = page;
        }
      }

      return best;
    }

    function setActiveDot(dots, activeIndex) {
      dots.forEach(function (dot, index) {
        var isActive = index === activeIndex;
        dot.classList.toggle('is-active', isActive);
        dot.setAttribute('aria-current', isActive ? 'true' : 'false');
      });
    }

    function bindCarousel(track, mode) {
      var items = getItems(track);
      if (items.length < 2) {
        return null;
      }

      var perView = mode === 'peek' ? peekPerView() : 1;
      var pageCount = Math.max(1, Math.ceil(items.length / perView));
      var isSolo =
        mode === 'full' &&
        (track.classList.contains('for-parents-expect__grid') ||
          track.classList.contains('get-involved-ways__grid') ||
          track.classList.contains('partners-founding__grid'));
      var snapInline = isSolo || mode === 'peek' ? 'start' : 'center';

      track.classList.add('bdc-mobile-carousel');
      track.classList.toggle('bdc-mobile-carousel--full', mode === 'full');
      track.classList.toggle('bdc-mobile-carousel--peek', mode === 'peek');
      track.classList.toggle('bdc-mobile-carousel--peek-2', mode === 'peek' && perView === 2);
      track.classList.toggle('bdc-mobile-carousel--inset', isInset(track));
      track.classList.toggle('bdc-mobile-carousel--solo', isSolo);
      if (track.parentNode && track.parentNode.classList) {
        track.parentNode.classList.add('bdc-mobile-carousel-parent');
      }
      var host = track.closest('.site-container');
      if (host) {
        host.classList.add('bdc-mobile-carousel-host');
      }
      items.forEach(function (item) {
        item.classList.add('bdc-mobile-carousel__item');
      });

      var existing = track.parentNode.querySelector(':scope > .bdc-carousel-dots');
      if (existing) {
        existing.remove();
      }

      var dotsWrap = document.createElement('div');
      dotsWrap.className = 'bdc-carousel-dots';
      dotsWrap.setAttribute('role', 'tablist');
      dotsWrap.setAttribute('aria-label', 'Carousel pagination');

      var dots = [];
      for (var page = 0; page < pageCount; page += 1) {
        (function (pageIndex) {
          var target = items[pageIndex * perView];
          var button = document.createElement('button');
          button.type = 'button';
          button.className = 'bdc-carousel-dots__dot';
          button.setAttribute('aria-label', 'Go to slide ' + (pageIndex + 1));
          button.addEventListener('click', function () {
            if (!target) {
              return;
            }
            target.scrollIntoView({ behavior: 'smooth', inline: snapInline, block: 'nearest' });
          });
          dotsWrap.appendChild(button);
          dots.push(button);
        })(page);
      }

      track.insertAdjacentElement('afterend', dotsWrap);
      setActiveDot(
        dots,
        mode === 'peek' ? closestPageIndex(track, items, perView) : closestItemIndex(track, items)
      );

      var ticking = false;
      function onScroll() {
        if (ticking) {
          return;
        }
        ticking = true;
        window.requestAnimationFrame(function () {
          setActiveDot(
            dots,
            mode === 'peek' ? closestPageIndex(track, items, perView) : closestItemIndex(track, items)
          );
          ticking = false;
        });
      }

      track.addEventListener('scroll', onScroll, { passive: true });

      return {
        destroy: function () {
          track.removeEventListener('scroll', onScroll);
          track.classList.remove(
            'bdc-mobile-carousel',
            'bdc-mobile-carousel--full',
            'bdc-mobile-carousel--peek',
            'bdc-mobile-carousel--peek-2',
            'bdc-mobile-carousel--inset',
            'bdc-mobile-carousel--solo'
          );
          if (track.parentNode && track.parentNode.classList) {
            track.parentNode.classList.remove('bdc-mobile-carousel-parent');
          }
          var hostEl = track.closest('.site-container');
          if (hostEl && !hostEl.querySelector('.bdc-mobile-carousel')) {
            hostEl.classList.remove('bdc-mobile-carousel-host');
          }
          items.forEach(function (item) {
            item.classList.remove('bdc-mobile-carousel__item');
          });
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
      var phaseOne = isPhasePage();
      if (phaseOne ? !tabletMedia.matches : !phoneMedia.matches) {
        return;
      }

      collectTracks().forEach(function (track) {
        var instance = bindCarousel(track, modeFor(track));
        if (instance) {
          instances.push(instance);
        }
      });
    }

    setup();

    [phoneMedia, tabletMedia, twoColPeekMedia].forEach(function (media) {
      if (typeof media.addEventListener === 'function') {
        media.addEventListener('change', setup);
      } else if (typeof media.addListener === 'function') {
        media.addListener(setup);
      }
    });
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
    initMobileCarousels();
    initFooterAccordion();
  }

  function initFooterAccordion() {
    var $root = $('[data-footer-acc]');
    if (!$root.length) return;

    $root.on('click', '[data-footer-accordion]', function () {
      var $button = $(this);
      var $item = $button.closest('.footer-acc__item');
      var $panel = $item.find('.footer-acc__panel').first();
      var nextOpen = !$item.hasClass('is-open');

      $item.toggleClass('is-open', nextOpen);
      $button.attr('aria-expanded', nextOpen ? 'true' : 'false');

      if (nextOpen) {
        $panel.removeAttr('inert');
      } else {
        $panel.attr('inert', '');
      }
    });
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
