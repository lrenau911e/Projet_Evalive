<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mainStyle.css" />
        <title>Evalive</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        
        <?php 
        if(isset($_SESSION['login']))
        {
            include 'defaut.php';
        }
        else
        {
            ?>
            <div class="titre">
                <p>Bienvenu sur Evalive !</p>
            </div>
            <div class="accueil">
                <br/>
                <p> Si c'est votre première visite, inscrivez-vous ! </p>
                <p> <a href="inscription.php" class="inputs">INSCRIPTION</a></p>
                <br/>
                <p> Si vous êtes déjà inscrit, connectez-vous ! </p>
                <p><a href="connexion.php" class="inputs">CONNEXION</a></p>
            </div>
            <?php
        }
        ?>

    </body>
</html>