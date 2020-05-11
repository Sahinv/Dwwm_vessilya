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
    }
}
// Création de l'objet 
new HelloWorld_Plugin();
