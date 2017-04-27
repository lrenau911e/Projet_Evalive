<?php
//session_start();

$BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$login = $_SESSION['login'];
$id = $_SESSION['id'];

$requete = $BDD -> query ('SELECT nom_personne, prenom_personne, nom_activite, avancement, nb_etape FROM personne, activite, realiser_activite WHERE personne.no_personne = realiser_activite.id_personne 
	AND realiser_activite.id_activite = activite.id AND activite.responsable = \''.$id.'\''); 

while ($donnees = $requete -> fetch()) 
{
	echo "<b>Nom : </b>" .$donnees['prenom_personne'];
	echo $donnees['nom_personne']. "<br/>";
    echo "<b>Activite : </b>" .$donnees['nom_activite']. "<br/>";
    echo "<b>Avancement : </b>" .$donnees['avancement']. " /".$donnees['nb_etape']."<br/><br/>";
    
}

?>