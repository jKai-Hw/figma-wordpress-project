/**
 * モーダル
 * 必要に応じて有効化してください
 */
(function ($) {
  'use strict';

  function setupModal() {
    var $body = $('body');
    var $triggers = $('[data-modal-open]');

    if (!$triggers.length) {
      return;
    }

    // 開く
    $triggers.on('click', function (e) {
      e.preventDefault();
      var modalId = $(this).data('modal-open');
      var $target = $('#' + modalId);

      if ($target.length) {
        $target.addClass('is-open');
        $body.addClass('is-modal-open');
      }
    });

    // 閉じるボタン
    $('[data-modal-close]').on('click', function (e) {
      e.preventDefault();
      $(this).closest('.js-modal').removeClass('is-open');
      $body.removeClass('is-modal-open');
    });

    // 背景クリックで閉じる（必要に応じて）
    // $('.js-modal').on('click', function(e) {
    //   if (e.target === this) {
    //     $(this).removeClass('is-open');
    //     $body.removeClass('is-modal-open');
    //   }
    // });

    // ESCキーで閉じる
    $(document).on('keydown', function (e) {
      if (e.key === 'Escape') {
        $('.js-modal.is-open').removeClass('is-open');
        $body.removeClass('is-modal-open');
      }
    });
  }

  // グローバル公開
  window.setupModal = setupModal;
})(jQuery);
