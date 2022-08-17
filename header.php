<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Humburger Site</title>
    <meta name="description" content="新しくオープンしたハンバーガー店の紹介をするサイトです。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>


    <body <?php body_class(); ?>>
        <div class="wrapper">

            <div class="l-container">


                <header class="l-header p-header">

                    <button class="p-header__menu-button c-button--menu">Menu</button>

                    <div class="p-header__flex">

                        <h1 class="p-header__logo c-logo">          
                            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                        </h1>

                        <?php get_search_form(); ?>
                    </div>
                    
                    <div class="p-header__mask c-mask"></div>

                </header>