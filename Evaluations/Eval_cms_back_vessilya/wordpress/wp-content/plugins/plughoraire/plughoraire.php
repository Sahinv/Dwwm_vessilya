<?php
// donne l’accès à la base de données
global $wpdb;

/*
Plugin Name: Horaire
Description: Voici des horaires
Author: Vessilya
Version: 1.0
 */


class Horaire_Plugin
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/plughoraireclass.php';
        // On instantie la class ( créer )
        new Horaireclass();

        // Installe les commentaires dans la BDD
        register_activation_hook(__FILE__, array('plughoraireclass', 'install'));

        // Supprime les commentaires dans la BDD
        register_deactivation_hook(__FILE__, array('plughoraireclass', 'uninstall'));

        //
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
    }

    public function add_admin_menu()
    { //on ajoute une page dans le menu administrateur
    add_menu_page('Plug Horaire', 'Plug horaire plugin', 'manage_options',
    
    'plughoraire', array($this, 'menu_html'));
    
    }
    public function menu_html() {
    echo '<h1>'.get_admin_page_title().'</h1>';
    echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
    }

}

    
// Création de l'objet 
new Horaire_Plugin();
