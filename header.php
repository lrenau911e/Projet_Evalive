<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="header">
            <div class="menu">
                
                <a href="index.php" class="btnMenu">Accueil</a>
                <a href="" class="btnMenu">Modules</a>
                <a href="" class="btnMenu">A Propos</a>
                
            </div>
            <div class="menu2">
                <?php
                if (!isset($_SESSION['login'])) 
                {
                    echo "<a href='inscription.php' class='btnMenu'>Inscription</a>";
                    echo "<a href='connexion.php' class='btnMenu'>Connexion</a>";
                } 
                else 
                {
                    $nom = $_SESSION['nom'];
                    $prenom = $_SESSION['prenom'];
                    echo "<a href='deconnexion.php' class='btnMenu'>Deconnexion</a>";
                    echo "<div class='connecte'><p class='user'>Connecté en tant que<br/> $nom $prenom</p></div>";
                }
                ?>
            </div>
        </div>
    </body>
</html>
