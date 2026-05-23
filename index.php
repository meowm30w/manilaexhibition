<?php
/**
 * Main template fallback.
 */

get_header();
?>
<section class="section">
  <div class="wrap">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="h2"><?php the_title(); ?></h1>
          <div class="lede"><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
      <?php the_posts_navigation(); ?>
    <?php else : ?>
      <h1 class="h2"><?php esc_html_e( 'Nothing Found', 'manila-exhibition' ); ?></h1>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
