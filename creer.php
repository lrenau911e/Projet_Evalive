<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="mainStyle.css" type="text/css">
    </head>
    <body>
        <?php  include 'header.php'; ?>

        <div class = "connexion">
            <form method="POST" action="creerActivite.php">
                <input type="text" name="nom_activite" class="inputs" placeholder="Nom"/>
                <br/>
                <b> Choisissez le module associé: </b>
                <select name="idModule" class="inputs">
                    <?php
                        $BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                        $requete = $BDD -> query ('SELECT * FROM module ORDER BY nom_module');

                        while ($donnees = $requete -> fetch()) 
                        {
                            echo "<option class='inputs' value='".$donnees['id_module']."'>".$donnees['nom_module']."</option>";
                        }
                    ?>
                    <br/>
                </select>
                <input type="text" name="nb_etape" class="inputs" placeholder="le nombre d'étapes"/>
                <br/>
                <input type="text" name="description" class="inputs" placeholder="description de l'activité"/>
                <br/>
                <button type="submit" class="btnConnexion" >Confirmer</button>
                <br/>
            </form>
        </div>
    </body>
</html>
