<?php
/**
 * Virtual SEO page template.
 *
 * @package Manila_Exhibition
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$page_key = trim( (string) get_query_var( 'manila_seo_page' ), '/' );
$pages    = function_exists( 'manila_exhibition_public_pages' ) ? manila_exhibition_public_pages() : array();
$page     = isset( $pages[ $page_key ] ) ? $pages[ $page_key ] : null;

if ( ! $page ) {
    status_header( 404 );
    get_template_part( '404' );
    return;
}

get_header();

$theme_uri = get_template_directory_uri();

if ( ! function_exists( 'manila_exhibition_inner_url' ) ) {
    function manila_exhibition_inner_url( $url ) {
        if ( 0 === strpos( $url, 'http' ) ) {
            return $url;
        }

        return home_url( '/' . ltrim( $url, '/' ) );
    }
}
?>

<section class="seo-hero" id="top" aria-labelledby="seo-page-title">
  <div class="wrap">
    <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'manila-exhibition' ); ?>">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'manila-exhibition' ); ?></a>
      <span>/</span>
      <?php if ( ! empty( $page['breadcrumb_parent'] ) ) : ?>
        <a href="<?php echo esc_url( manila_exhibition_inner_url( $page['breadcrumb_parent']['url'] ) ); ?>"><?php echo esc_html( $page['breadcrumb_parent']['name'] ); ?></a>
        <span>/</span>
      <?php endif; ?>
      <span><?php echo esc_html( $page['h1'] ); ?></span>
    </nav>
    <span class="eyebrow reveal"><span class="dot"></span><?php echo esc_html( $page['eyebrow'] ); ?></span>
    <h1 id="seo-page-title" class="h-display reveal"><?php echo esc_html( $page['h1'] ); ?></h1>
    <p class="lede reveal"><?php echo esc_html( $page['lede'] ); ?></p>
    <div class="seo-hero-actions reveal">
      <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>">
        <?php esc_html_e( 'Request a Project Quote', 'manila-exhibition' ); ?>
        <svg viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 12L12 2M12 2H4M12 2V10"/></svg>
      </a>
      <?php if ( 'event-portfolio' === $page['type'] ) : ?>
        <a class="btn btn-ghost" href="#booth-projects"><?php esc_html_e( 'View Booth Gallery', 'manila-exhibition' ); ?></a>
      <?php else : ?>
        <a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>"><?php esc_html_e( 'View Our Work', 'manila-exhibition' ); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php if ( 'thank-you' === $page['type'] ) : ?>
  <section class="seo-section">
    <div class="wrap narrow">
      <div class="seo-card reveal">
        <h2><?php esc_html_e( 'What happens next', 'manila-exhibition' ); ?></h2>
        <p><?php esc_html_e( 'Our team will review your project details, confirm any missing information, and contact you with the next practical step for your booth, kiosk, display, fit-out, or event activation build.', 'manila-exhibition' ); ?></p>
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'manila-exhibition' ); ?></a>
      </div>
    </div>
  </section>
<?php elseif ( 'quote' === $page['type'] ) : ?>
  <section class="seo-section quote-page-section" id="contact">
    <div class="wrap seo-two-col">
      <div class="seo-card reveal">
        <h2><?php esc_html_e( 'Send a complete booth or build brief', 'manila-exhibition' ); ?></h2>
        <p><?php esc_html_e( 'Use the form to send details for an exhibition booth, mall kiosk, retail display, commercial fit-out, event booth, activation build, or custom fabrication project.', 'manila-exhibition' ); ?></p>
        <ul class="seo-check-list">
          <li><?php esc_html_e( 'Event date and venue', 'manila-exhibition' ); ?></li>
          <li><?php esc_html_e( 'Booth size, space size, or site dimensions', 'manila-exhibition' ); ?></li>
          <li><?php esc_html_e( 'Floor plan, design references, and brand guidelines', 'manila-exhibition' ); ?></li>
          <li><?php esc_html_e( 'Target budget and installation deadline if available', 'manila-exhibition' ); ?></li>
        </ul>
        <div class="contact-direct compact">
          <a href="mailto:admin@manilaexhibition.com"><div><small><?php esc_html_e( 'Email', 'manila-exhibition' ); ?></small>admin@manilaexhibition.com</div></a>
          <a href="tel:+639455189935"><div><small><?php esc_html_e( 'Phone / WhatsApp / Viber', 'manila-exhibition' ); ?></small>+63 945 518 9935</div></a>
          <a href="<?php echo esc_url( home_url( '/locations/bulacan/' ) ); ?>"><div><small><?php esc_html_e( 'Studio', 'manila-exhibition' ); ?></small><?php esc_html_e( 'Studio Sto Cristo, Corner Desta, Diversion Road, City of Malolos, Bulacan', 'manila-exhibition' ); ?></div></a>
        </div>
        <div class="seo-map" aria-label="<?php esc_attr_e( 'Map location for Manila Exhibition and Event Contractor', 'manila-exhibition' ); ?>">
          <iframe title="<?php esc_attr_e( 'Manila Exhibition studio map', 'manila-exhibition' ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Studio%20Sto%20Cristo%2C%20Corner%20Desta%2C%20Diversion%20Road%2C%20City%20of%20Malolos%2C%20Bulacan%2C%20Philippines&output=embed"></iframe>
        </div>
      </div>
      <?php get_template_part( 'template-parts/quote-form', null, array( 'source' => 'Manila Exhibition request quote page' ) ); ?>
    </div>
  </section>
<?php else : ?>
  <?php if ( 'event-portfolio' === $page['type'] ) : ?>
    <section class="seo-section event-overview-section">
      <div class="wrap solar-about-event">
        <article class="seo-main-copy">
          <div class="seo-copy-block reveal">
            <h2><?php echo esc_html( $page['overview']['heading'] ); ?></h2>
            <?php foreach ( $page['overview']['body'] as $paragraph ) : ?>
              <p><?php echo esc_html( $paragraph ); ?></p>
            <?php endforeach; ?>
          </div>
        </article>
        <aside class="event-detail-card reveal">
          <h2><?php esc_html_e( 'Event details', 'manila-exhibition' ); ?></h2>
          <dl>
            <?php foreach ( $page['event_details'] as $label => $value ) : ?>
              <div>
                <dt><?php echo esc_html( $label ); ?></dt>
                <dd><?php echo esc_html( $value ); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </aside>
      </div>
    </section>

    <section class="seo-section event-projects-section" id="booth-projects">
      <div class="wrap">
        <div class="portfolio-subhead reveal">
          <span class="section-kicker"><?php esc_html_e( 'Event booth gallery', 'manila-exhibition' ); ?></span>
          <h2 class="event-section-title"><?php echo esc_html( $page['projects_intro']['heading'] ); ?></h2>
          <p><?php echo esc_html( $page['projects_intro']['body'] ); ?></p>
        </div>
        <div class="event-project-grid reveal-stagger">
          <?php foreach ( $page['booth_projects'] as $project ) : ?>
            <?php $cover = $project['images'][0]; ?>
            <a class="event-project-card" href="#<?php echo esc_attr( $project['slug'] ); ?>">
              <img
                src="<?php echo esc_url( $theme_uri . '/assets/images/' . $cover['file'] ); ?>"
                alt="<?php echo esc_attr( $cover['alt'] ); ?>"
                width="<?php echo esc_attr( $cover['width'] ); ?>"
                height="<?php echo esc_attr( $cover['height'] ); ?>"
                loading="lazy"
              >
              <h3><?php echo esc_html( $project['name'] ); ?></h3>
              <p><?php echo esc_html( $project['details']['Industry'] ); ?></p>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php foreach ( $page['booth_projects'] as $project ) : ?>
      <section class="seo-section event-client-section" id="<?php echo esc_attr( $project['slug'] ); ?>">
        <div class="wrap">
          <div class="event-client-head reveal">
            <span class="eyebrow"><span class="dot"></span><?php esc_html_e( 'Booth project', 'manila-exhibition' ); ?></span>
            <h2 class="h-display"><?php echo esc_html( $project['heading'] ); ?></h2>
            <?php if ( ! empty( $project['background'] ) ) : ?>
              <p class="company-background"><?php echo esc_html( $project['background'] ); ?></p>
            <?php endif; ?>
            <p class="lede"><?php echo esc_html( $project['description'] ); ?></p>
          </div>
          <div class="event-fact-grid reveal-stagger">
            <?php foreach ( $project['details'] as $label => $value ) : ?>
              <div><small><?php echo esc_html( $label ); ?></small><strong><?php echo esc_html( $value ); ?></strong></div>
            <?php endforeach; ?>
          </div>
          <div class="event-image-grid reveal-stagger">
            <?php foreach ( $project['images'] as $image ) : ?>
              <?php $orientation_class = ( ! empty( $image['height'] ) && ! empty( $image['width'] ) && (int) $image['height'] > (int) $image['width'] ) ? ' is-portrait' : ''; ?>
              <figure
                class="event-image-card<?php echo esc_attr( $orientation_class ); ?>"
                data-gallery-item
                data-tag="<?php echo esc_attr( $project['details']['Category'] ); ?>"
                data-title="<?php echo esc_attr( $project['heading'] ); ?>"
                data-description="<?php echo esc_attr( $project['description'] ); ?>"
              >
                <img
                  src="<?php echo esc_url( $theme_uri . '/assets/images/' . $image['file'] ); ?>"
                  alt="<?php echo esc_attr( $image['alt'] ); ?>"
                  width="<?php echo esc_attr( $image['width'] ); ?>"
                  height="<?php echo esc_attr( $image['height'] ); ?>"
                  loading="lazy"
                >
                <span class="zoom-icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="7" cy="7" r="5"/><path d="M7 4v6M4 7h6"/></svg></span>
              </figure>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    <?php endforeach; ?>

    <section class="seo-section compact-section">
      <div class="wrap solar-scope-section">
        <div class="seo-copy-block reveal">
          <h2><?php esc_html_e( 'Scope of Work', 'manila-exhibition' ); ?></h2>
          <p><?php esc_html_e( 'For Solar & Storage Live Philippines 2026, Manila Exhibition supported custom booth builds with fabrication, branded booth structures, graphics, product display areas, and onsite setup support.', 'manila-exhibition' ); ?></p>
        </div>
        <div class="seo-card reveal">
          <ul class="seo-check-list scope-grid">
            <?php foreach ( $page['scope'] as $scope_item ) : ?>
              <li><?php echo esc_html( $scope_item ); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>

    <section class="seo-section compact-section">
      <div class="wrap solar-scope-section">
        <div class="seo-card reveal">
          <h2><?php echo esc_html( $page['why']['heading'] ); ?></h2>
          <?php foreach ( $page['why']['body'] as $paragraph ) : ?>
            <p><?php echo esc_html( $paragraph ); ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if ( ! empty( $page['sections'] ) ) : ?>
    <section class="seo-section">
      <div class="wrap seo-content-grid">
        <article class="seo-main-copy">
          <?php foreach ( $page['sections'] as $section ) : ?>
            <div class="seo-copy-block reveal">
              <h2><?php echo esc_html( $section['heading'] ); ?></h2>
              <?php if ( ! empty( $section['body'] ) ) : ?>
                <?php foreach ( $section['body'] as $paragraph ) : ?>
                  <p><?php echo esc_html( $paragraph ); ?></p>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if ( ! empty( $section['list'] ) ) : ?>
                <ul class="seo-check-list">
                  <?php foreach ( $section['list'] as $item ) : ?>
                    <li><?php echo esc_html( $item ); ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </article>
        <aside class="seo-side-card reveal">
          <h2><?php esc_html_e( 'Build support under one team', 'manila-exhibition' ); ?></h2>
          <ul>
            <li><?php esc_html_e( '20+ years of design and build experience', 'manila-exhibition' ); ?></li>
            <li><?php esc_html_e( '2,000+ exhibition and event projects delivered', 'manila-exhibition' ); ?></li>
            <li><?php esc_html_e( 'Design, fabrication, logistics, installation, and turnover support', 'manila-exhibition' ); ?></li>
          </ul>
          <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>"><?php esc_html_e( 'Send Your Booth Brief', 'manila-exhibition' ); ?></a>
        </aside>
      </div>
    </section>
  <?php endif; ?>

  <?php if ( ! empty( $page['items'] ) ) : ?>
    <section class="seo-section seo-gallery-section">
      <div class="wrap">
        <div class="portfolio-subhead reveal">
          <span class="section-kicker"><?php echo 'portfolio' === $page['type'] ? esc_html__( 'Project gallery', 'manila-exhibition' ) : esc_html__( 'Selected pages', 'manila-exhibition' ); ?></span>
          <p><?php esc_html_e( 'Browse related project examples and continue into detailed pages where available.', 'manila-exhibition' ); ?></p>
        </div>
        <div class="seo-card-grid reveal-stagger">
          <?php foreach ( $page['items'] as $item ) : ?>
            <?php
            $item_url = isset( $item['url'] ) ? $item['url'] : '/case-studies/' . $item['slug'] . '/';
            $image    = isset( $item['image'] ) ? $item['image'] : 'portfolio/dalian-01.jpg';
            $is_solar_case_card = 'case-studies' === $page['type'] && false !== strpos( $item_url, 'solar-storage-live-philippines-2026-booth-projects' );
            ?>
            <article class="seo-project-card">
              <a href="<?php echo esc_url( manila_exhibition_inner_url( $item_url ) ); ?>">
                <?php if ( $is_solar_case_card ) : ?>
                  <div class="case-study-card-preview" aria-label="<?php esc_attr_e( 'Solar and Storage Live Philippines 2026 booth project preview', 'manila-exhibition' ); ?>">
                    <img class="case-study-card-preview-main" src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/blue-carbon-exhibition-booth-solar-storage-live-philippines-2026-01.png' ); ?>" alt="<?php esc_attr_e( 'Solar & Storage Live Philippines 2026 booth projects by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1448" height="1086">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/longi-exhibition-booth-solar-storage-live-philippines-2026-03.jfif' ); ?>" alt="<?php esc_attr_e( 'LONGi exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1536" height="2048">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/powerway-exhibition-booth-solar-storage-live-philippines-2026-01.jpeg' ); ?>" alt="<?php esc_attr_e( 'Powerway exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1600" height="1200">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/suninergy-exhibition-booth-solar-storage-live-philippines-2026-01.png' ); ?>" alt="<?php esc_attr_e( 'Suninergy exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1331" height="998">
                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/bluetti-exhibition-booth-solar-storage-live-philippines-2026-02.jpeg' ); ?>" alt="<?php esc_attr_e( 'BLUETTI exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1600" height="1200">
                  </div>
                <?php else : ?>
                  <img src="<?php echo esc_url( $theme_uri . '/assets/images/' . $image ); ?>" alt="<?php echo esc_attr( $item['title'] . ' by Manila Exhibition' ); ?>" loading="lazy">
                <?php endif; ?>
                <span class="tag"><?php echo esc_html( isset( $item['category'] ) ? $item['category'] : __( 'Project', 'manila-exhibition' ) ); ?></span>
                <h2><?php echo esc_html( $item['title'] ); ?></h2>
                <?php if ( ! empty( $item['description'] ) ) : ?>
                  <p><?php echo esc_html( $item['description'] ); ?></p>
                <?php endif; ?>
                <?php if ( ! empty( $item['cta'] ) ) : ?>
                  <span class="seo-card-cta"><?php echo esc_html( $item['cta'] ); ?><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 12L12 2M12 2H4M12 2V10"/></svg></span>
                <?php endif; ?>
              </a>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if ( 'case-study' === $page['type'] ) : ?>
    <section class="seo-section">
      <div class="wrap">
        <div class="seo-feature-image reveal">
          <img src="<?php echo esc_url( $theme_uri . '/assets/images/' . $page['image'] ); ?>" alt="<?php echo esc_attr( $page['h1'] . ' project image by Manila Exhibition' ); ?>" loading="lazy">
        </div>
        <div class="seo-fact-grid reveal-stagger">
          <div><small><?php esc_html_e( 'Project', 'manila-exhibition' ); ?></small><strong><?php echo esc_html( $page['project']['name'] ); ?></strong></div>
          <div><small><?php esc_html_e( 'Service type', 'manila-exhibition' ); ?></small><strong><?php echo esc_html( $page['project']['service'] ); ?></strong></div>
          <div><small><?php esc_html_e( 'Industry', 'manila-exhibition' ); ?></small><strong><?php echo esc_html( $page['project']['industry'] ); ?></strong></div>
          <div><small><?php esc_html_e( 'Location', 'manila-exhibition' ); ?></small><strong><?php echo esc_html( $page['project']['location'] ); ?></strong></div>
        </div>
        <?php if ( ! empty( $page['gallery'] ) ) : ?>
          <div class="event-image-grid reveal-stagger">
            <?php foreach ( $page['gallery'] as $image ) : ?>
              <figure
                class="event-image-card"
                data-gallery-item
                data-tag="<?php echo esc_attr( $page['project']['service'] ); ?>"
                data-title="<?php echo esc_attr( $page['h1'] ); ?>"
                data-description="<?php echo esc_attr( $page['lede'] ); ?>"
              >
                <img src="<?php echo esc_url( $theme_uri . '/assets/images/' . $image['file'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" loading="lazy">
                <span class="zoom-icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="7" cy="7" r="5"/><path d="M7 4v6M4 7h6"/></svg></span>
              </figure>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if ( ! empty( $page['related'] ) ) : ?>
    <section class="seo-section compact-section">
      <div class="wrap">
        <h2 class="seo-small-heading"><?php echo 'event-portfolio' === $page['type'] ? esc_html__( 'Related Services', 'manila-exhibition' ) : esc_html__( 'Related pages', 'manila-exhibition' ); ?></h2>
        <div class="related-links">
          <?php foreach ( $page['related'] as $link ) : ?>
            <a href="<?php echo esc_url( manila_exhibition_inner_url( $link['url'] ) ); ?>"><?php echo esc_html( $link['label'] ); ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if ( ! empty( $page['faqs'] ) ) : ?>
    <section class="seo-section">
      <div class="wrap narrow">
        <span class="eyebrow"><span class="dot"></span><?php esc_html_e( 'FAQ', 'manila-exhibition' ); ?></span>
        <h2 class="h-display seo-faq-title"><?php esc_html_e( 'Common questions', 'manila-exhibition' ); ?></h2>
        <div class="faq-list reveal" data-faq-list>
          <?php foreach ( $page['faqs'] as $faq ) : ?>
            <div class="faq-item" aria-expanded="false" data-faq-item>
              <button class="faq-q" type="button" data-faq-trigger><span><?php echo esc_html( $faq['question'] ); ?></span><span class="toggle" aria-hidden="true"></span></button>
              <div class="faq-a"><div class="faq-a-inner"><div class="faq-a-content"><?php echo esc_html( $faq['answer'] ); ?></div></div></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="contact seo-final-cta" id="contact">
    <div class="wrap" id="<?php echo 'event-portfolio' === $page['type'] ? esc_attr( 'start-a-project' ) : esc_attr( 'quote-form' ); ?>">
      <div class="cta-panel reveal">
        <div class="cta-copy">
          <?php if ( 'event-portfolio' === $page['type'] ) : ?>
            <span class="eyebrow" style="color:rgba(255,255,255,0.78);"><span class="dot"></span><?php esc_html_e( 'Start a project', 'manila-exhibition' ); ?></span>
            <h2 class="h-display" style="font-size:56px;"><?php esc_html_e( 'Start your exhibition, kiosk, or event build with a clear plan.', 'manila-exhibition' ); ?></h2>
            <p class="lede"><?php esc_html_e( 'Share your project type, location, event date, booth size, and references. We will prepare the next steps for a practical quote and timeline.', 'manila-exhibition' ); ?></p>
            <div class="contact-direct">
              <a href="mailto:admin@manilaexhibition.com" aria-label="<?php esc_attr_e( 'Email Manila Exhibition and Event Contractor', 'manila-exhibition' ); ?>">
                <div><small><?php esc_html_e( 'Email', 'manila-exhibition' ); ?></small>admin@manilaexhibition.com</div>
                <span class="arrow-go"><svg width="12" height="12" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12L12 2M12 2H4M12 2V10"/></svg></span>
              </a>
              <a href="tel:+639455189935" aria-label="<?php esc_attr_e( 'Call Manila Exhibition and Event Contractor', 'manila-exhibition' ); ?>">
                <div><small><?php esc_html_e( 'Phone / WhatsApp / Viber', 'manila-exhibition' ); ?></small>+63 945 518 9935</div>
                <span class="arrow-go"><svg width="12" height="12" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12L12 2M12 2H4M12 2V10"/></svg></span>
              </a>
              <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" aria-label="<?php esc_attr_e( 'Visit our studio', 'manila-exhibition' ); ?>">
                <div><small><?php esc_html_e( 'Studio', 'manila-exhibition' ); ?></small><?php esc_html_e( 'Sto Cristo, Corner Desta, Diversion Road, City of Malolos, Bulacan', 'manila-exhibition' ); ?></div>
                <span class="arrow-go"><svg width="12" height="12" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12L12 2M12 2H4M12 2V10"/></svg></span>
              </a>
            </div>
          <?php else : ?>
            <span class="eyebrow" style="color:rgba(255,255,255,0.78);"><span class="dot"></span><?php esc_html_e( 'Request a quote', 'manila-exhibition' ); ?></span>
            <h2 class="h-display" style="font-size:56px;"><?php esc_html_e( 'Ready to build a similar project?', 'manila-exhibition' ); ?></h2>
            <p class="lede"><?php esc_html_e( 'Send your booth, kiosk, retail display, commercial fit-out, event booth, or custom fabrication brief and we will help map the next practical step.', 'manila-exhibition' ); ?></p>
          <?php endif; ?>
        </div>
        <?php get_template_part( 'template-parts/quote-form', null, array( 'source' => $page['h1'] ) ); ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
get_footer();
