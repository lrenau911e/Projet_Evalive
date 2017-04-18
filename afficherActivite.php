<?php
//session_start();

$BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$login = $_SESSION['login'];
$id = $_SESSION['id'];

$requete = $BDD -> query ('SELECT activite.id, nom_activite, description, avancement FROM activite, realiser_activite, personne WHERE personne.no_personne = realiser_activite.id_personne AND realiser_activite.id_activite = activite.id AND personne.no_personne = \''.$id.'\''); 

while ($donnees = $requete -> fetch()) 
{
    echo "<b>Nom : </b>" .$donnees['nom_activite']. "<br/>";
    echo "<b>Description : </b>" .$donnees['description']."<br/>";
    echo "<b>Avancement : </b>" .$donnees['avancement']. "%<br/>";
}

?>

