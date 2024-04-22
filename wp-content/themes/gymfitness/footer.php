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
    </div>
</footer>
</body>

</html>