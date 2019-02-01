<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="<?php echo get_bloginfo('template_url') . '/assets/images/logo.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php wp_nav_menu(array(
                'theme_location' => 'top',
                'menu'            => '',
                'container'       => '',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'menu_class'      => 'navbar-nav text-uppercase ml-auto mr-5',
                'list_item_class' => 'nav-item',
                'link_class'      => 'nav-link js-scroll-trigger',
            )); ?>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" style="background-image: url('<?php the_field('section_one_background'); ?>')">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading text-center">
                    <?php the_field('section_one_title'); ?>
                </div>
                <div class="intro-lead-in text-center">
                    <?php the_field('section_one_subtitle'); ?>
                </div>
                <a class="btn btn-primary btn-xl btn-round btn-glow text-uppercase js-scroll-trigger" href="<?php echo get_field('section_one_button')['url']; ?>"><?php echo get_field('section_one_button')['text']; ?></a>
            </div>
        </div>
    </header>