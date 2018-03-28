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

    <!-- Team six - Loading Scripts (voir teamSixScripts() dans functions.php -->
    <?php add_action('wp_enqueue_scripts', 'teamSixScripts'); ?>
    <!--Font Awesome integration script -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

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