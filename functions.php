<?php
/**
 * Manila Exhibition and Event Contractor theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once get_template_directory() . '/inc/seo-pages.php';

function manila_exhibition_setup() {
    load_theme_textdomain( 'manila-exhibition', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'manila-exhibition' ),
        'footer'  => __( 'Footer Menu', 'manila-exhibition' ),
    ) );
}
add_action( 'after_setup_theme', 'manila_exhibition_setup' );

function manila_exhibition_assets() {
    $theme_version  = wp_get_theme()->get( 'Version' );
    $style_path     = get_stylesheet_directory() . '/style.css';
    $main_css_path  = get_template_directory() . '/assets/css/main.css';
    $main_js_path   = get_template_directory() . '/assets/js/main.js';
    $style_version  = file_exists( $style_path ) ? (string) filemtime( $style_path ) : $theme_version;
    $main_css_ver   = file_exists( $main_css_path ) ? (string) filemtime( $main_css_path ) : $theme_version;
    $main_js_ver    = file_exists( $main_js_path ) ? (string) filemtime( $main_js_path ) : $theme_version;

    wp_enqueue_style(
        'manila-exhibition-fonts',
        'https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700;800&family=Geist+Mono:wght@400;500;600&family=Inter+Tight:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'manila-exhibition-theme',
        get_stylesheet_uri(),
        array(),
        $style_version
    );

    wp_enqueue_style(
        'manila-exhibition-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'manila-exhibition-fonts', 'manila-exhibition-theme' ),
        $main_css_ver
    );

    wp_enqueue_script(
        'manila-exhibition-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $main_js_ver,
        true
    );

    wp_localize_script(
        'manila-exhibition-main',
        'ManilaExhibitionForm',
        array(
            'ajaxUrl'        => admin_url( 'admin-ajax.php' ),
            'nonceAction'    => 'manila_project_inquiry_nonce',
            'inquiryAction'  => 'manila_project_inquiry',
            'nonceField'     => 'manila_project_inquiry_nonce',
            'successMessage' => __( 'Thank you for reaching out. Your inquiry has been received. Our team will review your project details and contact you within 1 to 2 business days to discuss your requirements, timeline, and next steps.', 'manila-exhibition' ),
            'errorMessage'   => __( 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.', 'manila-exhibition' ),
        )
    );
}
add_action( 'wp_enqueue_scripts', 'manila_exhibition_assets' );

function manila_exhibition_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'manila-exhibition' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here.', 'manila-exhibition' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'manila_exhibition_widgets_init' );

function manila_exhibition_register_inquiries_post_type() {
    register_post_type( 'manila_inquiry', array(
        'labels' => array(
            'name'          => __( 'Project Inquiries', 'manila-exhibition' ),
            'singular_name' => __( 'Project Inquiry', 'manila-exhibition' ),
            'menu_name'     => __( 'Project Inquiries', 'manila-exhibition' ),
        ),
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-email-alt2',
        'capability_type'     => 'post',
        'supports'            => array( 'title', 'editor', 'custom-fields' ),
        'exclude_from_search' => true,
    ) );
}
add_action( 'init', 'manila_exhibition_register_inquiries_post_type' );

function manila_exhibition_more_work_rewrite() {
    add_rewrite_rule( '^more-work/?$', 'index.php?manila_more_work=1', 'top' );
}
add_action( 'init', 'manila_exhibition_more_work_rewrite' );

function manila_exhibition_seo_rewrite_rules() {
    foreach ( manila_exhibition_public_pages() as $path => $page ) {
        add_rewrite_rule(
            '^' . preg_quote( trim( $path, '/' ), '#' ) . '/?$',
            'index.php?manila_seo_page=' . trim( $path, '/' ),
            'top'
        );
    }

    add_rewrite_rule( '^sitemap\.xml$', 'index.php?manila_sitemap=1', 'top' );
}
add_action( 'init', 'manila_exhibition_seo_rewrite_rules' );

function manila_exhibition_query_vars( $vars ) {
    $vars[] = 'manila_more_work';
    $vars[] = 'manila_seo_page';
    $vars[] = 'manila_sitemap';
    return $vars;
}
add_filter( 'query_vars', 'manila_exhibition_query_vars' );

function manila_exhibition_get_virtual_page() {
    $page_key = trim( (string) get_query_var( 'manila_seo_page' ), '/' );

    if ( '' === $page_key ) {
        return null;
    }

    $pages = manila_exhibition_public_pages();
    return isset( $pages[ $page_key ] ) ? $pages[ $page_key ] : null;
}

function manila_exhibition_get_virtual_page_key() {
    return trim( (string) get_query_var( 'manila_seo_page' ), '/' );
}

function manila_exhibition_body_classes( $classes ) {
    if ( 'case-studies/solar-storage-live-philippines-2026-booth-projects' === manila_exhibition_get_virtual_page_key() ) {
        $classes[] = 'solar-case-study-page';
    }

    if ( 'case-studies' === manila_exhibition_get_virtual_page_key() ) {
        $classes[] = 'case-studies-index-page';
    }

    return $classes;
}
add_filter( 'body_class', 'manila_exhibition_body_classes' );

function manila_exhibition_is_more_work_request() {
    if ( get_query_var( 'manila_more_work' ) ) {
        return true;
    }

    if (
        isset( $_GET['manila_more_work'] ) &&
        '1' === sanitize_text_field( wp_unslash( $_GET['manila_more_work'] ) )
    ) {
        return true;
    }

    $pagename = trim( (string) get_query_var( 'pagename' ), '/' );
    if ( 'more-work' === $pagename ) {
        return true;
    }

    global $wp;
    $request = isset( $wp->request ) ? trim( (string) $wp->request, '/' ) : '';

    return 'more-work' === $request;
}

function manila_exhibition_more_work_status() {
    if ( manila_exhibition_is_more_work_request() || manila_exhibition_get_virtual_page() ) {
        global $wp_query;
        if ( $wp_query ) {
            $wp_query->is_404 = false;
        }
        status_header( 200 );
    }
}
add_action( 'template_redirect', 'manila_exhibition_more_work_status', 0 );

function manila_exhibition_template_include( $template ) {
    if ( manila_exhibition_get_virtual_page() ) {
        $seo_template = locate_template( 'seo-page.php' );
        if ( $seo_template ) {
            return $seo_template;
        }
    }

    if ( manila_exhibition_is_more_work_request() ) {
        $more_work_template = locate_template( 'more-work.php' );
        if ( $more_work_template ) {
            return $more_work_template;
        }
    }

    return $template;
}
add_filter( 'template_include', 'manila_exhibition_template_include' );

function manila_exhibition_more_work_title( $title ) {
    $virtual_page = manila_exhibition_get_virtual_page();

    if ( $virtual_page ) {
        $title['title'] = $virtual_page['title'];
        unset( $title['site'] );
        return $title;
    }

    if ( is_front_page() ) {
        $title['title'] = __( 'Exhibition Booth Contractor Philippines | Manila Exhibition', 'manila-exhibition' );
        unset( $title['site'] );
        return $title;
    }

    if ( manila_exhibition_is_more_work_request() ) {
        $title['title'] = __( 'More Work', 'manila-exhibition' );
    }

    return $title;
}
add_filter( 'document_title_parts', 'manila_exhibition_more_work_title' );

function manila_exhibition_flush_rewrite_rules() {
    manila_exhibition_more_work_rewrite();
    manila_exhibition_seo_rewrite_rules();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'manila_exhibition_flush_rewrite_rules' );

function manila_exhibition_home_faqs() {
    return array(
        array(
            'question' => 'How long does it take to design and build an exhibition booth?',
            'answer'   => 'Most exhibition booth design and build projects take about 2 to 6 weeks depending on booth size, design complexity, materials, venue requirements, approval timelines, production, delivery, and installation schedule.',
        ),
        array(
            'question' => 'How much does an exhibition booth or mall kiosk cost in the Philippines?',
            'answer'   => 'Cost depends on size, materials, finishes, graphics, lighting, fabrication complexity, location, and installation conditions. Send your floor plan, booth size, target date, design references, and budget range so Manila Exhibition can prepare a practical quote.',
        ),
        array(
            'question' => 'Do you handle booth installation at SMX Convention Center or World Trade Center Metro Manila?',
            'answer'   => 'Yes, we can support exhibition booth projects for events at or near SMX Convention Center, World Trade Center Metro Manila, and other venues depending on the schedule, access rules, and project scope.',
        ),
        array(
            'question' => 'Can you build custom kiosks, counters, and retail displays for malls?',
            'answer'   => 'Yes. Manila Exhibition fabricates mall kiosks, counters, retail displays, product fixtures, sampling counters, and pop-up retail structures for brand activations and commercial retail use.',
        ),
        array(
            'question' => 'Do you provide design, fabrication, delivery, installation, and dismantling?',
            'answer'   => 'Yes. We can support the project from design planning and fabrication through delivery, onsite installation, turnover, and dismantling when required by the event or venue.',
        ),
        array(
            'question' => 'What details do I need to request a quote?',
            'answer'   => 'Please include your event date, venue, booth or space size, floor plan, brand references, target budget if available, and installation deadline. These details help the team quote accurately.',
        ),
    );
}

function manila_exhibition_current_meta() {
    $virtual_page = manila_exhibition_get_virtual_page();

    if ( $virtual_page ) {
        $path = manila_exhibition_get_virtual_page_key();
        $image = ! empty( $virtual_page['og_image'] )
            ? get_template_directory_uri() . '/assets/images/' . ltrim( $virtual_page['og_image'], '/' )
            : get_template_directory_uri() . '/assets/images/portfolio/dalian-01.jpg';

        return array(
            'title'       => $virtual_page['title'],
            'description' => $virtual_page['description'],
            'og_description' => ! empty( $virtual_page['og_description'] ) ? $virtual_page['og_description'] : $virtual_page['description'],
            'url'         => home_url( '/' . trim( $path, '/' ) . '/' ),
            'type'        => in_array( $virtual_page['type'], array( 'blog', 'case-study' ), true ) ? 'article' : 'website',
            'image'       => $image,
        );
    }

    if ( manila_exhibition_is_more_work_request() ) {
        return array(
            'title'       => __( 'More Exhibition Booth, Kiosk and Fabrication Work | Manila Exhibition', 'manila-exhibition' ),
            'description' => __( 'See additional exhibition booths, mall kiosks, event booths, retail displays, and custom fabrication projects by Manila Exhibition.', 'manila-exhibition' ),
            'url'         => home_url( '/more-work/' ),
            'type'        => 'website',
            'image'       => get_template_directory_uri() . '/assets/images/more-work/more-work-01.jpg',
        );
    }

    if ( is_front_page() || is_home() ) {
        return array(
            'title'       => __( 'Exhibition Booth Contractor Philippines | Manila Exhibition', 'manila-exhibition' ),
            'description' => __( 'Manila Exhibition and Event Contractor is an award-winning booth contractor in the Philippines specializing in custom exhibition stands, mall kiosks, retail displays, fit-outs, and branded event spaces.', 'manila-exhibition' ),
            'url'         => home_url( '/' ),
            'type'        => 'website',
            'image'       => get_template_directory_uri() . '/assets/images/portfolio/dalian-01.jpg',
        );
    }

    return null;
}

function manila_exhibition_schema_graph() {
    $meta         = manila_exhibition_current_meta();
    $virtual_page = manila_exhibition_get_virtual_page();
    $url          = $meta ? $meta['url'] : home_url( '/' );

    $graph = array(
        array(
            '@type'       => 'Organization',
            '@id'         => home_url( '/#organization' ),
            'name'        => 'Manila Exhibition and Event Contractor',
            'url'         => home_url( '/' ),
            'email'       => 'admin@manilaexhibition.com',
            'telephone'   => '+639455189935',
            'logo'        => get_template_directory_uri() . '/assets/images/logo/manila-exhibition-logo.png',
        ),
        array(
            '@type'       => 'WebSite',
            '@id'         => home_url( '/#website' ),
            'url'         => home_url( '/' ),
            'name'        => 'Manila Exhibition and Event Contractor',
            'publisher'   => array( '@id' => home_url( '/#organization' ) ),
            'inLanguage'  => get_bloginfo( 'language' ),
        ),
        array(
            '@type'       => 'ProfessionalService',
            '@id'         => home_url( '/#localbusiness' ),
            'name'        => 'Manila Exhibition and Event Contractor',
            'url'         => home_url( '/' ),
            'email'       => 'admin@manilaexhibition.com',
            'telephone'   => '+639455189935',
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Studio Sto Cristo, Corner Desta, Diversion Road',
                'addressLocality' => 'City of Malolos',
                'addressRegion'   => 'Bulacan',
                'addressCountry'  => 'PH',
            ),
            'areaServed'  => array( 'Philippines', 'Metro Manila', 'Manila', 'Pasay', 'Makati', 'Quezon City', 'Taguig', 'BGC', 'Bulacan' ),
            'priceRange'  => '$$',
        ),
    );

    if ( $meta ) {
        $graph[] = array(
            '@type'       => 'WebPage',
            '@id'         => $url . '#webpage',
            'url'         => $url,
            'name'        => $meta['title'],
            'description' => $meta['description'],
            'isPartOf'    => array( '@id' => home_url( '/#website' ) ),
        );
    }

    if ( $virtual_page ) {
        $breadcrumb_items = array(
            array(
                '@type'    => 'ListItem',
                'position' => 1,
                'name'     => 'Home',
                'item'     => home_url( '/' ),
            ),
        );

        if ( ! empty( $virtual_page['breadcrumb_parent'] ) ) {
            $breadcrumb_items[] = array(
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => $virtual_page['breadcrumb_parent']['name'],
                'item'     => home_url( '/' . trim( $virtual_page['breadcrumb_parent']['url'], '/' ) . '/' ),
            );
        }

        $breadcrumb_items[] = array(
            '@type'    => 'ListItem',
            'position' => count( $breadcrumb_items ) + 1,
            'name'     => $virtual_page['h1'],
            'item'     => $url,
        );

        $graph[] = array(
            '@type'           => 'BreadcrumbList',
            'itemListElement' => $breadcrumb_items,
        );

        if ( in_array( $virtual_page['type'], array( 'service', 'location', 'venue', 'event-portfolio' ), true ) ) {
            $graph[] = array(
                '@type'       => 'Service',
                'name'        => $virtual_page['h1'],
                'serviceType' => isset( $virtual_page['serviceType'] ) ? $virtual_page['serviceType'] : $virtual_page['h1'],
                'provider'    => array( '@id' => home_url( '/#localbusiness' ) ),
                'areaServed'  => array( 'Philippines', 'Metro Manila', 'Manila', 'Pasay', 'Makati', 'Quezon City', 'Taguig', 'Bulacan' ),
                'url'         => $url,
                'description' => $virtual_page['description'],
            );
        }

        if ( 'blog' === $virtual_page['type'] ) {
            $graph[] = array(
                '@type'       => 'BlogPosting',
                'headline'    => $virtual_page['h1'],
                'description' => $virtual_page['description'],
                'url'         => $url,
                'publisher'   => array( '@id' => home_url( '/#organization' ) ),
            );
        }

        if ( ! empty( $virtual_page['faqs'] ) ) {
            $graph[] = array(
                '@type'      => 'FAQPage',
                'mainEntity' => array_map(
                    function ( $faq ) {
                        return array(
                            '@type'          => 'Question',
                            'name'           => $faq['question'],
                            'acceptedAnswer' => array(
                                '@type' => 'Answer',
                                'text'  => $faq['answer'],
                            ),
                        );
                    },
                    $virtual_page['faqs']
                ),
            );
        }
    } elseif ( is_front_page() || is_home() ) {
        $graph[] = array(
            '@type'      => 'FAQPage',
            'mainEntity' => array_map(
                function ( $faq ) {
                    return array(
                        '@type'          => 'Question',
                        'name'           => $faq['question'],
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text'  => $faq['answer'],
                        ),
                    );
                },
                manila_exhibition_home_faqs()
            ),
        );
    }

    return array(
        '@context' => 'https://schema.org',
        '@graph'   => $graph,
    );
}

function manila_exhibition_head_meta() {
    $meta = manila_exhibition_current_meta();

    if ( ! $meta ) {
        return;
    }

    $image = ! empty( $meta['image'] ) ? $meta['image'] : get_template_directory_uri() . '/assets/images/portfolio/dalian-01.jpg';
    ?>
    <meta name="description" content="<?php echo esc_attr( $meta['description'] ); ?>">
    <link rel="canonical" href="<?php echo esc_url( $meta['url'] ); ?>">
    <meta property="og:title" content="<?php echo esc_attr( $meta['title'] ); ?>">
    <meta property="og:description" content="<?php echo esc_attr( ! empty( $meta['og_description'] ) ? $meta['og_description'] : $meta['description'] ); ?>">
    <meta property="og:url" content="<?php echo esc_url( $meta['url'] ); ?>">
    <meta property="og:type" content="<?php echo esc_attr( $meta['type'] ); ?>">
    <meta property="og:image" content="<?php echo esc_url( $image ); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr( $meta['title'] ); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr( ! empty( $meta['og_description'] ) ? $meta['og_description'] : $meta['description'] ); ?>">
    <meta name="twitter:image" content="<?php echo esc_url( $image ); ?>">
    <script type="application/ld+json"><?php echo wp_json_encode( manila_exhibition_schema_graph(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?></script>
    <?php
}
add_action( 'wp_head', 'manila_exhibition_head_meta', 2 );

function manila_exhibition_robots_txt( $output, $public ) {
    $output  = "User-agent: *\n";
    $output .= "Allow: /\n\n";
    $output .= 'Sitemap: ' . esc_url_raw( home_url( '/sitemap.xml' ) ) . "\n";

    return $output;
}
add_filter( 'robots_txt', 'manila_exhibition_robots_txt', 10, 2 );

function manila_exhibition_sitemap_urls() {
    $urls = array(
        home_url( '/' ),
        home_url( '/more-work/' ),
    );

    foreach ( manila_exhibition_public_pages() as $path => $page ) {
        $urls[] = home_url( '/' . trim( $path, '/' ) . '/' );
    }

    return array_values( array_unique( $urls ) );
}

function manila_exhibition_output_sitemap() {
    if ( ! get_query_var( 'manila_sitemap' ) ) {
        return;
    }

    status_header( 200 );
    header( 'Content-Type: application/xml; charset=UTF-8' );

    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ( manila_exhibition_sitemap_urls() as $url ) {
        echo "  <url>\n";
        echo '    <loc>' . esc_url( $url ) . "</loc>\n";
        echo '    <lastmod>' . esc_html( gmdate( 'Y-m-d' ) ) . "</lastmod>\n";
        echo "  </url>\n";
    }
    echo "</urlset>\n";
    exit;
}
add_action( 'template_redirect', 'manila_exhibition_output_sitemap', 0 );

function manila_exhibition_primary_menu_fallback() {
    echo '<ul class="primary-nav" id="primary-navigation" data-primary-nav>';
    echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">About</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">Services</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/#portfolio' ) ) . '">Portfolio</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/case-studies/' ) ) . '">Recent Projects</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/#process' ) ) . '">Process</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/#start-a-project' ) ) . '">Contact</a></li>';
    echo '</ul>';
}

function manila_exhibition_remove_unready_primary_menu_items( $items, $args ) {
    if ( empty( $args->theme_location ) || 'primary' !== $args->theme_location ) {
        return $items;
    }

    $items = preg_replace( '#<li[^>]*>\s*<a[^>]*href="[^"]*/blog/?[^"]*"[^>]*>.*?</a>\s*</li>#is', '', $items );
    $items = preg_replace( '#<li[^>]*>\s*<a[^>]*href="[^"]*(?:#faq|/faq/?)[^"]*"[^>]*>.*?</a>\s*</li>#is', '', $items );
    $items = preg_replace( '#<li[^>]*>\s*<a[^>]*>\s*(Blog|FAQ)\s*</a>\s*</li>#is', '', $items );
    $items = preg_replace( '#href="[^"]*/services/exhibition-booth-contractor-philippines/?[^"]*"#i', 'href="' . esc_url( home_url( '/#services' ) ) . '"', $items );
    $items = preg_replace( '#href="[^"]*/portfolio/?[^"]*"#i', 'href="' . esc_url( home_url( '/#portfolio' ) ) . '"', $items );
    $items = preg_replace( '#href="[^"]*/request-a-quote/?[^"]*"#i', 'href="' . esc_url( home_url( '/#start-a-project' ) ) . '"', $items );

    if ( false === stripos( $items, '/case-studies/' ) && false === stripos( $items, 'Recent Projects' ) ) {
        $case_item = '<li><a href="' . esc_url( home_url( '/case-studies/' ) ) . '">Recent Projects</a></li>';
        $items     = preg_replace( '#(<li[^>]*>\s*<a[^>]*href="[^"]*#process[^"]*"[^>]*>.*?</a>\s*</li>)#is', $case_item . '$1', $items, 1, $case_count );

        if ( empty( $case_count ) ) {
            $items .= $case_item;
        }
    }

    return $items;
}
add_filter( 'wp_nav_menu_items', 'manila_exhibition_remove_unready_primary_menu_items', 10, 2 );

