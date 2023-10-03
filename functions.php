<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION

// CREER UN EMPLACEMENT POUR AFFICHER LE MENU
function header_menu()
{
    register_nav_menu('header', __('menu header'));
}
add_action('init', 'header_menu');


// AFFICHE LE MENU LORSQUE L'UTILISATEUR EST CONNECTE
function add_admin_link($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'header') {
        $items .= '<li class="admin-menu"><a href="' . get_admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

// ENLEVER LES BALISE P DE CONTACT FORM 7

add_filter('wpcf7_autop_or_not', '__return_false');


function afficher_fruit_com1()
{
    return get_field('nom-fruit-com1');
}
wpcf7_add_shortcode('afficher_fruit_com1', 'afficher_fruit_com1');
function afficher_fruit_com2()
{
    return get_field('nom-fruit-com2');
}
wpcf7_add_shortcode('afficher_fruit_com2', 'afficher_fruit_com2');
function afficher_fruit_com3()
{
    return get_field('nom-fruit-com3');
}
wpcf7_add_shortcode('afficher_fruit_com3', 'afficher_fruit_com3');
function afficher_fruit_com4()
{
    return get_field('nom-fruit-com4');
}
wpcf7_add_shortcode('afficher_fruit_com4', 'afficher_fruit_com4');


function fruit_com1()
{
    return "<img class=fruits-com src='". get_field('fruits-com1'). "'>"; 
}
wpcf7_add_shortcode('fruit_com1', 'fruit_com1');
function fruit_com2()
{
    return "<img class=fruits-com src='". get_field('fruits-com2'). "'>"; 
}
wpcf7_add_shortcode('fruit_com2', 'fruit_com2');
function fruit_com3()
{
    return "<img class=fruits-com src='". get_field('fruits-com3'). "'>"; 
}
wpcf7_add_shortcode('fruit_com3', 'fruit_com3');
function fruit_com4()
{
    return "<img class=fruits-com src='". get_field('fruits-com4'). "'>"; 
}
wpcf7_add_shortcode('fruit_com4', 'fruit_com4');
