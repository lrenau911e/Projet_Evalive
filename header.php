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
                <a href="modules.php" class="btnMenu">Modules</a>
                <a href="" class="btnMenu">A Propos</a>
                
            </div>
            <div class="menu2">
                <?php
                session_start();
                if (!isset($_SESSION['login'])) {
                    echo "<a href='inscription.php' class='btnMenu'>Inscription</a>";
                    echo "<a href='connexion.php' class='btnMenu'>Connexion</a>";
                } else {
                    $nom = $_SESSION['nom'];
                    $prenom = $_SESSION['prenom'];
                    echo "<a href='deconnexion.php' class='btnDeco'>Deconnexion</a>";
                    echo "<div class='connecte'><p class='user'>Connecté en tant que<br/> $nom $prenom </p></div>";
                }
                session_write_close();
                ?>
            </div>
        </div>
    </body>
</html>
