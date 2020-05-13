<?php
class plughorairewidget extends WP_Widget
// on cree la class hellowidget

{
    public function form($instance)
    // formulaire de gestion des paramètres pour le module d'administration
    // donne un nom et id a mes champs nouveaux
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:');
        ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php
echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
    <?php
}

    public function save_comm() // sauvegarde des commentaires

    {
        if (isset($_POST['_comm']) && !empty($_POST['plughoraire_comm'])) {
            global $wpdb;
            $comm = $_POST['plughoraire_comm'];
            $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}plughoraire_commentaire WHERE

    comm = '$comm'");

            if (is_null($row)) {
                $wpdb->insert("{$wpdb->prefix}plughoraire_commentaire", array('comm' =>

                    $comm));
            }
        } // on ajoute l'action de sauvegarde au chargement du widget
        add_action('wp_loaded', array($this, 'save_comm'));
    }
    public function __construct()
    { // on cree son constructeur
        parent::__construct('plughoraire', 'Hello World', array('description' => 'Un plug-in', ));
        // on prend le construct du parent et tout se quil y a dedans
    }
    public function widget($args, $instance)
    { // formulaire afficher à l'écran pour l'utilisateur
        // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées
        echo $args['before_widget'];
        // on affiche avant le widget
        echo $args['before_title'];
        // on affiche avant le titre
        echo apply_filters('widget_title', $instance['title']);
        // on applique un filtre sur le widget du titre
        echo $args['after_title'];
        // on affiche apres le titre
        // corps du widget
        $couleur = get_option('plughoraire_couleur', 'green');
        ?>

        <div id="test" style="color:<?php echo $couleur; ?>"> /// </div>


        <h1> Hello world </h1> <!--  se qui aura d'afficher  -->
        <form action="" method="post">
            <p>
                <label for="plughoraire_comm">Votre commentaire :</label>
                <input id="plughoraire_comm" name="plughoraire_comm" type="texte" />
            </p>
            <input type="submit" />
        </form>


<?php
echo $args['after_widget'];
    }
}
