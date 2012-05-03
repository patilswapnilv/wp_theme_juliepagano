<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />

    <!-- Imported from main site -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/site.css" type="text/css" media="screen" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/fonts/bebas_neue/stylesheet.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/fonts/league_gothic/stylesheet.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/skeleton/base.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/skeleton/skeleton.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/skeleton/layout.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/site.css" media="screen" rel="stylesheet" type="text/css" />


    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
