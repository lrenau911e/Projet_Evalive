<?php 
session_start();

$login = $_POST['login'];
$mdp= $_POST['mdp'];

$BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST['mdp']) AND isset($_POST['login'])) 
{
    $RequeteConnexion = $BDD -> query ('SELECT DISTINCT no_personne ,mdp, nom_personne, prenom_personne, type FROM PERSONNE WHERE login = \'' .$login. '\'');
    echo 'les deux champs ont bien été remplis. ';

    $donnees = $RequeteConnexion->fetch();
    if ($donnees['mdp'] == $mdp)
    {
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['nom'] = $donnees['nom_personne'];
        $_SESSION['prenom'] = $donnees['prenom_personne'];
        $_SESSION['type'] = $donnees['type'];
        $_SESSION['id'] = $donnees['no_personne'];
    }
    //echo 'Bonjour et bienvenu sur votre session '.$_SESSION['nom'].'!';
}
else
{
    echo "Veuillez remplir tous les champs !";
}
header ('Location: index.php');
?>