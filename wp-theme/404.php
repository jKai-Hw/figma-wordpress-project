<?php
/**
 * 404エラーページテンプレート
 *
 * @package Figma_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main class="site-main">
  <div class="container">
    <div class="error-404">
      <h1 class="error-404__title">404</h1>
      <p class="error-404__message">お探しのページは見つかりませんでした。</p>
      <p class="error-404__description">
        URLが間違っているか、ページが移動または削除された可能性があります。
      </p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-404__button btn btn--primary">
        トップページへ戻る
      </a>
    </div>
  </div>
</main>

<?php
get_footer();
