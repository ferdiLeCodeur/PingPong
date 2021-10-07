<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Ping Pong</title>


    <link href="../styles.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body >

    <div class="container">
        <div class="background">
            <div class="player1"> <img src="../images/joueur1.png" alt="player1" id="Player1"> </div>
            <div class="player2"> <img src="../images/joueur2.png" alt="player2" id="Player2"> </div>
            <div class="score"> <img src="../images/score.png" alt="score" id="Score"> </div>
        </div>
    </div>

    <?php
        require 'vendor/autoload.php';
        use Acs\PingPong\Joueur;
        use Acs\PingPong\Set;
        use Acs\PingPong\Partie;

        $arrayPlayer = array();
        $arrayPlayer[0] = new Joueur('croumchouszz');
        $arrayPlayer[1] = new Joueur('lopette');

        $arraySetAllWin = array();

        $demarreGame = new Partie(true, true);
        $demarreGame->demarreJeu();

        if( $demarreGame->demarreJeu()){

            $mySet = new Set(0,0);
        
            for ($i=0; $i < 150; $i++) { 

                if(rand(0,1)) {
                    $mySet->addSetScore(1);
                }else{
                    $mySet->addSetScore(2);
                }

                // echo $arrayPlayer[0]->afficheNom()." : ". $mySet->getSetScore(1) ." <br />\n";
                // echo $arrayPlayer[1]->afficheNom()." : ". $mySet->getSetScore(2) ." <br />\n";

                $gagnant = $mySet->getWinPlayer();

                if($gagnant!= null){
                     //echo " Fin de set! <br />\n";
                    
                    if($gagnant == 1){
                        echo " est gagnant du set  ". $arrayPlayer[0]->afficheNom() ."<br />\n";
                        array_push($arraySetAllWin, 1);
                        $mySet = new Set(0,0);  
                    }else{
                        echo " est gagnant du set  ". $arrayPlayer[1]->afficheNom() ."<br />\n";
                        array_push($arraySetAllWin, 2);
                        $mySet = new Set(0,0);
                    }
                }
            }  
        }
        $test = array();
        $scoreJoueur1 = 0;
        $scoreJoueur2 = 0;

        for ($i=0; $i <= 4; $i++) { 
            $test[$i] = $arraySetAllWin[$i];
            if ($test[$i] ==1){
                $scoreJoueur1 = $scoreJoueur1 + 1;
            }else{
                $scoreJoueur2 = $scoreJoueur2 + 1;
            }    
        }
        if ($scoreJoueur1 >= 3){
            echo "CHROUMMMCHOUZZZZ IS WINNER. ";
        }else{
            echo "LOPETTE IS WINNER. ";
        }


    ?>

</body>

</html>