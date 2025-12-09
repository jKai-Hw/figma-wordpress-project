/**
 * スムーススクロール
 */
(function ($) {
  'use strict';

  function setupSmoothScroll() {
    $('a[href^="#"]').on('click', function (e) {
      var hash = this.hash;
      if (!hash) {
        return;
      }

      var $target = $(hash);
      if ($target.length) {
        e.preventDefault();
        var headerHeight = $('.site-header').outerHeight() || 0;

        $('html, body').animate(
          {
            scrollTop: $target.offset().top - headerHeight,
          },
          500
        );

        // フォーカスを移動（アクセシビリティ）
        $target.attr('tabindex', '-1').focus();
      }
    });
  }

  // グローバル公開
  window.setupSmoothScroll = setupSmoothScroll;
})(jQuery);
