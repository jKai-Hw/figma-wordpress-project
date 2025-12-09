/**
 * アコーディオン
 * 必要に応じて有効化してください
 */
(function ($) {
  'use strict';

  function setupAccordion() {
    var $trigger = $('.js-accordion-trigger');

    if (!$trigger.length) {
      return;
    }

    $trigger.on('click', function (e) {
      e.preventDefault();
      var $this = $(this);
      var $content = $this.next('.js-accordion-content');
      var isOpen = $this.hasClass('is-open');

      $this.toggleClass('is-open');
      $content.slideToggle(300);
      $this.attr('aria-expanded', !isOpen);
    });
  }

  // グローバル公開
  window.setupAccordion = setupAccordion;
})(jQuery);
