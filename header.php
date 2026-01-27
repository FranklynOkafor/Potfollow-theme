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
          <a href="<?= home_url() ?>?>"><?php bloginfo('name') ?></a>
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