</main>

<footer id="site-footer" class="bg-light py-4">
    <div class="container text-center">

        <?php if (has_nav_menu('footer-menu')) : ?>
            <nav class="footer-nav mb-3">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => 'footer-menu list-unstyled d-flex justify-content-center gap-3',
                ));
                ?>
            </nav>
        <?php endif; ?>

        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tots els drets reservats.</p>
        <p>Creat amb el tema Infobasic</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>