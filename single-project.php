<?php
get_header();
the_post(); ?>
  <h2><?php the_title()?></h2>
  <?php
  if (has_post_thumbnail()) {
    the_post_thumbnail();
  }
get_footer();
?>