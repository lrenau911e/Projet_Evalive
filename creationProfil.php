<?php
include 'header.php';
$nameUser = $_POST['nom'];
$firstNameUser = $_POST['prenom'];
$idUser = $_POST['id'];
$passwordUser = $_POST['mdp'];
$passwordUser2 = $_POST['confmdp'];
$mailUser = $_POST['mail'];
$type = $_POST['statut'];

if ($nameUser == "" || $firstNameUser == "" || $idUser == "" || $passwordUser == "" || $passwordUser2 == "" || $mailUser == "") 
{
    echo "Veuillez remplir tous les champs !";
} 
else 
{
    if ($passwordUser != $passwordUser2) 
    {
        echo "Le mot de passe doit être le même dans les deux champs correspondant.";
    } 
    else 
    {
        $BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $RequeteConnexion = $BDD -> query ('SELECT DISTINCT COUNT(login) AS nblog FROM PERSONNE WHERE login= \''.$idUser. '\''); //Problème de requête, nblog semble être à 0 par défaut
        $donnees = $RequeteConnexion ->fetch();

        if ($donnees['nblog']==0) 
        {
            $req = $BDD -> prepare('INSERT INTO PERSONNE (login, mdp, nom_personne, prenom_personne, mail_personne, type) VALUES( :id, :mdp,  :nom, :prenom, :mail, :statut)');
            $req -> execute(array(
                'id' => $idUser,
                'mdp' => $passwordUser,
                'nom' => $nameUser,
                'prenom' => $firstNameUser,
                'mail' => $mailUser,
                'statut' => $type
                ));
            echo 'Insertion ok';
        }
        else
            echo'pas ok';
    }
}
?> 