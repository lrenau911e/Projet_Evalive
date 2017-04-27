<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mainStyle.css" />
        <title>Evalive</title>
    </head>
    <body>
        <?php include 'header.php';
         
        $id = $_SESSION['id'];
        $recherche = $_POST['nomRecherche'];

        $BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        if ($recherche == "" ) 
        {
            echo "Veuillez remplir tous le champ de recherche !";
        } 
        else
        {
            $RequeteConnexion = $BDD -> query ('SELECT nom_activite, id_personne FROM activite, realiser_activite WHERE activite.nom_activite = \'' .$recherche. '\'');
            $donnees = $RequeteConnexion -> fetch();

            if ($donnees['id_personne'] == $id) //Si tu réalises cette activité affiche détails
            {
                echo "Tu es déjà inscrit à cette activité !";
                echo "<b>Nom : </b>" .$donnees['nom_activite']. "<br/>";
                echo "<b>Description : </b>" .$donnees['description']."<br/>";
                echo "<b>Avancement : </b>" .$donnees['avancement']. "%<br/>";
            }
            else //Sinon tu n'y participe pas encore donc tu peux t'inscrire.
            {
                echo "Tu n'est pas inscrit à cette activité : <br/>";
                echo "<b>Nom : </b>" .$recherche. "<br/>";
                echo "<br/><a href='candidaterActivite.php' class='btnMenuLink'>Candidater</a><br/>";
            }
        }
        ?>

    </body>
</html>