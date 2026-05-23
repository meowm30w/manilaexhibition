<?php
/**
 * Reusable request quote form.
 *
 * @package Manila_Exhibition
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$quote_source = isset( $args['source'] ) ? $args['source'] : 'Manila Exhibition and Event Contractor website';
$form_title   = isset( $args['title'] ) ? $args['title'] : __( 'Request a project quote', 'manila-exhibition' );
?>

<form class="quote-form" data-quote-form novalidate action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" data-ajax-action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" method="post">
  <input type="hidden" name="action" value="manila_project_inquiry">
  <?php wp_nonce_field( 'manila_project_inquiry', 'manila_project_inquiry_nonce' ); ?>
  <input type="hidden" name="source" value="<?php echo esc_attr( $quote_source ); ?>">
  <div class="form-header">
    <h3><?php echo esc_html( $form_title ); ?></h3>
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
        <option value="Exhibition Booth"><?php esc_html_e( 'Exhibition Booth', 'manila-exhibition' ); ?></option>
        <option value="Mall Kiosk"><?php esc_html_e( 'Mall Kiosk', 'manila-exhibition' ); ?></option>
        <option value="Counter"><?php esc_html_e( 'Counter', 'manila-exhibition' ); ?></option>
        <option value="Retail Display"><?php esc_html_e( 'Retail Display', 'manila-exhibition' ); ?></option>
        <option value="Commercial Interior Fit-Out"><?php esc_html_e( 'Commercial Interior Fit-Out', 'manila-exhibition' ); ?></option>
        <option value="Custom Fabrication"><?php esc_html_e( 'Custom Fabrication', 'manila-exhibition' ); ?></option>
        <option value="Event / Activation Build"><?php esc_html_e( 'Event / Activation Build', 'manila-exhibition' ); ?></option>
        <option value="Other"><?php esc_html_e( 'Other', 'manila-exhibition' ); ?></option>
      </select>
    </label>
    <label>
      <span><?php esc_html_e( 'Project location', 'manila-exhibition' ); ?></span>
      <input type="text" name="projectLocation" required autocomplete="address-level2" placeholder="<?php esc_attr_e( 'Venue, city, or site location', 'manila-exhibition' ); ?>">
    </label>
    <label>
      <span><?php esc_html_e( 'Event date / target date', 'manila-exhibition' ); ?></span>
      <input type="text" name="eventDate" required placeholder="<?php esc_attr_e( 'Example: June 18, 2026', 'manila-exhibition' ); ?>">
    </label>
    <label>
      <span><?php esc_html_e( 'Booth or space size', 'manila-exhibition' ); ?></span>
      <input type="text" name="spaceSize" placeholder="<?php esc_attr_e( 'Example: 3m x 6m, 18 sqm', 'manila-exhibition' ); ?>">
    </label>
    <label>
      <span><?php esc_html_e( 'Venue', 'manila-exhibition' ); ?></span>
      <input type="text" name="venue" placeholder="<?php esc_attr_e( 'Example: SMX, WTC, mall, hotel', 'manila-exhibition' ); ?>">
    </label>
    <label>
      <span><?php esc_html_e( 'Budget range optional', 'manila-exhibition' ); ?></span>
      <select name="budgetRange">
        <option value=""><?php esc_html_e( 'Select if available...', 'manila-exhibition' ); ?></option>
        <option value="Below PHP 100,000"><?php esc_html_e( 'Below PHP 100,000', 'manila-exhibition' ); ?></option>
        <option value="PHP 100,000 to PHP 250,000"><?php esc_html_e( 'PHP 100,000 to PHP 250,000', 'manila-exhibition' ); ?></option>
        <option value="PHP 250,000 to PHP 500,000"><?php esc_html_e( 'PHP 250,000 to PHP 500,000', 'manila-exhibition' ); ?></option>
        <option value="PHP 500,000 to PHP 1,000,000"><?php esc_html_e( 'PHP 500,000 to PHP 1,000,000', 'manila-exhibition' ); ?></option>
        <option value="PHP 1,000,000+"><?php esc_html_e( 'PHP 1,000,000+', 'manila-exhibition' ); ?></option>
        <option value="Not sure yet"><?php esc_html_e( 'Not sure yet', 'manila-exhibition' ); ?></option>
      </select>
    </label>
    <label class="full">
      <span><?php esc_html_e( 'Project details / message', 'manila-exhibition' ); ?></span>
      <textarea name="message" required placeholder="<?php esc_attr_e( 'Tell us the booth size, floor plan, materials, references, budget range, deadline, and anything we should know.', 'manila-exhibition' ); ?>"></textarea>
    </label>
  </div>

  <div class="quote-checklist">
    <strong><?php esc_html_e( 'To help us quote accurately, please include:', 'manila-exhibition' ); ?></strong>
    <span><?php esc_html_e( 'event date, venue, booth size, floor plan, design references, target budget if available, and installation deadline.', 'manila-exhibition' ); ?></span>
  </div>

  <button type="submit" class="btn form-submit"><?php esc_html_e( 'Send request', 'manila-exhibition' ); ?></button>
  <?php if ( isset( $_GET['inquiry'] ) ) : ?>
    <?php if ( 'sent' === sanitize_text_field( wp_unslash( $_GET['inquiry'] ) ) ) : ?>
      <p class="form-status is-success" data-form-status aria-live="polite"><?php esc_html_e( 'Thank you for reaching out. Your inquiry has been received. Our team will review your project details and contact you within 1 to 2 business days to discuss your requirements, timeline, and next steps.', 'manila-exhibition' ); ?></p>
    <?php elseif ( 'failed' === sanitize_text_field( wp_unslash( $_GET['inquiry'] ) ) ) : ?>
      <p class="form-status is-error" data-form-status aria-live="polite"><?php esc_html_e( 'Sorry, the inquiry could not be sent. Please email admin@manilaexhibition.com directly.', 'manila-exhibition' ); ?></p>
    <?php endif; ?>
  <?php else : ?>
    <p class="form-status" data-form-status aria-live="polite" hidden></p>
  <?php endif; ?>
</form>
