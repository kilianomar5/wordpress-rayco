<?php
function noticias_kilian_setup() {
    // Soporte para menús
    register_nav_menus(array(
        'menu_principal' => __('Menú Principal', 'noticias_kilian'),
        'menu_legal'     => __('Menú Legal', 'noticias_kilian'),
        'menu_social'    => __('Menú Social', 'noticias_kilian')
    ));

    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'noticias_kilian_setup');
