<?php
// POTFOLLOW THEME STARTUP
function potfollow_theme_startup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'potfollow_theme_startup');


// REGISTER MENUS
function potfollow_register_menus()
{
  register_nav_menus(array(
    'main_menu' => 'Main Menu',
    'footer-menu' => 'Footer Menu',
  ));
}
add_action('after_setup_theme', 'potfollow_register_menus');


// ENQUEUEING STYLES AND SCRIPTS 
function potfollow_enqueue_assets()
{
  // Main CSS
  wp_enqueue_style(
    'potfollow-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    filemtime(get_template_directory() . '/assets/css/main.css') // cache busting
  );


  // Front Page CSS

  wp_enqueue_style(
    'front-page-main',
    get_template_directory_uri() . '/assets/css/front-page.css',
    [],
    filemtime(get_template_directory() . '/assets/css/front-page.css') // cache busting
  );

  // ABOUT PAGE
  wp_enqueue_style(
    'about-page-main',
    get_template_directory_uri() . '/assets/css/about.css',
    [],
    filemtime(get_template_directory() . '/assets/css/about.css') // cache busting
  );

  // Projects styles
  // if (is_post_type_archive('project') || is_singular('project')) {
    wp_enqueue_style(
      'theme',
      get_template_directory_uri() . '/assets/css/projects.css',
      [],
      filemtime(get_template_directory() . '/assets/css/projects.css') // cache busting
    );
  // }

  

  // MAIN JS
  wp_enqueue_script(
    'potfollow-main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true

  );
}

add_action('wp_enqueue_scripts', 'potfollow_enqueue_assets');
