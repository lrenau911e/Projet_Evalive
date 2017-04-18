<?php
$nom=$_SESSION['nom'];

$BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requete = $BDD -> query ('SELECT * FROM activite ORDER BY nom_activite');

while ($donnees = $requete -> fetch();) 
    {
    	echo $donnees['id'].' et '.$donnees['nom_activite'].'<br/>';
        //echo "<option class='inputs' value='".$donnees['id']."'>".$tuple['nom_activite']."</option>";
    }

$reponse->closeCursor(); // Termine le traitement de la requête
?>

