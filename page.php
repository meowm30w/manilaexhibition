<?php
/**
 * Page template.
 */

get_header();
?>
<section class="section">
  <div class="wrap">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="h2"><?php the_title(); ?></h1>
        <div class="entry-content"><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  </div>
</section>
<?php
get_footer();
