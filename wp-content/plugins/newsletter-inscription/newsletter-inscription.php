<?php
/*
 * Plugin Name: Inscription à la newsletter
 * Description: Formulaire d'inscription à la Newsletter.
 * Version: 1.0
 */

$message = null; // variable d'affichage des messages.

// 1- creation de la table "newsletter" en BDD lors de l'activation du plugin :

//var_dump(__FILE__);
//  la constante magique __FILE__ contient le chemin absolu du fichier de notre plugin

register_activation_hook(__FILE__,'ni_plugin_activate');
// la fonction register_activation_hook()
// est exécutée au moment de l'activation du plugin  de chemin __FILE__ et appelle notre propre fonction
// de nom "ni_plugin_activate" déclarée ci-dessous :

function ni_plugin_activate(){
    global $wpdb;
    // une classe nommée wpdb contient des méthodes pour manipuler des données en BDD en
    // toute sécurité. Cette classe est toujours instanciée au chargement de WP, et stockée dans
    // la variable globale $wpdb. Pour l'utiliser au sein de notre fonction, il faut donc faire "global $wpdb".

    $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}newsletter (id_newsletter INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL)");
    // On exécute une requête SQL avec la méthode query() de
    // l'objet $wpdb. Cette requête vérifie si la table newslettre n'existe pas, auquel cas elle la crée.
    // $wpdb->prefix nous permet de récupéter le préfixe des tables de WP automatiquement
    // ( attention à bien le coller au nom de la table).
}

// Désactivation du plugin :
register_deactivation_hook(__FILE__, 'ni_plugin_deactivate');
function ni_plugin_deactivate(){
    // le code de la fonction appelé lors de la déactivation du plugin
}

// Suppression du plugin
register_uninstall_hook(__FILE__, 'ni_plugin_uninstall');
function ni_plugin_uninstall(){
    global $wpdb;
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}newsletter");
}

// 3- inscription en BDD
if(!empty($_POST['ni_mail'])){
    $message = 'Ok';
    $sql = $wpdb->prepare("INSERT INTO {$wpdb->prefix}newsletter (email) VALUES (%s)",$_POST['ni_mail']);
    // %s signifie que la requete attend un type string comme valeur. On lui associe la valeur $_POST['ni_mail']
    $wpdb->query($sql); // on execute la requete préparée avec la méthode query() de $wpdb.

    $message = '<div class="">Vous êtes inscrit à la newsletter.</div>';

}


// 2- création du formulaire et du shortcode d 'insertion du formulaire
add_action('init','mail_subscription'); // lors de l'initialisation de WP, notre fonction mail_subscription est exécutée automatiquement :

function mail_subscription() {
    // Création du shortcode de notre plugin qui pourra être inséré dans un contenu de page d'article,
    //ou dans un widget texte :
    function shortcode_mail_form(){
        global $message;
        $form = '<form method="post">
                    <div><input type="text" name="ni_mail" placeholder="Votre email" class="form-control"></div>
                    <div><input type="submit" value="Recevoir la newsletter" class="btn btn-info"></div>
                 </form>';
        return $message ?? $form; // on retourne soit le contenu de $message s'il n'est pas NULL (autrement dit s'il contient un message pour l'internaute ), OU le contenu $form qui contient le HTML du formuliare. Ainsi s'affichera en front le message à l'internantre ou le formulaire d'inscription.
    }
    add_shortcode('ni_mail_form','shortcode_mail_form');
    // ici on crée le shortcode [ni_mail_form] que l'on mettra dans un contenu. Celui ci appellera
    // notre fonction de nom "shortcode_mail_form".


}



