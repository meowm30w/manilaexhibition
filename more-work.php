<?php
/**
 * More Work gallery page.
 *
 * @package Manila_Exhibition
 */

get_header();

$theme_uri        = get_template_directory_uri();
$solar_work_images = array(
    array( 'file' => 'longi-exhibition-booth-solar-storage-live-philippines-2026-03.jfif', 'title' => 'LONGi', 'alt' => 'LONGi exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition' ),
    array( 'file' => 'blue-carbon-exhibition-booth-solar-storage-live-philippines-2026-01.png', 'title' => 'Blue Carbon', 'alt' => 'Blue Carbon exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition' ),
    array( 'file' => 'powerway-exhibition-booth-solar-storage-live-philippines-2026-01.jpeg', 'title' => 'Powerway', 'alt' => 'Powerway exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition' ),
    array( 'file' => 'suninergy-exhibition-booth-solar-storage-live-philippines-2026-01.png', 'title' => 'Suninergy', 'alt' => 'Suninergy exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition' ),
    array( 'file' => 'bluetti-exhibition-booth-solar-storage-live-philippines-2026-02.jpeg', 'title' => 'BLUETTI', 'alt' => 'BLUETTI exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition' ),
    array( 'file' => 'hd-solar-exhibition-booth-solar-storage-live-philippines-2026-updated-01.png', 'title' => 'HD Solar', 'alt' => 'HD Solar exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition' ),
);
$more_work_images = array(
    array( 'file' => 'more-work-01.jpg', 'title' => 'Rolling Bet' ),
    array( 'file' => 'more-work-02.jpg', 'title' => 'Alphaess' ),
    array( 'file' => 'more-work-03.jpg', 'title' => 'Asiana Airlines' ),
    array( 'file' => 'more-work-04.jpg', 'title' => 'Asiana Airlines' ),
    array( 'file' => 'more-work-05.png', 'title' => 'ET' ),
    array( 'file' => 'foen-exhibition-booth-update.png', 'title' => 'FOEN', 'alt' => 'FOEN exhibition booth project by Manila Exhibition' ),
    array( 'file' => 'more-work-07.jpg', 'title' => 'Friesland Campina' ),
    array( 'file' => 'hawle-exhibition-booth-update.png', 'title' => 'Hawle', 'alt' => 'Hawle exhibition booth project by Manila Exhibition' ),
    array( 'file' => 'more-work-09.jpg', 'title' => 'Insight to Life' ),
    array( 'file' => 'more-work-10.jpg', 'title' => 'Johnstech PH' ),
    array( 'file' => 'more-work-11.png', 'title' => 'Johnstech Philippines' ),
    array( 'file' => 'more-work-12.jpg', 'title' => 'Movenpick' ),
    array( 'file' => 'more-work-13.jpg', 'title' => 'S-Power Corporation' ),
    array( 'file' => 'more-work-14.jpg', 'title' => 'Zbeny' ),
    array( 'file' => 'more-work-15.jpg', 'title' => 'Zeis' ),
    array( 'file' => 'more-work-16.jpg', 'title' => 'Zeis' ),
    array( 'file' => 'more-work-17.jpg', 'title' => 'Zeiss' ),
);
?>

      <section class="more-work-hero" id="top" aria-labelledby="more-work-title">
        <div class="more-work-hero-inner">
          <div class="reveal">
            <span class="eyebrow"><span class="dot"></span><?php esc_html_e( 'More project work', 'manila-exhibition' ); ?></span>
            <h1 id="more-work-title" class="h-display"><?php esc_html_e( 'See the Work. Trust the Craft.', 'manila-exhibition' ); ?></h1>
          </div>
          <p class="lede reveal"><?php esc_html_e( 'Every detail reflects the skill, care, and purpose behind what we create.', 'manila-exhibition' ); ?></p>
        </div>
      </section>

      <section class="more-work-gallery-section" aria-label="<?php esc_attr_e( 'More project gallery', 'manila-exhibition' ); ?>">
        <div class="more-work-gallery-wrap">
          <article class="event-portfolio-card reveal">
            <span class="solar-image-slider" aria-label="<?php esc_attr_e( 'Solar & Storage Live Philippines 2026 booth project images', 'manila-exhibition' ); ?>">
              <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/longi-exhibition-booth-solar-storage-live-philippines-2026-03.jfif' ); ?>" alt="<?php esc_attr_e( 'LONGi exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1536" height="2048" style="--slide-index:0;">
              <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/blue-carbon-exhibition-booth-solar-storage-live-philippines-2026-01.png' ); ?>" alt="<?php esc_attr_e( 'Blue Carbon exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1448" height="1086" style="--slide-index:1;">
              <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/powerway-exhibition-booth-solar-storage-live-philippines-2026-01.jpeg' ); ?>" alt="<?php esc_attr_e( 'Powerway exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1600" height="1200" style="--slide-index:2;">
              <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/suninergy-exhibition-booth-solar-storage-live-philippines-2026-01.png' ); ?>" alt="<?php esc_attr_e( 'Suninergy exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1331" height="998" style="--slide-index:3;">
              <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/bluetti-exhibition-booth-solar-storage-live-philippines-2026-02.jpeg' ); ?>" alt="<?php esc_attr_e( 'BLUETTI exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1600" height="1200" style="--slide-index:4;">
              <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/hd-solar-exhibition-booth-solar-storage-live-philippines-2026-updated-01.png' ); ?>" alt="<?php esc_attr_e( 'HD Solar exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'manila-exhibition' ); ?>" loading="lazy" width="1448" height="1086" style="--slide-index:5;">
            </span>
            <div>
              <span class="section-kicker"><?php esc_html_e( 'Exhibition Booth Design & Build', 'manila-exhibition' ); ?></span>
              <h2><?php esc_html_e( 'Solar & Storage Live Philippines 2026', 'manila-exhibition' ); ?></h2>
              <p><?php esc_html_e( 'Custom exhibition booth projects for LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, and HD Solar, including branded booth structures, product display areas, graphics, lighting, and onsite setup support.', 'manila-exhibition' ); ?></p>
              <p class="event-portfolio-meta"><?php esc_html_e( 'Solar / Energy Storage / Renewable Energy', 'manila-exhibition' ); ?></p>
              <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/case-studies/solar-storage-live-philippines-2026-booth-projects/' ) ); ?>">
                <?php esc_html_e( 'View Event Projects', 'manila-exhibition' ); ?>
                <svg viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 12L12 2M12 2H4M12 2V10"/></svg>
              </a>
            </div>
          </article>
          <div class="gallery more-work-gallery reveal-stagger">
            <?php foreach ( $solar_work_images as $item ) : ?>
              <figure class="gallery-item" data-gallery-item data-tag="<?php esc_attr_e( 'Solar Event Project', 'manila-exhibition' ); ?>" data-title="<?php echo esc_attr( $item['title'] ); ?>" data-description="<?php echo esc_attr( sprintf( __( '%s exhibition booth for Solar & Storage Live Philippines 2026.', 'manila-exhibition' ), $item['title'] ) ); ?>">
                <img src="<?php echo esc_url( $theme_uri . '/assets/images/recent-event/' . $item['file'] ); ?>" alt="<?php echo esc_attr( $item['alt'] ); ?>" loading="lazy">
                <span class="zoom-icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="7" cy="7" r="5"/><path d="M7 4v6M4 7h6"/></svg></span>
                <figcaption class="gallery-item-meta"><span class="tag"><?php esc_html_e( 'Solar Event Project', 'manila-exhibition' ); ?></span><h3><?php echo esc_html( $item['title'] ); ?></h3></figcaption>
              </figure>
            <?php endforeach; ?>
            <?php foreach ( $more_work_images as $item ) : ?>
              <?php
              $project_title = $item['title'];
              $image         = $item['file'];
              ?>
              <figure class="gallery-item" data-gallery-item data-tag="<?php esc_attr_e( 'Project Gallery', 'manila-exhibition' ); ?>" data-title="<?php echo esc_attr( $project_title ); ?>" data-description="<?php echo esc_attr( sprintf( __( '%s project image from the Manila Exhibition and Event Contractor gallery.', 'manila-exhibition' ), $project_title ) ); ?>">
                <img src="<?php echo esc_url( $theme_uri . '/assets/images/more-work/' . $image ); ?>" alt="<?php echo esc_attr( isset( $item['alt'] ) ? $item['alt'] : sprintf( __( '%s project work by Manila Exhibition and Event Contractor', 'manila-exhibition' ), $project_title ) ); ?>" loading="lazy">
                <span class="zoom-icon" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="7" cy="7" r="5"/><path d="M7 4v6M4 7h6"/></svg></span>
                <figcaption class="gallery-item-meta"><span class="tag"><?php esc_html_e( 'Project Gallery', 'manila-exhibition' ); ?></span><h3><?php echo esc_html( $project_title ); ?></h3></figcaption>
              </figure>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="contact" id="contact" data-anchor="contact" aria-labelledby="contact-title">
        <div class="wrap">
          <div class="cta-panel reveal">
            <div class="cta-copy">
              <span class="eyebrow" style="color:rgba(255,255,255,0.78);"><span class="dot"></span><?php esc_html_e( 'Start a project', 'manila-exhibition' ); ?></span>
              <h2 id="contact-title" class="h-display" style="font-size:56px;"><?php esc_html_e( 'Start your exhibition, kiosk, or event build with a clear plan.', 'manila-exhibition' ); ?></h2>
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
            </div>

            <form class="quote-form" data-quote-form novalidate action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" data-ajax-action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>">
              <input type="hidden" name="action" value="manila_project_inquiry">
              <?php wp_nonce_field( 'manila_project_inquiry', 'manila_project_inquiry_nonce' ); ?>
              <input type="hidden" name="source" value="Manila Exhibition and Event Contractor more work page">
              <div class="form-header">
                <h3><?php esc_html_e( 'Request a project quote', 'manila-exhibition' ); ?></h3>
                <p><?php esc_html_e( 'Your inquiry will be sent securely to the Manila Exhibition project team. We respond within one business day.', 'manila-exhibition' ); ?></p>
              </div>

              <div class="form-grid">
                <label>
                  <span><?php esc_html_e( 'Name', 'manila-exhibition' ); ?></span>
                  <input type="text" name="name" required autocomplete="name" placeholder="<?php esc_attr_e( 'Your name', 'manila-exhibition' ); ?>">
                </label>
                <label>
                  <span><?php esc_html_e( 'Company', 'manila-exhibition' ); ?></span>
                  <input type="text" name="company" autocomplete="organization" placeholder="<?php esc_attr_e( 'Brand or company', 'manila-exhibition' ); ?>">
                </label>
                <label>
                  <span><?php esc_html_e( 'Email', 'manila-exhibition' ); ?></span>
                  <input type="email" name="email" required autocomplete="email" placeholder="<?php esc_attr_e( 'you@brand.com', 'manila-exhibition' ); ?>">
                </label>
                <label>
                  <span><?php esc_html_e( 'Phone', 'manila-exhibition' ); ?></span>
                  <input type="tel" name="phone" required autocomplete="tel" placeholder="<?php esc_attr_e( '+63 945 518 9935', 'manila-exhibition' ); ?>">
                </label>
                <label>
                  <span><?php esc_html_e( 'Project type', 'manila-exhibition' ); ?></span>
                  <select name="projectType" required>
                    <option value=""><?php esc_html_e( 'Select project type...', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Exhibition Booth', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Exhibition Booth', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Mall Kiosk', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Mall Kiosk', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Counter', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Counter', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Retail Display', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Retail Display', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Commercial Interior Fit-Out', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Commercial Interior Fit-Out', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Custom Fabrication', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Custom Fabrication', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Event / Activation Build', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Event / Activation Build', 'manila-exhibition' ); ?></option>
                    <option value="<?php esc_attr_e( 'Other', 'manila-exhibition' ); ?>"><?php esc_html_e( 'Other', 'manila-exhibition' ); ?></option>
                  </select>
                </label>
                <label>
                  <span><?php esc_html_e( 'Project location', 'manila-exhibition' ); ?></span>
                  <input type="text" name="projectLocation" required autocomplete="address-level2" placeholder="<?php esc_attr_e( 'Venue, city, or site location', 'manila-exhibition' ); ?>">
                </label>
                <label class="full">
                  <span><?php esc_html_e( 'Event date / target date', 'manila-exhibition' ); ?></span>
                  <input type="text" name="eventDate" required placeholder="<?php esc_attr_e( 'Example: June 18, 2026', 'manila-exhibition' ); ?>">
                </label>
                <label class="full">
                  <span><?php esc_html_e( 'Project details / message', 'manila-exhibition' ); ?></span>
                  <textarea name="message" required placeholder="<?php esc_attr_e( 'Tell us the booth size, floor plan, materials, references, budget range, deadline, and anything we should know.', 'manila-exhibition' ); ?>"></textarea>
                </label>
              </div>
              <button type="submit" class="btn form-submit"><?php esc_html_e( 'Send request', 'manila-exhibition' ); ?></button>
              <p class="form-status" data-form-status aria-live="polite" hidden></p>
            </form>
          </div>
        </div>
      </section>

<?php
get_footer();
