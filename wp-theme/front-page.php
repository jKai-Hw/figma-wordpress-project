<?php
/**
 * トップページテンプレート
 *
 * @package Figma_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>

<main class="site-main">
  <!-- ヒーローセクション -->
  <section class="hero">
    <div class="hero__inner">
      <h1 class="hero__title">Figmaデザインをここに実装してください</h1>
      <p class="hero__description">FigmaのURLをCursorに渡して、デザインを実装しましょう。</p>
    </div>
  </section>

  <?php
  // Figmaからセクションを実装したら、以下のようにテンプレートパーツを読み込む
  // get_template_part( 'template-parts/section', 'hero' );
  // get_template_part( 'template-parts/section', 'about' );
  // get_template_part( 'template-parts/section', 'services' );
  // get_template_part( 'template-parts/section', 'news' );
  // get_template_part( 'template-parts/section', 'cta' );
  ?>
</main>

<?php
get_footer();
