<?php get_header(); ?>

<main class="projects-archive">
  <div class="container">

    <header class="archive-header">
      <h1>Projects</h1>
      <p>A selection of things I’ve built and worked on.</p>
    </header>

    <section class="projects-grid">
    
    <?php
      if (have_posts()) {
        while (have_posts()){
          the_post();
          get_template_part('template-parts/project-parts');

        }
      }
      else{
        echo '<p class="empty-state">No projects yet. Check back soon.</p>';
      }
    ?>
    </section>


  </div>
</main>

<?php get_footer(); ?>
