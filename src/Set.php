<?php
namespace Acs\PingPong;

class Set {
    private bool $victoire = true;
    private int $scoreSetPlayer1 ;
    private int $scoreSetPlayer2 ;
    private array $setTableau = array();

    function __construct( int $scoreSetPlayer1 , int $scoreSetPlayer2)
    {
        $this->scoreSetPlayer1 = $scoreSetPlayer1;
        $this->scoreSetPlayer2 = $scoreSetPlayer2;
    }

    public function addSetScore(int $playerNum)
    {
        if($playerNum ==1){
            $this->scoreSetPlayer1++;
            
        }else{
            $this->scoreSetPlayer2++;
        }
    }

    public function getSetScore(int $playerNum)
    {
        if($playerNum ==1){
            return $this->scoreSetPlayer1;
        }else{
            return $this->scoreSetPlayer2;
        }
    }

    public function getWinPlayer()
    {
        if(!$this->isWinOneSet()){
            return null;
        }
        if ($this->getSetScore(1)> $this->getSetScore(2)){
            return 1;
        }else{
            return 2;
        }
    }

    public function isWinOneSet()
    {
        if($this->getSetScore(1) >= 11 or $this->getSetScore(2) >= 11 ){
            // echo "Score depasse 11pts <br />\n";
        
            if(abs($this->getSetScore(1) - $this->getSetScore(2))>= 2){
                // echo "Ecart de 2 points <br />\n";
                return true;
            }
        }
        return false;
    }

    public function getSetVictoire()
    {
        return $this->victoire;
    }

}


?>