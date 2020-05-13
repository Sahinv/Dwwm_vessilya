<?php
//on inclu la definition du widget
include_once plugin_dir_path(__FILE__) . '/plughorairewidget.php';

class HoraireClass
{
    public function __construct()
    {
        // on déclare le widget
        add_action('widgets_init', function () {register_widget('PlugHoraireWidget');});

        //Connecte le CSS perso
        add_action('wp_enqueue_scripts', array($this, 'persoCSS'), 15);

        // on ajoute l'action de sauvegarde au chargement du widget
        add_action('wp_loaded', array($this, 'save_comm'));

        //
        add_action('admin_init', array($this, 'register_settings'));
    }

/* Listes des Fonctions  */
// cette fonction fait appel au css
    public function persoCSS()
    {
        wp_enqueue_style('Plughorairecss', plugins_url('plughoraire/design.css'));
    }

// cette fonction permet de regrouper les commentaires dans la base de données
    public static function install()
    {
        //méthode déclenchée à l'activation du plug-in
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}plughoraire_commentaire (id INT AUTO_INCREMENT PRIMARY KEY, comm VARCHAR(255) NOT NULL);");
    }

// Suppression des commentaire dans la BDD
    public static function uninstall()
    {
        //méthode déclenchée à la suppression du module
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}plughoraire_commentaire;");
    }

// Enregistre les commentaires
    public function save_comm()
    {
        if (isset($_POST['plughoraire_comm']) && !empty($_POST['plughoraire_comm'])) {
            global $wpdb;
            $comm = $_POST['plughoraire_comm'];
            $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}plughoraire_commentaire WHERE comm = '$comm'");
            if (is_null($row)) {$wpdb->insert("{$wpdb->prefix}plughoraire_commentaire", array('comm' => $comm));
            }
        }
    }

//
    public function menu_html()
    {echo '<h1>' . get_admin_page_title() . '</h1>';
        ?>
      <form method="post" action="options.php">
       <label>Couleur</label>
       <input type="text" name="plughoraire_couleur" value="<?php echo get_option("plughoraire_couleur") ?>"/>
        <?php submit_button();?>
         </form>

         <?php settings_fields('plughoraire_settings')?>

         <?php }

    public function register_settings()
    {register_setting('plughoraire_settings', 'plughoraire_couleur');
    }

}
