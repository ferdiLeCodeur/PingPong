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

        $arrayPlayer = array();
        $arrayPlayer[0] = new Joueur('croumchouszz');
        $arrayPlayer[1] = new Joueur('lopette');
        //var_dump($arrayAllPlayer[1]);

        $arraySetAllWin = array();

        $demarreGame = new Partie(true, true);
        $demarreGame->demarreJeu();

        if( $demarreGame->demarreJeu()){

            $mySet = new Set(0,0);
        
            for ($i=0; $i < 105; $i++) { 

                if(rand(0,1)) {
                    $mySet->addSetScore(1);
                }else{
                    $mySet->addSetScore(2);
                }

                // echo $arrayPlayer[0]->afficheNom()." : ". $mySet->getSetScore(1) ." <br />\n";
                // echo $arrayPlayer[1]->afficheNom()." : ". $mySet->getSetScore(2) ." <br />\n";

                $gagnant = $mySet->getWinPlayer();

                if($gagnant!= null){
                    // echo " Fin de set! <br />\n";
                    
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


        var_dump(array_count_values($arraySetAllWin));
        var_dump($arraySetAllWin); 


        if ($arraySetAllWin[1]>=3){
             echo " lopette is winner";
        }elseif($arraySetAllWin[2]>=3){
            echo "chroumchouzzz is winner";
        }


    ?>
</body>

</html>