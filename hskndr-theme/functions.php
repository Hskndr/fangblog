<?php
/*REGISTRO DE MENUS EN WORDPRESS*/
register_nav_menus(array(
    'menu' => 'Menu Superior',
));

/*REGISTRO DE THUMBNAILS (IMAGENES)*/
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 470, 300, true);
add_image_size('list_articles_thumbs', 300, 200, true);

/*REGISTRO DE SIDEBAR*/
register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

/*REGISTRO DE footer*/
register_sidebar(array(
    'name' => 'Footer',
    'before_widget' => '<section class="widget">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

?>
