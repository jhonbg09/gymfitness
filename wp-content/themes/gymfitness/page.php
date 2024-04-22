<!-- Esta linea de codigo lo que hace es incluir el pedazo de codigo que cortamos y colocamos en el archivo header.php -->
<?php
get_header();
?>
<main class="contenedor seccion">
    <?php
    get_template_part('template-parts/pagina')
    ?>
</main>

<?php
get_footer();
?>
