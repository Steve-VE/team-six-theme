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
    <?php wp_head(); ?>
</head>
<body>