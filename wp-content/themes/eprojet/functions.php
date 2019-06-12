<?php

//Création des zones de widgets
function eprojet_init_widgets(){
    register_sidebar(array(
        'name'          =>'Zone entête', // nom qui apparait dans le BO
        'id'            =>'region-entete', // identifiant de la zone pour pouvoir l'insérer dans un template
        'description'   =>'Zone de widgets affichée en entête de la page accueil', // description dans le BO
        // on ne souhaite pas avoir de <li></li> à la création d'un widget
        'before_widget' =>'',
        'after_widget'  =>'',
        // on souhaite remplacer <h2> du title par un <h1>.
        'before_title'  =>'<h1>',
        'after_title'   =>'</h1>'
    ));
    register_sidebar(array(
        'name'          =>'Zone de la barre latérale',
        'id'            =>'colonne-droite',
        'description'   =>'Zone de widgets affichée dans la barre latérale de droite',
        'before_widget' =>'<div>',
        'after_widget'  =>'</div>'
    ));
    register_sidebar(array(
        'name'          =>'Zone du footer de gauche',
        'id'            =>'footer-gauche',
        'description'   =>'Zone de widgets affichée dans le footer gauche',
        'before_widget' =>'',
        'after_widget'  =>'',
    ));

}

// On exécute notre fonction "eprojet_init_widgets" lors de l'initialisation des widgets par le core de WP : widgets_init s'appelle un HOOK ( crochet ) car y sont accrochées les fonctions du core de WP ainsi que la nôtre. Elles s'exécutent ensemble lors de l'exécution de ce hook.
add_action('widgets_init','eprojet_init_widgets');

// création des zones de menus
function eprojet_init_menu(){
    // on crée une zone de menu d'identifiant "primary" et de nom dans le BO "menu principal"
    register_nav_menu('primary','menu principal');
}

// on exécute notre fonction  appelée "eprojet_init_menus" dans le hook "init" de WP qui correspond au moment où le CMS s'initialise.
add_action('init','eprojet_init_menus');