function manila_exhibition_inquiry_redirect( $status ) {
    if ( 'sent' === $status ) {
        wp_safe_redirect( home_url( '/thank-you/' ) );
        exit;
    }

    $referer = wp_get_referer();
    $base    = $referer ? strtok( $referer, '#' ) : home_url( '/' );
    $base    = remove_query_arg( 'inquiry', $base );
    $url     = add_query_arg( 'inquiry', $status, $base ) . '#contact';

    wp_safe_redirect( $url );
    exit;
}

function manila_exhibition_is_ajax_inquiry() {
    if ( function_exists( 'wp_doing_ajax' ) && wp_doing_ajax() ) {
        return true;
    }

    if ( isset( $_POST['manila_ajax'] ) && '1' === sanitize_text_field( wp_unslash( $_POST['manila_ajax'] ) ) ) {
        return true;
    }

    return isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && 'xmlhttprequest' === strtolower( sanitize_text_field( wp_unslash( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ) );
}

function manila_exhibition_inquiry_response( $status ) {
    if ( manila_exhibition_is_ajax_inquiry() ) {
        if ( 'sent' === $status ) {
            wp_send_json_success( array(
                'message' => __( 'Thank you for reaching out. Your inquiry has been received. Our team will review your project details and contact you within 1 to 2 business days to discuss your requirements, timeline, and next steps.', 'manila-exhibition' ),
            ) );
        }

        wp_send_json_error( array(
            'message' => __( 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.', 'manila-exhibition' ),
        ) );
    }

    manila_exhibition_inquiry_redirect( $status );
}

function manila_exhibition_allowed_project_types() {
    return array(
        'Exhibition Booth',
        'Mall Kiosk',
        'Counter',
        'Retail Display',
        'Commercial Interior Fit-Out',
        'Custom Fabrication',
        'Event / Activation Build',
        'Other',
    );
}

function manila_exhibition_send_inquiry_error( $message = '' ) {
    if ( manila_exhibition_is_ajax_inquiry() ) {
        wp_send_json_error( array(
            'message' => $message ? $message : __( 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.', 'manila-exhibition' ),
        ) );
    }

    manila_exhibition_inquiry_redirect( 'failed' );
}

function manila_exhibition_send_fresh_inquiry_nonce() {
    nocache_headers();

    wp_send_json_success( array(
        'nonce' => wp_create_nonce( 'manila_project_inquiry' ),
    ) );
}
add_action( 'wp_ajax_nopriv_manila_project_inquiry_nonce', 'manila_exhibition_send_fresh_inquiry_nonce' );
add_action( 'wp_ajax_manila_project_inquiry_nonce', 'manila_exhibition_send_fresh_inquiry_nonce' );

function manila_exhibition_build_inquiry_body( $fields ) {
    $body  = "New project inquiry from Manila Exhibition and Event Contractor website\n\n";
    $body .= "Name: {$fields['name']}\n";
    $body .= "Company: {$fields['company']}\n";
    $body .= "Email: {$fields['email']}\n";
    $body .= "Phone: {$fields['phone']}\n";
    $body .= "Project Type: {$fields['project_type']}\n";
    $body .= "Project Location: {$fields['project_location']}\n";
    $body .= "Event / Target Date: {$fields['event_date']}\n";
    $body .= "Booth / Space Size: {$fields['space_size']}\n";
    $body .= "Venue: {$fields['venue']}\n";
    $body .= "Budget Range: {$fields['budget_range']}\n";
    $body .= "Source: {$fields['source']}\n\n";
    $body .= "Project Details:\n{$fields['message']}\n\n";
    $body .= 'Submitted: ' . wp_date( 'Y-m-d H:i:s' ) . "\n";
    $body .= 'Website: ' . home_url( '/' ) . "\n";

    return $body;
}

function manila_exhibition_store_project_inquiry( $fields, $body ) {
    $title = sprintf(
        'Project inquiry - %s - %s',
        $fields['name'],
        wp_date( 'Y-m-d H:i' )
    );

    $post_id = wp_insert_post( array(
        'post_type'    => 'manila_inquiry',
        'post_status'  => 'private',
        'post_title'   => $title,
        'post_content' => $body,
    ), true );

    if ( is_wp_error( $post_id ) || ! $post_id ) {
        if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
            error_log( 'Manila inquiry save failed: ' . ( is_wp_error( $post_id ) ? $post_id->get_error_message() : 'Unknown error' ) );
        }

        return 0;
    }

    foreach ( $fields as $key => $value ) {
        update_post_meta( $post_id, '_' . $key, $value );
    }

    update_post_meta( $post_id, '_email_sent', 'pending' );

    return (int) $post_id;
}

function manila_exhibition_handle_project_inquiry() {
    if (
        ! isset( $_POST['manila_project_inquiry_nonce'] ) ||
        ! wp_verify_nonce(
            sanitize_text_field( wp_unslash( $_POST['manila_project_inquiry_nonce'] ) ),
            'manila_project_inquiry'
        )
    ) {
        manila_exhibition_send_inquiry_error( __( 'The quote form security token expired. Please refresh the page and try again.', 'manila-exhibition' ) );
    }

    $fields = array(
        'name'             => isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '',
        'company'          => isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '',
        'email'            => isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '',
        'phone'            => isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '',
        'project_type'     => isset( $_POST['projectType'] ) ? sanitize_text_field( wp_unslash( $_POST['projectType'] ) ) : '',
        'project_location' => isset( $_POST['projectLocation'] ) ? sanitize_text_field( wp_unslash( $_POST['projectLocation'] ) ) : '',
        'event_date'       => isset( $_POST['eventDate'] ) ? sanitize_text_field( wp_unslash( $_POST['eventDate'] ) ) : '',
        'space_size'       => isset( $_POST['spaceSize'] ) ? sanitize_text_field( wp_unslash( $_POST['spaceSize'] ) ) : '',
        'venue'            => isset( $_POST['venue'] ) ? sanitize_text_field( wp_unslash( $_POST['venue'] ) ) : '',
        'budget_range'     => isset( $_POST['budgetRange'] ) ? sanitize_text_field( wp_unslash( $_POST['budgetRange'] ) ) : '',
        'message'          => isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '',
        'source'           => isset( $_POST['source'] ) ? sanitize_text_field( wp_unslash( $_POST['source'] ) ) : '',
    );

    $required_fields = array( 'name', 'email', 'phone', 'project_type', 'project_location', 'event_date', 'message' );

    foreach ( $required_fields as $key ) {
        if ( empty( $fields[ $key ] ) ) {
            manila_exhibition_inquiry_response( 'failed' );
        }
    }

    if ( ! is_email( $fields['email'] ) ) {
        manila_exhibition_send_inquiry_error( __( 'Please enter a valid email address.', 'manila-exhibition' ) );
    }

    if ( ! in_array( $fields['project_type'], manila_exhibition_allowed_project_types(), true ) ) {
        manila_exhibition_send_inquiry_error( __( 'Please choose a valid project type.', 'manila-exhibition' ) );
    }

    $recipients = array_unique( array(
        'admin@manilaexhibition.com',
        'cosmicalienfrommars@gmail.com',
    ) );

    $subject    = sprintf( 'New project quote inquiry from %s', $fields['name'] );
    $body       = manila_exhibition_build_inquiry_body( $fields );
    $inquiry_id = manila_exhibition_store_project_inquiry( $fields, $body );

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: Manila Exhibition and Event Contractor <admin@manilaexhibition.com>',
        sprintf( 'Reply-To: %s <%s>', $fields['name'], $fields['email'] ),
    );

    $sent = true;
    foreach ( $recipients as $recipient ) {
        if ( ! wp_mail( $recipient, $subject, $body, $headers ) ) {
            $sent = false;
        }
    }

    if ( $inquiry_id ) {
        update_post_meta( $inquiry_id, '_email_sent', $sent ? 'yes' : 'no' );
    }

    if ( ! $sent && defined( 'WP_DEBUG' ) && WP_DEBUG ) {
        error_log( 'Manila inquiry email failed for saved inquiry ID: ' . ( $inquiry_id ? $inquiry_id : 'not saved' ) );
    }

    manila_exhibition_inquiry_response( ( $sent || $inquiry_id ) ? 'sent' : 'failed' );
}
add_action( 'admin_post_nopriv_manila_project_inquiry', 'manila_exhibition_handle_project_inquiry' );
add_action( 'admin_post_manila_project_inquiry', 'manila_exhibition_handle_project_inquiry' );
add_action( 'wp_ajax_nopriv_manila_project_inquiry', 'manila_exhibition_handle_project_inquiry' );
add_action( 'wp_ajax_manila_project_inquiry', 'manila_exhibition_handle_project_inquiry' );
