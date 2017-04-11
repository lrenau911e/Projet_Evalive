<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="mainStyle.css" />
        <title></title>
    </head>
    <body>
        <div class="groupe">
            <h1>Mes activité</h1>
            <?php
            if($_SESSION['type']==1)
            {
                echo "<a href='supprimerGroupe.php' class='btnMenuLink'>Supprimer</a>";
            }
            echo "<br/><br/>";
            // include 'afficherGroupe.php';
            ?>
        </div>

        <div class="projet">
            <h1>Mes Projets</h1>
            <a href='creerProjet.php' class='btnMenuLink'>Créer</a>
            <a href='supprimerProjet.php' class='btnMenuLink'>Supprimer</a>
            <a href='candidatureProjet.php' class='btnMenuLink'>Candidater</a>
            <br/><br/>
            <?php
            // include 'afficherProjet.php';
            ?>
    </body>
</html>
