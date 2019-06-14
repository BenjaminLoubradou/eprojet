<?php get_header(); ?>
    <div class="col-12">
        <?php if(have_posts()) :
            while(have_posts()): the_post(); ?>
                <h1 class="col-12">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h1>
                <div><?php the_excerpt(); ?></div>
            <?php endwhile;
        else :
            echo '<p>Aucune annonce ne correspond à votre demande</p>';
        endif;
        ?>
    </div>
<?php get_footer(); ?>
