<!DOCTYPE html>
    <html lang="fr">
        <head>
            <!-- fonction de WP qui fournit des informations sur le site, ici on demande la valeur du charset du site -->
            <meta charset="<?php bloginfo('charset'); ?>">
            <!-- on demande l'affichage du nom du site qui se trouve dans BO > réglages > général > titre du site -->
            <title><?php bloginfo("name"); ?></title>

            <!-- lien vers un CDN Bootstrap 4 -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!-- lien css spécifique au thème -->
            <!-- affiche le chemin du dossier du theme actif auquel le nom du fichier style.css -->
            <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style.css">

            <!-- intègre des éléments indispensable à WP comme les balises link et script déclarées dans le fichier  functions.php, 
            ou comme la barre d'administration affichée côté front quand on est connecté en tant qu'admin -->
            <?php wp_head(); ?>

        </head>
        <!-- affiche les classes du body automatiquement générées par WP -->
        <body <?php body_class(); ?>>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                        <div class="row w-100">
                            <div class="navbar-brand col-lg-3">
                                <!-- url du site paramétrée dans le BO > réglages > général > URL -->
                                <a href="<?php bloginfo("url") ; ?>"><?php bloginfo("name"); ?></a>
                            </div>
                            <p class="col-lg-9 texte-description">
                                <!-- affiche le slogan du site depuis les réglages de WP -->
                                <?php bloginfo("description"); ?>
                            </p>
                            <div class="col-12">
                                <!-- menu de navigation -->
                                <?php wp_nav_menu(array(
                                    'theme_location'   =>'primary', // identifiant du menu dans functions.php
                                    'menu_class'       =>'navbar-nav',
                                    // on ajoute une ou plusieur class css(bootstrap)

                                )) ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- entête du site -->
            <!-- si on affiche la page d'acceuil, on crée l'entête ci-dessous -->
            <?php if(is_front_page()) : ?>
                <div id="entete" class="align-items-center">
                    <div class="container">
                        <!-- appelle la zone d'id 'region-entete qui est déclaré dans functions?php -->
                        <?php dynamic_sidebar('region-entete') ?>
                    </div>
                </div>
            <?php endif; ?>

            <section class="container">
                <div class="row">
                    <!-- ici le contenu spécifique à chaque page -->