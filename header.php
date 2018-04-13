<!DOCTYPE html>
<html <?= language_attributes(); ?> >
<head>
    <meta charset="<?= bloginfo("charset");?>">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-language" content="en-us" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="resource-type" content="document" />
    <meta name="author" content="Foodog Team-Six" />
    <meta name="contact" content="info@foodog.com" />
    <meta name="copyright" content="Copyright (c)2018 
    Team-six. All Rights Reserved." />
    <meta name="description" content="Foodog - Changing the way we feed our pet. dog lifestyle, wellness, community" />
    <meta name="keywords" content="dog, feeding, practices, tips, food, wellness, lifestyle, community dogs" />

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <title><?= bloginfo("title"); ?></title>

    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>"  type="text/css" media="screen">

    <!-- TEAM SIX - Loading Scripts (voir teamSixScripts() dans functions.php -->
    <?php add_action('wp_enqueue_scripts', 'teamSixScripts'); ?>
    <!--TEAM SIX - Font Awesome integration script -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
</head>
<body>
    
<header>
<?php if (is_single()) : ?>
    <?php get_template_part('template-parts/content', 'subheader'); ?>
<?php else : ?>
    <?php wp_nav_menu(array(
        'menu' => 'mainheader_social_menu'
    )); ?>

    <div class="head-menu">
        <h1>
            <a href="<?php echo get_home_url(); ?>">
                <?php bloginfo('title'); ?>
            </a>
        </h1>
        <ul>
            <?php wp_list_categories(array(
                'title_li' => '',
                'orderby'    => 'id',
                'include' => array( 3, 4, 5, 6 ),
                'hide_empty' => false
            )); ?>
        </ul>
        <hr>
    </div>
<?php endif; ?>
</header>
