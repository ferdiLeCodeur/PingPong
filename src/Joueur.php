<?php
    namespace Acs\PingPong;

    

    class Joueur{
        
        private string $nomDuPlayer ;

        function __construct( string $nomDuPlayer){
            $this->nomDuPlayer = $nomDuPlayer;
        }

        public function afficheNom(){
            echo $this->nomDuPlayer;
        }
    }
?>