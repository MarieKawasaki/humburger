<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="新しくオープンしたハンバーガー店の紹介をするサイトです。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <?php wp_head(); ?>
  </head>


    <body <?php body_class(); ?>>
        <div class="wrapper">

            <div class="l-container">


                <header class="l-header p-header">

                    <button class="p-header__menu-button c-button--menu">Menu</button>

                    <div class="p-header__flex">

                        <h1 class="p-header__logo c-logo">          
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Humburgerロゴ"></a>
                        </h1>

                        <?php get_search_form(); ?>
                    </div>
                    
                    <div class="p-header__mask c-mask"></div>

                </header>