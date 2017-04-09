<?php
include 'header.php';
session_start();

$BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST['mdp']) AND isset($_POST['login'])) 
{
    $login = $_POST['login'];
    $mdp= $_POST['mdp'];
    $RequeteConnexion = $BDD -> query ('SELECT DISTINCT no_personne, mdp, nom_personne, prenom_personne, type FROM PERSONNE WHERE login = \'$login\'');

    while ($donnees = $RequeteConnexion->fetch())
    {
        if ($_POST['mdp'] == $passwordUser) 
        {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['mdp'] = $mdp;
            $_SESSION['nom'] = $donnees['nom_personne'];
            $_SESSION['prenom'] = $donnees['prenom_personne'];
            $_SESSION['type'] = $donnees['type'];
            $_SESSION['no_personne'] = $donnees['no_personne'];
        }
    }
    echo 'Bonjour et bienvenu sur votre session!';
}
?>