<?php

register_nav_menu('header', 'En tete');
register_nav_menu('footer', 'Pied de page');


// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
function custom_add_menu_item($items, $args)
{
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajouter un lien personnalisé si l'utilisateur est connecté
        $custom_link = '<li><a href="' . wp_logout_url() . '">Admin</a></li>';
        $items .= $custom_link;
    }

    // Ajouter le lien personnalisé au menu existant


    return $items;
}

// Ajouter le hook wp_nav_menu_items
add_filter('wp_nav_menu_items', 'custom_add_menu_item', 10, 2);

add_theme_support('custom-logo');
