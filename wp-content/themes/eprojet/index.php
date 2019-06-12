<?php
    // faire l'inclusion du fichier header.php
    get_header();
    // si il y a des postes à afficher, cette fonction retourne un booléen
    if (have_posts()) : 
        // the_post() déplace le curseur interne à la boucle while dans le jeu de résultat 
        // contenant les éléments à afficher et en extrait les informations.
        while(have_posts()) : the_post();
?>
        <h1 class="col-12">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <div class="col-12">
            <?php the_content(); ?>
        </div>
<?php
        endwhile;
    else :
        echo '<p>Aucun contenu ne correspond à votre demande</p>';
    endif;
    // faire l'inclusion du fichier footer.php
    get_footer();
?>