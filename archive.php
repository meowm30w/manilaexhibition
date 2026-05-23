<?php
/**
 * Archive template.
 */

get_header();
?>
<section class="section">
  <div class="wrap">
    <header class="section-head">
      <h1 class="h2"><?php the_archive_title(); ?></h1>
      <div class="lede"><?php the_archive_description(); ?></div>
    </header>
    <?php if ( have_posts() ) : ?>
      <div class="services-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'service-card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="service-card-img"><?php the_post_thumbnail( 'medium_large' ); ?></div>
            <?php endif; ?>
            <div class="service-card-body">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php the_posts_navigation(); ?>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
