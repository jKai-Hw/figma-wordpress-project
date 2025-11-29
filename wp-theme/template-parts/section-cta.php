<?php
/**
 * CTAセクションテンプレートパーツ
 *
 * @package Figma_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// ACFフィールドの例（ACF使用時）
// $cta_title = get_field( 'cta_title', 'option' );
// $cta_description = get_field( 'cta_description', 'option' );
// $cta_button_text = get_field( 'cta_button_text', 'option' );
// $cta_button_url = get_field( 'cta_button_url', 'option' );
?>

<section class="section-cta">
  <div class="section-cta__inner">
    <h2 class="section-cta__title">
      <?php
      // echo esc_html( $cta_title );
      echo 'お問い合わせはこちら';
      ?>
    </h2>

    <p class="section-cta__description">
      <?php
      // echo esc_html( $cta_description );
      echo 'ご質問・ご相談など、お気軽にお問い合わせください。';
      ?>
    </p>

    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="section-cta__button btn btn--primary">
      <?php
      // echo esc_html( $cta_button_text );
      echo 'お問い合わせ';
      ?>
    </a>
  </div>
</section>
