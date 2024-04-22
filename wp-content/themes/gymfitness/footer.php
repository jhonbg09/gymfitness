<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">
        <?php
        $arr = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'menu-principal'
        );

        wp_nav_menu($arr);
        ?>
        <p class="copyrigth">Todos los derechos reservados. <?php echo get_bloginfo('name') . ' ' . date('Y') ?></p>
    </div>
    <!-- Inyección de código: La función wp_footer() proporciona un punto de anclaje para que otros elementos de WordPress, como plugins y temas, inyecten su propio código justo antes de que se cierre la etiqueta </body> en el archivo HTML generado.
    este codigo tambien hace que aparezca la barra de edicion de wordpress cuando estamos logeados-->
    <?php wp_footer() ?>
</footer>
</body>

</html>