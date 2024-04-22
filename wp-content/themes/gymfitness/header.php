<!DOCTYPE html>
<!-- Esta funcion me ayuda a que wordpress detecte el leguaje esta mi pagina weby lo ajuste -->
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- para agregar  css debemos agregar esta funcion -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <!-- asi debemos agregar el las rutas en wordpress -->
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="logo">
            </div>
            <?php
            $arr = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal'
            );

            wp_nav_menu($arr);
            ?>

        </div>

    </header>