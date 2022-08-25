<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( /* HTML5のタグで出力 */
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

    //タイトル出力
    function wpbeg_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'wpbeg_title' );

    function wpbeg_script(){
        wp_enqueue_style( 'ress',get_theme_file_uri( '/css/ress.min.css' ), array() );
        wp_enqueue_style( 'mplus','//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css',array(),'' );
        wp_enqueue_style( 'mplus-j','//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css',array(),'' );
        wp_enqueue_style( 'fontsgoogleapis','//fonts.googleapis.com',array(),'' );
        wp_enqueue_style( 'fontsgoogleapis','//fonts.gstatic.com',array(),'' );
        wp_enqueue_style( 'robot','//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',array(),'' );
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style( 'rtbread',get_theme_file_uri( '/css/style.css' ), array() );
        wp_enqueue_script( 'jquery',get_theme_file_uri( '/js/jquery-3.6.0.min.js' ),'jquery', true );
        wp_enqueue_script( 'script',get_theme_file_uri( '/js/script.js' ),'jquery', true );
    }
    
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );
