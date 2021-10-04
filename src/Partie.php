<?php
    namespace Acs\PingPong;

    class Partie{

        private bool $demarre = false ;
        private bool $player1Here ;
        private bool $player2Here ;
      
        function __construct(bool $player1Here, bool $player2Here)
        {
            $this->player1Here = $player1Here;
            $this->player2Here = $player2Here;
        }

        public function demarreJeu()
        {
            if($this->player1Here and $this->player2Here){
                $this->demarre = true;
                return $this->demarre;
            }
            
            echo "Le jeu n'a point demarrer !";
            return false;
        }


    }
?>
