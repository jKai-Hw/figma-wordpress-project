/**
 * メインJavaScriptファイル（テンプレート）
 *
 * 各モジュールを読み込んで初期化します。
 * クラシックテーマ環境のため、各モジュールは window オブジェクト経由で関数を公開しています。
 *
 * @package Figma_Theme
 */

(function ($) {
  'use strict';

  // ==========================================================================
  // DOM Ready
  // ==========================================================================
  $(function () {
    init();
  });

  // ==========================================================================
  // 初期化
  // ==========================================================================
  function init() {
    // 必須機能
    if (typeof window.setupMobileMenu === 'function') {
      window.setupMobileMenu();
    }
    if (typeof window.setupSmoothScroll === 'function') {
      window.setupSmoothScroll();
    }

    // オプション機能（有効化する場合はコメントアウト解除）
    // if (typeof window.setupAccordion === 'function') window.setupAccordion();
    // if (typeof window.setupModal === 'function') window.setupModal();

    console.log('Main script loaded.');
  }
})(jQuery);
