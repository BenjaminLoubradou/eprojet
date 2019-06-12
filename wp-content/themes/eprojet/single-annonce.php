<?php get_header(); ?>
    <div class="col-12">
        <?php if(have_posts()) :
            while(have_posts()): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="contenu"><?php the_content(); ?></div>
                <div>
                    <img src="<?php the_field('photo') ?>" class="img-fluid">
                </div>
                <div class="info mt-5"><span>Marque : <?php the_field('marque') ?></span></div>
                <div class="info"><span>Modèle : <?php the_field('modele') ?></span></div>
                <div class="info"><span>Kilométrage : <?php the_field('km') ?> km</span></div>
                <div class="info"><span>Carburant : <?php the_field('carburant') ?></span></div>
                <div class="info"><span>Prix : <?= number_format(get_field('prix'),2) ?> €</span></div>
            <?php endwhile;
        else :
            echo '<p>Aucune annonce ne correspond à votre demande</p>';
        endif;
        ?>
    </div>

<?php get_footer(); ?>
