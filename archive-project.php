<?php get_header(); ?>

<main class="projects-archive">
  <div class="container">

    <header class="archive-header">
      <h1>Projects</h1>
      <p>A selection of things I’ve built and worked on.</p>
    </header>

    <section class="projects-grid">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="project-card">

            <a href="<?php the_permalink(); ?>" class="project-image">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
              } ?>
            </a>

            <div class="project-content">

              <?php
              $status = get_field('status'); // ACF field name
              if ($status):
              ?>
                <span class="project-status <?php echo esc_attr($status); ?>">
                  <?php echo esc_html(ucfirst($status)); ?>
                </span>
              <?php endif; ?>


              <h2 class="project-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <div class="project-category">
                <?php the_terms(get_the_ID(), 'project_category'); ?>
              </div>

              <p class="project-excerpt">
                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
              </p>

            </div>
          </article>

      <?php endwhile;
      endif; ?>

    </section>

  </div>
</main>

<?php get_footer(); ?>