<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="mainStyle.css" />
        <title></title>
    </head>
    <body>
        <div class="module">
            <!--<h1>Mes activité</h1>-->
            <?php
            if($_SESSION['type']==1)
            {
                echo "<h1>Mes activité</h1>";
                //echo "<a href='supprimerGroupe.php' class='btnMenuLink'>Supprimer</a>";
                //echo "<br/>";
                include 'afficherActivite.php';
                echo "<br/> Chercher une activité : <br/>";
                echo "<br/><a href='chercherActivite.php' class='btnMenuLink'>Chercher</a><br/>";
                echo "<br/> S'inscrire à une activité : <br/>";
                echo "<br/><a href='candidaterActivite.php' class='btnMenuLink'>S'inscrire</a><br/>";
                echo "<br/> Mettre à jour une activité : <br/>";
                echo "<br/><a href='mettreAJour.php' class='btnMenuLink'>Mettre à jour</a>";
            }
            else
            {
                echo "<h1>Mes étudiants</h1>";
                //echo "<br/><br/>";
                include 'afficherEtudiant.php';
                echo "<br/> Chercher, créer ou supprimer une activité spécifique : <br/>";
                echo "<br/><a href='chercherActivite.php' class='btnMenuLink'>Chercher</a><br/>";
                echo "<br/><br/><a href='creer.php' class='btnMenuLink'>Créer</a><br/>";
                echo "<br/><br/><a href='supprimerProjet.php' class='btnMenuLink'>Supprimer</a><br/>";

            }
            ?>
        </div>

        <!--<div class="projet">
            <h1>Mes Activités</h1>
            <a href='creerProjet.php' class='btnMenuLink'>Créer</a>
            <a href='supprimerProjet.php' class='btnMenuLink'>Supprimer</a>
            <a href='candidaterActivite.php' class='btnMenuLink'>Candidater</a>
            <br/><br/>
            <?php
            // include 'afficherProjet.php';
            ?>
        </div>-->
    </body>
</html>
