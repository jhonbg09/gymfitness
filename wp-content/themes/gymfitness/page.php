<!-- Esta linea de codigo lo que hace es incluir el pedazo de codigo que cortamos y colocamos en el archivo header.php -->
<?php
get_header();
?>
<main class="contenedor seccion">
    <?php
    while (have_posts()) : the_post();
        the_title('<h1 class = "text-center text-primary">', '</h1>');
        
        // Con esta sentencia hacemos la verificacion de que si ahy un imagen la renderice de lo contrario no. esto buede evitar errores en las imagenes
        if(has_post_thumbnail()){
             // Renderizando imagenes destacadas
        the_post_thumbnail('full', array('class' =>'imagen-destacada'));
        }
       
        
        the_content();

    endwhile;
    ?>
</main>

</body>

</html>