<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
</head>

<body <?php body_class('main-container'); ?>>
    <?php wp_body_open(); ?>

    <div>
        <header class="backblc">
            <a href="http://localhost/planty/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="logo Planty"/></a>
            <nav class="menu">
                <?php wp_nav_menu(array('theme_location' => 'header', 'container_class' => 'nav-link')); ?>
            </nav>
        </header>