<!DOCTYPE html>
<html <?= language_attributes(); ?> >
<head>
    <meta charset="<?= bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title><?= bloginfo("title"); ?></title>

    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>"  type="text/css" media="screen">

    <!-- Team six - Daniel - Appel de la function load_font définie dans functions.php (Google Fonts) -->
    <?php add_action('wp_enqueue_scripts', 'load_fonts'); ?>

    <!-- Team six - Daniel - Appel de la function theme_js définie dans functions.php (bootstrap.min.js) -->
    <?php add_action('wp_enqueue_scripts', 'theme_js'); ?>

    <!-- Team six - Daniel - Appel de la function theme_styles définie dans functions.php (bootstrap.min.css) -->
    <?php add_action('wp_enqueue_scripts', 'theme_styles'); ?>

<!--Tean six - Félicien -header -->
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-social">
        <div class="logo-image">
        <img src="logo.png" alt="Digest">
        </div>

    <div class="social-network">
    
        <ul class="favicons">
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Search</li>
        </ul>
  
    </div>
    </div>

    <div class="navbar">
        <ul class="text-center">
            <li><a href="">NUTRITION</a></li>
            <li><a href="">WELLNESS</a></li>
            <li><a href="">LIFESTYLE</a></li>
            <li><a href="">COMMUNITY</a></li>
    </ul>
    </div>
    
</header>
