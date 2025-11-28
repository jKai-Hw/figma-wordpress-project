/**
 * メインJavaScriptファイル（テンプレート）
 * 
 * jQuery を使用したカスタムスクリプト
 * 実際の案件では必要な機能を追加してください
 */

(function($) {
  'use strict';

  // ==========================================================================
  // DOM Ready
  // ==========================================================================
  $(function() {
    // 初期化
    init();
  });

  // ==========================================================================
  // 初期化
  // ==========================================================================
  function init() {
    // 各機能の初期化をここに追加
    // setupMobileMenu();
    // setupSmoothScroll();
    // setupAccordion();
    // setupModal();
    
    console.log('Theme scripts initialized');
  }

  // ==========================================================================
  // モバイルメニュー（サンプル）
  // ==========================================================================
  // function setupMobileMenu() {
  //   var $menuToggle = $('.js-menu-toggle');
  //   var $mobileMenu = $('.js-mobile-menu');
  //   var $body = $('body');
  //
  //   $menuToggle.on('click', function(e) {
  //     e.preventDefault();
  //     $mobileMenu.toggleClass('is-open');
  //     $body.toggleClass('is-menu-open');
  //     
  //     // アクセシビリティ対応
  //     var isOpen = $mobileMenu.hasClass('is-open');
  //     $menuToggle.attr('aria-expanded', isOpen);
  //   });
  // }

  // ==========================================================================
  // スムーススクロール（サンプル）
  // ==========================================================================
  // function setupSmoothScroll() {
  //   $('a[href^="#"]').on('click', function(e) {
  //     var target = $(this.hash);
  //     if (target.length) {
  //       e.preventDefault();
  //       $('html, body').animate({
  //         scrollTop: target.offset().top - 80 // ヘッダー高さ分オフセット
  //       }, 500);
  //     }
  //   });
  // }

  // ==========================================================================
  // アコーディオン（サンプル）
  // ==========================================================================
  // function setupAccordion() {
  //   var $accordionTrigger = $('.js-accordion-trigger');
  //
  //   $accordionTrigger.on('click', function(e) {
  //     e.preventDefault();
  //     var $this = $(this);
  //     var $content = $this.next('.js-accordion-content');
  //     var isOpen = $this.hasClass('is-open');
  //
  //     $this.toggleClass('is-open');
  //     $content.slideToggle(300);
  //     
  //     // アクセシビリティ対応
  //     $this.attr('aria-expanded', !isOpen);
  //   });
  // }

  // ==========================================================================
  // モーダル（サンプル）
  // ==========================================================================
  // function setupModal() {
  //   var $modalOpen = $('[data-modal-open]');
  //   var $modalClose = $('[data-modal-close]');
  //   var $body = $('body');
  //
  //   $modalOpen.on('click', function(e) {
  //     e.preventDefault();
  //     var modalId = $(this).data('modal-open');
  //     var $modal = $('#' + modalId);
  //     
  //     $modal.addClass('is-open');
  //     $body.addClass('is-modal-open');
  //   });
  //
  //   $modalClose.on('click', function(e) {
  //     e.preventDefault();
  //     var $modal = $(this).closest('.js-modal');
  //     
  //     $modal.removeClass('is-open');
  //     $body.removeClass('is-modal-open');
  //   });
  // }

})(jQuery);

