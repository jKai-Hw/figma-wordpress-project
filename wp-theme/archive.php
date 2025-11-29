<?php
/**
 * 汎用アーカイブテンプレート
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
    <header class="archive-header">
      <?php
      the_archive_title( '<h1 class="archive-header__title">', '</h1>' );
      the_archive_description( '<div class="archive-header__description">', '</div>' );
      ?>
    </header>

    <?php if ( have_posts() ) : ?>
      <div class="posts-grid">
        <?php
        while ( have_posts() ) :
          the_post();
          get_template_part( 'template-parts/card', 'post' );
        endwhile;
        ?>
      </div>

      <?php
      // ページネーション
      the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => '&laquo; 前へ',
        'next_text' => '次へ &raquo;',
      ) );
      ?>

    <?php else : ?>
      <p class="no-posts">投稿がありません。</p>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
