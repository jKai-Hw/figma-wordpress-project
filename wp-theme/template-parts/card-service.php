<?php
/**
 * サービスカードテンプレートパーツ
 *
 * @package Figma_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--service' ); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="card__image">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium' ); ?>
      </a>
    </div>
  <?php endif; ?>

  <div class="card__content">
    <h3 class="card__title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <?php if ( has_excerpt() ) : ?>
      <p class="card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
    <?php endif; ?>

    <a href="<?php the_permalink(); ?>" class="card__link">
      詳しく見る
      <span class="card__link-arrow">&rarr;</span>
    </a>
  </div>
</article>
