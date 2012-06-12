<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />

    <!-- Imported css from main site -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/site.css" type="text/css" media="screen" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/fonts/bebas_neue/stylesheet.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/fonts/league_gothic/stylesheet.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/site.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Imported js from main site -->
    <script src="<?php bloginfo( 'template_directory' ); ?>/javascripts/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/javascripts/jquery.timeago.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/javascripts/jquery.ThreeDots.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/javascripts/helpers.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/javascripts/handlebars-0.9.0.pre.5.js" type="text/javascript"></script>


    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body class="blog">
    <header>
      <div class='container'>
        <h1 class='logo'>
          <a href="/">Julie Pagano</a>
        </h1>
        <nav>
          <ul class='nav'>
            <li>
              <a class="index" href="/">home</a>
            </li>
            <li>
              <a class="about" href="/about">about</a>
            </li>
            <li>
              <a class="blog active" href="/blog">blog</a>
            </li>
            <li>
              <a class="contact" href="/contact">contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
