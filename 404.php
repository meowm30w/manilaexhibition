<?php
/**
 * 404 template.
 *
 * @package Manila_Exhibition
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section class="seo-hero not-found-hero" id="top" aria-labelledby="not-found-title">
  <div class="wrap narrow">
    <span class="eyebrow"><span class="dot"></span><?php esc_html_e( 'Page not found', 'manila-exhibition' ); ?></span>
    <h1 id="not-found-title" class="h-display"><?php esc_html_e( 'This page is not available.', 'manila-exhibition' ); ?></h1>
    <p class="lede"><?php esc_html_e( 'The page may have moved, but you can continue to our services, project portfolio, or request a project quote.', 'manila-exhibition' ); ?></p>
    <div class="seo-hero-actions">
      <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'manila-exhibition' ); ?></a>
      <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/services/exhibition-booth-contractor-philippines/' ) ); ?>"><?php esc_html_e( 'Services', 'manila-exhibition' ); ?></a>
      <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>"><?php esc_html_e( 'Portfolio', 'manila-exhibition' ); ?></a>
      <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>"><?php esc_html_e( 'Request a Quote', 'manila-exhibition' ); ?></a>
    </div>
  </div>
</section>

<?php
get_footer();
