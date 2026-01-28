<?php
get_header(); ?>
<main class="single-product">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <!-- // HERO SECTION -->
      <section class="project-hero">

        <h1 class="project-title"><?php the_title(); ?></h1>

        <div class="project-meta">

          <div class="project-category">
            <?php the_terms(get_the_ID(), 'product_category'); ?>
          </div>

          <?php
          $status = get_field('status'); // ACF field
          if ($status) :
          ?>
            <span class="project-status <?= esc_attr($status); ?>">
              <?php echo esc_html(($status));?>
            </span>
          <?php endif; ?>

        </div>

      </section>



      <!-- FEATURED IMAGE -->
      <?php
      if (has_post_thumbnail()) { ?>
        <section class="project-image">
          <?php the_post_thumbnail('large') ?>
        </section>
      <?php
      }
      ?>


      <!-- DESCRIPTION -->
      <section class="project-description">
        <?php the_content() ?>
      </section>


      <!-- PROJECT DETAILS -->
      <section class="project-details">

        <h3>Project Details</h3>

        <ul>
          <?php if ($tech = get_field('tech_stack')) : ?>
            <li><strong>Tech Stack:</strong> <?= esc_html($tech); ?></li>
          <?php endif; ?>

          <?php $live = get_field('project_url');

          if ($live) :
          ?>
            <a href="<?= esc_url($live); ?>" target="_blank" class="demo_link">Live Demo</a>
          <?php endif; ?>


          <?php $github = get_field('github_link');

          if ($github) :
          ?>
            <a href="<?= esc_url($github['url']); ?>" target="<?= esc_attr($github['target'] ?: '_self'); ?>">
              <?= esc_html($github['title']); ?> Github repo
            </a>
          <?php endif; ?>

        </ul>

      </section>


      <!-- BACK TO PROJECTS LINK -->
      <a href="<?php echo get_post_type_archive_link('project'); ?>" class="back-projects">
        ← Back to Projects
      </a>



  <?php



    }
  }

  ?>
</main>
<?php get_footer();
?>