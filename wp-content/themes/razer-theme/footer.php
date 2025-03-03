<!-- from dashboard -->
<!-- <footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <?php if (is_active_sidebar('footer_widget')) : ?>
            <?php dynamic_sidebar('footer_widget'); ?>
        <?php endif; ?>
    </div>
</footer> -->


<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> - Mi Sitio Web. Todos los derechos reservados.</p>
        <nav>
            <a href="<?php echo home_url('/politica-de-privacidad'); ?>" class="text-white">Política de Privacidad</a> |
            <a href="<?php echo home_url('/contacto'); ?>" class="text-white">Contacto</a>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>