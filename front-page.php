<?php get_header(); ?>

<main class="front-page">

  <!-- HERO -->
  <section class="hero">
    <div class="hero-inner">
      <h1><?php the_field('hero_name'); ?></h1>
      <p class="hero-tagline"><?php the_field('hero_tagline'); ?></p>
      <p class="hero-description"><?php the_field('hero_description'); ?></p>
      <?php
      $btn = get_field('hero_button_link');
      if ($btn):
      ?>
        <a href="<?= esc_url($btn['url']); ?>" class="btn">
          <?= esc_html(get_field('hero_button_text')); ?>
        </a>
      <?php endif; ?>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <?php
  $front_page_id = get_option('page_on_front');
  ?>

  <section class="about-section">
    <div class="about-inner">

      <div class="about-text">
        <h2><?= esc_html(get_field('about_title', $front_page_id)); ?></h2>
        <p><?= esc_html(get_field('about_text', $front_page_id)); ?></p>
      </div>

      <div class="about-meta">
        <ul>
          <?php if (have_rows('about_list', $front_page_id)) : ?>
            <?php while (have_rows('about_list', $front_page_id)) : the_row(); ?>
              <li><?= esc_html(get_sub_field('item')); ?></li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </section>



  <!-- FEATURED PROJECTS -->
  <section class="featured-projects">
    <h2>Featured Projects</h2>

    <?php
    $projects = new WP_Query([
      'post_type' => 'project',
      'posts_per_page' => 3,
    ]); ?>
    <section class="projects-grid">
      <?php if ($projects->have_posts()) {
        while ($projects->have_posts()) {
          $projects->the_post();
          get_template_part('template-parts/project-parts');
        }
      }
      wp_reset_postdata();

      ?>
    </section>

  </section>

  <!-- Skills Section  -->
  <section class="skills-section">
    <div class="container">

      <header class="section-header">
        <h2>Skills & Tech Stack</h2>
        <p>Technologies and tools I work with</p>
      </header>

      <div class="skills-grid">

        <?php
        $front_id = get_option('page_on_front');

        for ($i = 1; $i <= 3; $i++) :
          $name  = get_field("skill_{$i}_title", $front_id);
          $level = get_field("skill_{$i}_level", $front_id);

          if (!$name) continue;
        ?>
          <div class="skill-card">
            <div class="skill-top">
              <span class="skill-name"><?= esc_html($name); ?></span>
              <span class="skill-percent"><?= esc_html($level); ?>%</span>
            </div>

            <div class="skill-bar">
              <span class="skill-fill" data-level="<?= esc_attr($level); ?>"></span>
            </div>
          </div>
        <?php endfor; ?>

      </div>
    </div>
  </section>




  <!-- CTA Section  -->
  <section class="cta-section">
    <div class="container cta-wrapper">

      <div class="cta-content">
        <h2><?php the_field('cta_heading'); ?></h2>
        <p><?php the_field('cta_text'); ?></p>
      </div>

      <div class="cta-actions">
        <?php if (get_field('cta_primary_link')) : ?>
          <a href="<?php echo esc_url(get_field('cta_primary_link')); ?>" class="btn btn-primary">
            <?php the_field('cta_primary_text'); ?>
          </a>
        <?php endif; ?>

        <?php if (get_field('cta_secondary_link')) : ?>
          <a href="<?php echo esc_url(get_field('cta_secondary_link')); ?>" class="btn btn-outline">
            <?php the_field('cta_secondary_text'); ?>
          </a>
        <?php endif; ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>