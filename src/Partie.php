<?php
    namespace Acs\PingPong;

    class Partie{

        private bool $demarre = true;

        private bool $player1Here ;
        private bool $player2Here ;

        private bool $victoire = true;

        private int $scorePlayer1 ;
        private int $scorePlayer2 ;

        private int $troisSet = 3;
        private int $SetPartie = 11;

        function __construct(bool $player1Here, bool $player2Here, int $scorePlayer1 , int $scorePlayer2)
        {
            $this->player1Here = $player1Here;
            $this->player2Here = $player2Here;
            $this->scorePlayer1 = $scorePlayer1;
            $this->scorePlayer2 = $scorePlayer2;
        }

        public function demarreJeu(){
 
            if($this->player1Here || $this->player2Here){
                return $this->demarre;
            }
            
            echo "Le jeu n'a point demarrer !";
            return false;
        }

        public function maatch(){

            while($this->victoire){

                if(rand(0,1)) {
                    $this->scorePlayer1++;
                } else {
                    $this->scorePlayer2++;
                }

                echo "Player1 = $this->scorePlayer1<br />\n";
                echo "Player2 = $this->scorePlayer2<br />\n";
    
                if($this->scorePlayer1 >= 11 or $this->scorePlayer2 >= 11 ){
                    echo "Score depasse 11pts <br />\n";

                    if(abs($this->scorePlayer1 - $this->scorePlayer2)>= 2){
                        echo "Ecart de 2 points <br />\n";
                        $this->victoire = false;
                        echo "1 set gagné! <br />\n";
                    }
                }
            }
        } 
    }
?>
