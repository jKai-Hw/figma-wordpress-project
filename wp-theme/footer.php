<?php
/**
 * サイトフッター
 *
 * @package Figma_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>

<footer class="site-footer">
  <div class="site-footer__inner">
    <div class="site-footer__grid">
      <!-- 会社情報 -->
      <div class="site-footer__column">
        <div class="site-footer__logo">
          <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php bloginfo( 'name' ); ?>
            </a>
          <?php endif; ?>
        </div>
        <p class="site-footer__description">
          <?php bloginfo( 'description' ); ?>
        </p>
      </div>

      <!-- ナビゲーション -->
      <div class="site-footer__column">
        <h4 class="site-footer__heading">リンク</h4>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_class'     => 'site-footer__menu',
          'container'      => false,
          'fallback_cb'    => false,
        ) );
        ?>
      </div>

      <!-- お問い合わせ -->
      <div class="site-footer__column">
        <h4 class="site-footer__heading">お問い合わせ</h4>
        <p class="site-footer__contact">
          <?php
          // ACFでオプションページから取得する例
          // $email = get_field( 'contact_email', 'option' );
          // echo esc_html( $email );
          ?>
          info@example.com
        </p>
      </div>
    </div>

    <hr class="site-footer__divider">

    <p class="site-footer__copyright">
      &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
