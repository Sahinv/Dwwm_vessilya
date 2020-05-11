<?php
 class hellowidget extends WP_Widget 
 {      
     //Construct de la class hellowidget
     public function __construct() {
         //On appel le construct du parent 
         parent::__construct('helloworld', 'Hello World', array('description' => 'Un plug-in qui écrit Hello World')); 
        }
        //
        public function widget($args, $instance)
        {   // formulaire afficher à l'écran pour l'utilisateur 
            
            // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées
            echo $args['before_widget']; 
            echo $args['before_title']; 
            echo apply_filters('widget_title', $instance['title']); // On affiche le filtre 
            echo $args['after_title'];

            // corps du widget
            ?>
            <h1>Hello World</h1>
            
            <form action="" method="post">
            <p> 
            <label for="helloworld_comm">Votre commentaire :</label>
            <input id="helloworld_comm" name="helloworld_comm" type="texte"/>
            </p>
            <input type="submit"/>
            </form>
            

            
            <?php
            echo $args['after_widget']; 
  }
}