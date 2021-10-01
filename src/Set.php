<?php
namespace Acs\PingPong;
// Cette class va verifier si 1 SET est terminé 

class Set {
    private bool $victoire = true;
    private int $scorePlayer1 ;
    private int $scorePlayer2 ;

    function __construct( int $scorePlayer1 , int $scorePlayer2){
        $this->scorePlayer1 = $scorePlayer1;
        $this->scorePlayer2 = $scorePlayer2;
    }

    //ajout un score à un des joueurs
    public function addScore(int $playerNum){

        if($playerNum ==1){
            $this->scorePlayer1++;
        }else{
            $this->scorePlayer2++;
        }
    }

    //renvoie le score 
    public function getScore(int $playerNum){

        if($playerNum ==1){
            return $this->scorePlayer1;
        }else{
            return $this->scorePlayer2;
        }
    }

    //renvoie le gagnant ou nul
    public function getWinPlayer(){

        if(!$this->isWinSet()){
            return null;
        }
        if ($this->getScore(1)> $this->getScore(2)){
            return 1;
        }else{
            return 2;
        }
    }

    // Si le set est gagnant
    public function isWinSet()
    {
        if($this->getScore(1) >= 11 or $this->getScore(2) >= 11 ){
            echo "Score depasse 11pts <br />\n";
        
            if(abs($this->getScore(1) - $this->getScore(2))>= 2){
                echo "Ecart de 2 points <br />\n";
                return true;
            }
        }
        return false;
    }

    //renvoie true ou false si 
    public function getVictoire(){
        return $this->victoire;
    }
}


?>