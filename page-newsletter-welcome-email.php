<?php
/**
 * Newsletter Welcome Email page template — converted from newsletter-welcome-email.html.
 *
 * Template Name: Newsletter Welcome Email
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main class="newsletter-email-preview">
      <div class="site-container">
        <p class="newsletter-email-preview__label">Automated welcome email preview</p>

        <article class="newsletter-welcome-email" aria-label="Welcome email">
          <header class="newsletter-welcome-email__head">
            <img
              class="newsletter-welcome-email__logo"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bright-dreamers-logo-removebg-preview.png' ); ?>"
              alt="Bright Dreamers"
              width="200"
              height="60"
              decoding="async"
            />
            <p class="newsletter-welcome-email__subject">Subject: Welcome to Bright Dreamers <span aria-hidden="true">💛</span></p>
          </header>

          <div class="newsletter-welcome-email__body">
            <p>Hi <strong>[First Name]</strong>,</p>

            <p><strong>Welcome to Bright Dreamers!</strong></p>

            <p>
              Thank you for subscribing and becoming part of our growing community.
            </p>

            <p>
              From time to time, we&rsquo;ll share inspiring stories, new experiences and projects,
              volunteer and partnership opportunities, community highlights, and ways you can help
              young ideas grow.
            </p>

            <p>
              Bright Dreamers is a place where children are encouraged to dream, create, explore
              their ideas, and turn them into meaningful real-world experiences.
            </p>

            <p>We&rsquo;re happy to have you with us.</p>

            <p class="newsletter-welcome-email__tagline">Dream &bull; Create &bull; Grow &bull; Give</p>

            <p class="newsletter-welcome-email__signoff">Bright Dreamers</p>

            <p class="newsletter-welcome-email__fineprint">
              You can unsubscribe from our emails at any time using the unsubscribe link at the
              bottom of each message.
            </p>
          </div>
        </article>
      </div>
    </main>

<?php
get_footer();
