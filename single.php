<?php
/**
 * Single post template.
 */

get_header();
?>
<section class="section">
  <div class="wrap">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="hero-image" style="margin-bottom:32px;"><?php the_post_thumbnail( 'large' ); ?></div>
        <?php endif; ?>
        <h1 class="h2"><?php the_title(); ?></h1>
        <div class="entry-content"><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  </div>
</section>
<?php
get_footer();
