/**
 * モバイルメニュー（ハンバーガーメニュー）
 */
(function ($) {
  'use strict';

  function setupMobileMenu() {
    var $hamburger = $('.site-header__hamburger');
    var $nav = $('.site-header__nav');
    var $body = $('body');
    var $menuLinks = $('.site-header__nav a');

    // 存在チェック
    if (!$hamburger.length) {
      return;
    }

    // ハンバーガーボタンクリック
    $hamburger.on('click', function () {
      var isOpen = $nav.hasClass('is-open');

      $nav.toggleClass('is-open');
      $hamburger.toggleClass('is-open');
      $body.toggleClass('is-menu-open');

      // アクセシビリティ: aria-expanded を更新
      $(this).attr('aria-expanded', !isOpen);
      $(this).attr('aria-label', isOpen ? 'メニューを開く' : 'メニューを閉じる');
    });

    // メニュー内リンクをクリックしたら閉じる
    $menuLinks.on('click', function () {
      $nav.removeClass('is-open');
      $hamburger.removeClass('is-open');
      $body.removeClass('is-menu-open');
      $hamburger.attr('aria-expanded', 'false');
      $hamburger.attr('aria-label', 'メニューを開く');
    });

    // ESCキーで閉じる
    $(document).on('keydown', function (e) {
      if (e.key === 'Escape' && $nav.hasClass('is-open')) {
        $nav.removeClass('is-open');
        $hamburger.removeClass('is-open');
        $body.removeClass('is-menu-open');
        $hamburger.attr('aria-expanded', 'false');
        $hamburger.focus();
      }
    });
  }

  // グローバル公開（main.jsから呼べるように）
  window.setupMobileMenu = setupMobileMenu;
})(jQuery);
