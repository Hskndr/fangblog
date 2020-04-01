<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Codigo php dinamico para agregar hoja de estilo-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
    <!--Codigo php dinamico para agregar hoja de estilo-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/reset.css">
    <!--Codigo php dinamico para agregar hoja de estilo-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/responsive.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!--Codigo php dinamico para agregar hoja de Javascript-->
    <script src="<?php bloginfo('template_url') ?>/js/jquery.slides.min.js"></script>
    <!--Codigo php dinamico para agregar hoja de Javascript-->
    <script src="<?php bloginfo('template_url') ?>/js/jquery.slides.js"></script>
    <script>
        $(function () {
            $("#slideshow").slidesjs({
                height: 300,
                navigation: false
            });
        });
    </script>
    <!-- TRABAJAR CON PLUGINS -->
    <?php wp_head(); ?>
    <!--
        <link rel="stylesheet" href="./css/bootstrap-4.4.1-dist/css/bootstrap.min.css"  crossorigin="anonymous">
        <script src="./css/bootstrap-4.4.1-dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    -->
    <title>My Blog</title>

</head>
<body>
<header>
    <div id="logo">
        <p>Fang blog</p>
        <span>By Hiskander Aguillon</span>
    </div>
    <nav>
        <!-- AGREGAR ITEMS DEL MENU DINAMICAMENTE POR WORDPRESS -->
        <?php wp_nav_menu(
            array(
                'container' => false,
                'items_wrap' => '<ul id="menu-top">%3$s</ul>',
                'theme_location' => 'menu'
            ));
        ?>
        <!--        <ul>-->
        <!--            <li><a href="#">Inicio</a></li>-->
        <!--            <li><a href="#">Acerca de</a></li>-->
        <!--            <li><a href="#">Contacto</a></li>-->
        <!--            <li><a href="#">Pagina Ejemplo</a></li>-->
        <!--        </ul>-->
    </nav>
</header>
