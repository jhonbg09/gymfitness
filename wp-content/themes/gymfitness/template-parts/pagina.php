<?php
while (have_posts()) : the_post();
    the_title('<h1 class = "text-center text-primary">', '</h1>');

    // Con esta sentencia hacemos la verificacion de que si hay un imagen la renderice de lo contrario no. esto puede evitar errores en las imagenes
    if (has_post_thumbnail()) {
        // Renderizando imagenes destacadas
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }


    the_content();

endwhile;
