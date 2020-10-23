<footer>
    <div class="container">
        <div class="row">
            <nav class="menu col-md-12 text-right">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'my_footer_menu'
                    )
                );
                ?>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>