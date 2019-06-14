<?php get_header();
$current_cat='';

//1- on demande à la requete principale de WP de nous fournir la catégorie sélectionnée par l'internaute :
$current_cat = get_query_var('category_name');
// cette fonction demande à la requête principale appelée "query" de lui fournir la catégorie sélectionnée par l'internaute.

//var_dump($current_cat);

$args = array(
        'post_type'     =>'annonce', // slug du post_type "annonce"
        'category_name' =>$current_cat, //variable qui contient la catégorie sélectionnée
);

query_posts($args); // requete SQL qui sélectionne en BDD les posts correspondant à $args, autrement dit de type "annonce et de catégorie celle que l'internaute a choisir. Remarque : cette fonction remplace la requete principale. Il ne faut donc pas oublier de la restaurer avec un wp_rest_query() en fin de script.


?>
    <div class="col-12">
        <h1>Nos <?php echo $current_cat; ?></h1>
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();
            ?>
                    <div class="row cat-info">
                        <div class="col-lg-3">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_field('photo'); ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-9">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div>
                                <span>Modèle : </span><?php the_field('modele'); ?>
                                <span>Marque : </span><?php the_field('marque'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            else :
                echo '<p>Aucune annonce ne correspond à votre demande.</p>';
            endif;
        ?>
    </div>

<?php
wp_reset_query(); // Après une requete secondaire query_posts(), il faut restaurer la requete principale avec cette fonction, pour qu'elle ne dysfonctionne pas à la prochaine utilisation.

get_footer();
?>