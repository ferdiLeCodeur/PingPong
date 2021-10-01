<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Ping Pong</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        require 'vendor/autoload.php';
        use Acs\PingPong\Joueur;
        use Acs\PingPong\Set;
        use Acs\PingPong\Partie;

        $player1 = new Joueur('croumchouszz');
        $player2 = new Joueur('lopette');

        //on créer une partie et on verifie si au
        // moins 2 joueurs est present

        $demarreGame = new Partie(true, true);
        $demarreGame->demarreJeu();

        if( $demarreGame->demarreJeu()){

                $myPartie = new Set(0,0);

            while($myPartie->getVictoire()){

                if(rand(0,1)) {
                    $myPartie->addScore(1);
                }else{
                    $myPartie->addScore(2);
                }

                echo $player1->afficheNom()." ". $myPartie->getScore(1) ." <br />\n";
                echo $player2->afficheNom()." ". $myPartie->getScore(2) ." <br />\n";

                $gagnant = $myPartie->getWinPlayer();

                if($gagnant!= null){
                    echo " Fin de set! <br />\n";
                    
                    if($gagnant == 1){
                        echo "gagnant du SET = ". $player1->afficheNom() ."<br />\n";
                    }else{
                        echo "gagnant du SET = ". $player2->afficheNom() ."<br />\n";
                    break;
                    }
                }
            }
        }


    ?>
</body>

</html>