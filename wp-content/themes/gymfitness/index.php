<!-- Esta linea de codigo lo que hace es incluir el pedazo de codigo que cortamos y colocamos en el archivo header.php -->
<?php 
    get_header();
?>
    <main>
        <?php
        while (have_posts()) : the_post();
            the_title();
            the_content();
        endwhile;
        ?>
    </main>

</body>

</html>