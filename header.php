<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="apple-touch-icon" sizes="180x180" href="../Skyline/wp-content/themes/HYtheme/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="../Skyline/wp-content/themes/HYtheme/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../Skyline/wp-content/themes/HYtheme/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="../Skyline/wp-content/themes/HYtheme/favicons/manifest.json">
  <link rel="mask-icon" href="../Skyline/wp-content/themes/HYtheme/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>