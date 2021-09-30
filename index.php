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
        $player1->afficheNom();
        $player2 = new Joueur('lopette');
        $player2->afficheNom();


        $demarreGame = new Partie(true, true, 0, 0);
        $demarreGame->demarreJeu();

        if($demarreGame->demarreJeu()){

            $demarreGame->maatch();  
        }
        

    ?>

</body>

</html>