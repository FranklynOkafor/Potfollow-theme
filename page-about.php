<?php get_header(); ?>

<main class="about-page">

  <!-- HERO -->
  <section class="about-hero">
    <div class="container">
      <h1><?php the_field('about_heading'); ?></h1>
      <p><?php the_field('about_subheading'); ?></p>
    </div>
  </section>

  <!-- BIO -->
  <section class="about-bio">
    <div class="container about-grid">

      <div class="about-image">
        <?php
        $image = get_field('about_image');
        if ($image) :
        ?>
          <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
        <?php endif; ?>
      </div>

      <div class="about-content">
        <?php the_field('about_content'); ?>
      </div>

    </div>
  </section>

  <!-- HIGHLIGHTS -->
  <section class="about-highlights">
    <div class="container highlight-grid">

      <?php for ($i = 1; $i <= 3; $i++) :
        $text = get_field("about_highlight_{$i}");
        if (!$text) continue;
      ?>
        <div class="highlight-card">
          <p><?= esc_html($text); ?></p>
        </div>
      <?php endfor; ?>

    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="container cta-wrapper">

      <?php $front_page_id = get_option('page_on_front');?>
      <div class="cta-content">
        <h2><?php the_field('cta_heading', $front_page_id); ?></h2>
        <p><?php the_field('cta_text', $front_page_id); ?></p>
      </div>

      <div class="cta-actions">
        <?php if (get_field('cta_primary_link', $front_page_id)) : ?>
          <a href="<?php echo esc_url(get_field('cta_primary_link', $front_page_id)); ?>" class="btn btn-primary">
            <?php the_field('cta_primary_text', $front_page_id); ?>
          </a>
        <?php endif; ?>

        <?php if (get_field('cta_secondary_link', $front_page_id)) : ?>
          <a href="<?php echo esc_url(get_field('cta_secondary_link', $front_page_id)); ?>" class="btn btn-outline">
            <?php the_field('cta_secondary_text', $front_page_id); ?>
          </a>
        <?php endif; ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>