<?php
// donne l’accès à la base de données
global $wpdb;

/*
Plugin Name: Hello World
Description: Ecrit Hello World en haut de la page
Author: Martine
Version: 1.0
 */
echo "<h1>Hello world</h1>";

class HelloWorld_Plugin
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/helloClass.php';
        // On instantie la class ( créer )
        new HelloClass();

        // Installe les commentaires dans la BDD
        register_activation_hook(__FILE__, array('helloclass', 'install'));

        // Supprime les commentaires dans la BDD
        register_deactivation_hook(__FILE__, array('helloclass', 'uninstall'));

        //
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
    }

    public function add_admin_menu()
    { //on ajoute une page dans le menu administrateur
    add_menu_page('Hello World', 'Hello World plugin', 'manage_options',
    
    'helloworld', array($this, 'menu_html'));
    
    }
    public function menu_html() {
    echo '<h1>'.get_admin_page_title().'</h1>';
    echo '<p>Bienvenue sur la page d\'accueil du plugin</p>';
    }

}

    
// Création de l'objet 
new HelloWorld_Plugin();
