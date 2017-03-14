<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri() ?>/assets/img/urku-ico.svg">
  </head>
  <?php wp_head(); ?>
  <body <?php body_class('top-fixed'); ?>>

<div style="display: none">
  <?php

  $svgSprite = file_get_contents(get_template_directory_uri(). '/assets/img/symbols.svg');
  ?>
</div>
    <header class="ae-container-fluid ae-container-fluid--full rk-header ">
      <input type="checkbox" id="mobile-menu" class="rk-mobile-menu">
      <label for="mobile-menu">
        <svg>
          <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/symbols.svg#bar"></use>
        </svg>
        <svg>
          <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/symbols.svg#bar"></use>
        </svg>
        <svg>
          <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/symbols.svg#bar"></use>
        </svg>
      </label>
      <div class="ae-container-fluid rk-topbar">
        <h1 class="rk-logo"><a href="<?php echo home_url();?>">urku portfolio<sup>tm</sup></a></h1>
        <nav class="rk-navigation">

          <?php
               /**
              * Displays a navigation menu
              * @param array $args Arguments
              */
              $args = array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'rk-menu'
              );

              wp_nav_menu( $args );
           ?>
          <form class="rk-search">
            <input type="text" placeholder="Search" id="urku-search" class="rk-search-field">
            <label for="urku-search">
              <svg>
                <use xlink:href="<?php echo get_template_directory_uri() ?>/n-search"></use>
              </svg>
            </label>
          </form>
        </nav>
      </div>
    </header>

    <b style="position: fixed; left:5%; top:5%; z-index: 10">
         <?php
         global $template;
         print_r(basename($template));
         ?>
    </b>
