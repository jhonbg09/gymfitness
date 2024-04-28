<!-- Esta linea de codigo lo que hace es incluir el pedazo de codigo que cortamos y colocamos en el archivo header.php -->
<?php
/*
*Template Name: Listado de clases
*/
get_header();
?>
<main class="contenedor seccion ">
    <ul class="listado-grid">
        <?php
            $args = array(
                'post_type' => 'gymfitness_clases',
            );

            $clases = new WP_Query($args);
                
            while($clases -> have_posts()){
                $clases -> the_post();
            ?>
            <li class="card">
                <?php the_title()?>
            </li>
            <?php   
             }
             wp_reset_postdata();
             ?>
       
    </ul>
</main>

<?php
get_footer();
?>

