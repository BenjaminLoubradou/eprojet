<?php
/*
 * Template Name: Modèle avec entête
 */
/* ce commentaire est obligatoire pour déclarer le template de page et l'afficher dans le BO.*/

get_header();
?>
    <h1 class="col-12"><?php the_title() ?></h1>
    <div class="col-12">
        <img src="<?php bloginfo('template_directory'); ?>/assets/bg1.jpg" alt="" class="img-fluid"> <!-- bloginfo('template_directory') affiche le chemin du thème actuellement activé -->
    </div>
    <div class="col-12 mt-5">
        <?php while(have_posts()) : the_post(); ?>
            <div><?php the_content() ?></div>
        <?php endwhile; ?>
    </div>

<?php get_footer() ?>