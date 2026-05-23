<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f3efe8">
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/manila-exhibition-logo.png">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/manila-exhibition-logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
    $is_more_work_page = function_exists( 'manila_exhibition_is_more_work_request' ) && manila_exhibition_is_more_work_request();
    $virtual_page      = function_exists( 'manila_exhibition_get_virtual_page' ) ? manila_exhibition_get_virtual_page() : null;
    $quote_link        = ( $is_more_work_page || ( $virtual_page && 'quote' === $virtual_page['type'] ) ) ? '#contact' : home_url( '/request-a-quote/' );
    ?>
    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header" data-header>
      <div class="header-inner">
        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>#top" aria-label="Manila Exhibition and Event Contractor home">
          <?php if ( has_custom_logo() ) : ?>
            <span class="brand-logo"><?php the_custom_logo(); ?></span>
          <?php else : ?>
            <img class="brand-logo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/manila-exhibition-logo.png" alt="" aria-hidden="true">
          <?php endif; ?>
          <span class="brand-name">
            <strong>Manila Exhibition</strong>
            <small>and Event Contractor</small>
          </span>
        </a>

        <nav aria-label="Primary navigation">
          <?php
          wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu_class'     => 'primary-nav',
              'menu_id'        => 'primary-navigation',
              'container'      => false,
              'fallback_cb'    => 'manila_exhibition_primary_menu_fallback',
              'items_wrap'     => '<ul id="%1$s" class="%2$s" data-primary-nav>%3$s</ul>',
          ) );
          ?>
        </nav>

        <div style="display:flex;align-items:center;gap:10px;">
          <a class="btn header-cta" href="<?php echo esc_url( $quote_link ); ?>">
            Get quote
            <svg viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 12L12 2M12 2H4M12 2V10"/></svg>
          </a>
          <button class="menu-toggle" type="button" aria-label="Open navigation menu" aria-controls="primary-navigation" aria-expanded="false" data-menu-toggle>
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </header>

    <main id="main">
