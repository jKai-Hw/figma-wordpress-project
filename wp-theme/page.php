<?php
/**
 * 汎用固定ページテンプレート
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
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content' ); ?>>
        <header class="page-content__header">
          <h1 class="page-content__title"><?php the_title(); ?></h1>
        </header>

        <div class="page-content__body">
          <?php the_content(); ?>
        </div>
      </article>
      <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
