</div>
            </section>

            <footer class="align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <p><?php dynamic_sidebar('footer-gauche') ?></p>
                        </div>
                        <div class="col-lg-4">
                            <p>&copy; Mes petites annonces - 2019</p>
                        </div>
                        <div class="col-lg-4">
                            <?php wp_nav_menu(array(
                                'theme_location'   =>'secondary', // identifiant du menu dans functions.php
                                'menu_class'       =>'navbar-nav',
                                // on ajoute une ou plusieur class css(bootstrap)

                            )) ?>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- affiche les scripts déclarés dans functions.php -->
            <?php wp_footer(); ?>
        </body>
</html>