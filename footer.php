    </main>

    <footer class="site-footer">
      <div class="footer-grid">
        <div class="footer-brand-block">
          <div class="brand">
            <img class="brand-logo-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/manila-exhibition-logo.png" alt="" aria-hidden="true">
            <span class="brand-name">
              <strong>Manila Exhibition</strong>
              <small>and Event Contractor</small>
            </span>
          </div>
          <p>Manila Exhibition designs, fabricates, delivers, and installs exhibition booths, mall kiosks, retail displays, commercial fit-outs, and event builds for brands across the Philippines.</p>
        </div>

        <div class="footer-nav">
          <h3>Quick Links</h3>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
          <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About</a>
          <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a>
          <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">Portfolio</a>
          <a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">Recent Projects</a>
          <a href="<?php echo esc_url( home_url( '/#process' ) ); ?>">Process</a>
          <a href="<?php echo esc_url( home_url( '/request-a-quote/' ) ); ?>">Contact</a>
        </div>

        <div class="footer-nav">
          <h3>Services</h3>
          <a href="<?php echo esc_url( home_url( '/services/exhibition-booth-design-build/' ) ); ?>">Exhibition Booth Design &amp; Build</a>
          <a href="<?php echo esc_url( home_url( '/services/exhibition-booth-contractor-philippines/' ) ); ?>">Exhibition Booth Contractor Philippines</a>
          <a href="<?php echo esc_url( home_url( '/services/mall-kiosk-fabrication/' ) ); ?>">Mall Kiosk Fabrication</a>
          <a href="<?php echo esc_url( home_url( '/services/retail-display-fabrication/' ) ); ?>">Retail Display Fabrication</a>
          <a href="<?php echo esc_url( home_url( '/services/commercial-fit-out/' ) ); ?>">Commercial Fit-Out</a>
          <a href="<?php echo esc_url( home_url( '/services/event-booth-fabrication/' ) ); ?>">Event Booth Fabrication</a>
          <a href="<?php echo esc_url( home_url( '/services/custom-fabrication/' ) ); ?>">Custom Fabrication</a>
        </div>

        <div class="footer-contact">
          <h3>Contact</h3>
          <a href="mailto:admin@manilaexhibition.com" aria-label="Email Manila Exhibition">admin@manilaexhibition.com</a>
          <a href="tel:+639455189935" aria-label="Call Manila Exhibition">+63 945 518 9935</a>
          <a href="https://wa.me/639455189935" aria-label="Message Manila Exhibition on WhatsApp">WhatsApp / Viber inquiry</a>
          <span>Studio Sto Cristo, Corner Desta, Diversion Road, City of Malolos, Bulacan</span>
        </div>
      </div>

      <div class="footer-area">
        Serving Manila, Metro Manila, Pasay, Makati, Quezon City, Taguig, BGC, Bulacan, and projects across the Philippines.
      </div>

      <div class="footer-bottom">
        <span>&copy; <span data-year>2026</span> Manila Exhibition and Event Contractor. All rights reserved.</span>
        <span>Exhibition booth contractor and custom fabrication company in the Philippines.</span>
      </div>

      <div class="footer-watermark" aria-hidden="true">MANILA EXHIBITION</div>
    </footer>

    <div class="lightbox" data-lightbox aria-hidden="true" aria-modal="true" role="dialog" aria-label="Project image viewer">
      <div class="lightbox-inner">
        <div class="lightbox-top">
          <span data-lightbox-counter>-</span>
          <button class="lightbox-close" type="button" data-lightbox-close aria-label="Close image preview">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 2L12 12M2 12L12 2"/></svg>
          </button>
        </div>
        <div class="lightbox-stage">
          <button class="lightbox-arrow prev" type="button" data-lightbox-prev aria-label="Previous image">
            <svg width="18" height="18" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 2L3 7L9 12"/></svg>
          </button>
          <img class="lightbox-image" data-lightbox-image alt="">
          <button class="lightbox-arrow next" type="button" data-lightbox-next aria-label="Next image">
            <svg width="18" height="18" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 2L11 7L5 12"/></svg>
          </button>
        </div>
        <div class="lightbox-caption" data-lightbox-caption>
          <span class="tag" data-lightbox-tag>-</span>
          <h3 data-lightbox-title>-</h3>
          <p data-lightbox-description></p>
        </div>
      </div>
    </div>

    <?php
    $is_more_work_page = function_exists( 'manila_exhibition_is_more_work_request' ) && manila_exhibition_is_more_work_request();
    $virtual_page      = function_exists( 'manila_exhibition_get_virtual_page' ) ? manila_exhibition_get_virtual_page() : null;
    $quote_link        = ( $is_more_work_page || ( $virtual_page && 'quote' === $virtual_page['type'] ) ) ? '#contact' : home_url( '/request-a-quote/' );
    ?>
    <div class="mobile-sticky-cta" aria-hidden="false">
      <a href="tel:+639455189935">Call</a>
      <a href="mailto:admin@manilaexhibition.com">Email</a>
      <a href="<?php echo esc_url( $quote_link ); ?>">Get quote</a>
    </div>


    <?php wp_footer(); ?>
  </body>
</html>
