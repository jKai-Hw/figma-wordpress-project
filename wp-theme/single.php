<?php
/**
 * 汎用投稿詳細テンプレート
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
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-single' ); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-single__thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
          </div>
        <?php endif; ?>

        <header class="post-single__header">
          <h1 class="post-single__title"><?php the_title(); ?></h1>

          <div class="post-single__meta">
            <time class="post-single__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
              <?php echo esc_html( get_the_date() ); ?>
            </time>

            <?php if ( get_the_author() ) : ?>
              <span class="post-single__author">
                <?php echo esc_html( get_the_author() ); ?>
              </span>
            <?php endif; ?>

            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) :
              ?>
              <span class="post-single__categories">
                <?php
                foreach ( $categories as $category ) {
                  echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                }
                ?>
              </span>
            <?php endif; ?>
          </div>
        </header>

        <div class="post-single__content">
          <?php the_content(); ?>
        </div>

        <?php
        $tags = get_the_tags();
        if ( ! empty( $tags ) ) :
          ?>
          <footer class="post-single__footer">
            <div class="post-single__tags">
              <?php
              foreach ( $tags as $tag ) {
                echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">#' . esc_html( $tag->name ) . '</a>';
              }
              ?>
            </div>
          </footer>
        <?php endif; ?>
      </article>

      <?php
      // コメント欄（必要な場合）
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
      ?>
      <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
