<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="site-wrapper">
    <header class="site-header">
      <div class="container">
        <!-- Logo -->
        <div class="site-logo">
          <?php
          $front_page_id = get_option('page_on_front');
          $hero_name = get_field('hero_name', $front_page_id);
          ?>

          <a href="<?= esc_url(home_url('/')); ?>">
            <?= esc_html($hero_name ?: get_bloginfo('name')); ?>
          </a>

        </div>

        <!-- Navigation Menu -->
        <nav class="site-nav">
          <?php wp_nav_menu([
            'theme_location' => 'main_menu',
            'menu_class' => 'nav-menu',
          ]) ?>
        </nav>
        <button class="menu-toggle" aria-label="Toggle menu">
          ☰
        </button>

      </div>
    </header>
    <main class="site-content">
      <!-- Your page content goes here -->