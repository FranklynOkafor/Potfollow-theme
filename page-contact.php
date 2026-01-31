<?php get_header(); ?>

<main class="contact-page">

  <!-- HERO -->
  <section class="contact-hero">
    <div class="container">
      <h1><?php the_field('contact_heading'); ?></h1>
      <p><?php the_field('contact_subheading'); ?></p>
    </div>
  </section>

  <!-- CONTENT -->
  <section class="contact-content">
    <div class="container contact-grid">

      <!-- FORM -->
      <div class="contact-form">
        <h2>Send a Message</h2>

        <form method="post">
          <input type="text" name="name" placeholder="Your name" required>
          <input type="email" name="email" placeholder="Your email" required>
          <textarea name="message" placeholder="Your message" rows="5" required></textarea>

          <button type="submit" name="contact_submit" class="btn btn-primary">
            Send Message
          </button>
        </form>

        <?php
        if (isset($_POST['contact_submit'])) {
          $name    = sanitize_text_field($_POST['name']);
          $email   = sanitize_email($_POST['email']);
          $message = sanitize_textarea_field($_POST['message']);

          $to = get_field('contact_email');
          $subject = "New message from POTFOLLOW";
          $headers = ["Reply-To: $name <$email>"];

          wp_mail($to, $subject, $message, $headers);

          echo '<p class="form-success">Message sent successfully.</p>';
        }
        ?>
      </div>

      <!-- DETAILS -->
      <div class="contact-details">
        <h2>Contact Details</h2>

        <ul>
          <?php if ($email = get_field('contact_email')) : ?>
            <li><strong>Email:</strong> <?= esc_html($email); ?></li>
          <?php endif; ?>

          <?php if ($phone = get_field('contact_phone')) : ?>
            <li><strong>Phone:</strong> <?= esc_html($phone); ?></li>
          <?php endif; ?>

          <?php if ($location = get_field('contact_location')) : ?>
            <li><strong>Location:</strong> <?= esc_html($location); ?></li>
          <?php endif; ?>
        </ul>

        <!-- SOCIALS -->
        <div class="contact-socials">
          <?php
          $socials = [
            'GitHub' => 'contact_github',
            'LinkedIn' => 'contact_linkedin',
            'Twitter' => 'contact_twitter',
            'Instagram' => 'contact_instagram',
          ];

          foreach ($socials as $label => $field) :
            $url = get_field($field);
            if (!$url) continue;
          ?>
            <a href="<?= esc_url($url); ?>" target="_blank"><?= esc_html($label); ?></a>
          <?php endforeach; ?>
        </div>

      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>