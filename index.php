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

        $arrayAllPlayer = array();
        $arrayAllPlayer[0] = new Joueur('croumchouszz');
        $arrayAllPlayer[1] = new Joueur('lopette');
        var_dump($arrayAllPlayer[1]);

        $arraySetAllWin = array();

        $demarreGame = new Partie(true, true);
        $demarreGame->demarreJeu();

        if( $demarreGame->demarreJeu()){

            $mySet = new Set(0,0);
        
            for ($i=0; $i < 200; $i++) { 

                if(rand(0,1)) {
                    $mySet->addSetScore(1);
                }else{
                    $mySet->addSetScore(2);
                }

                echo $arrayAllPlayer[0]->afficheNom()." : ". $mySet->getSetScore(1) ." <br />\n";
                echo $arrayAllPlayer[1]->afficheNom()." : ". $mySet->getSetScore(2) ." <br />\n";

                $gagnant = $mySet->getWinPlayer();

                if($gagnant!= null){
                    echo " Fin de set! <br />\n";
                    
                    if($gagnant == 1){
                        echo " est gagnant du set  ". $arrayAllPlayer[0]->afficheNom() ."<br />\n";
                        array_push($arraySetAllWin, 1);
                        
                    }else{
                        echo " est gagnant du set  ". $arrayAllPlayer[1]->afficheNom() ."<br />\n";
                        array_push($arraySetAllWin, 2);
                        
                    }
                }
                var_dump($arraySetAllWin);
                
            }
        }       
    ?>
</body>

</html>