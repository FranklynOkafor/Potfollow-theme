</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-left">
      &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
    </div>
    <div class="footer-right">
      <?php if (has_nav_menu('footer-menu')) : ?>
        <?php wp_nav_menu([
          'theme_location' => 'footer-menu',
          'menu_class'     => 'footer-nav',
        ]); ?>
      <?php endif; ?>
    </div>
  </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>

</html>