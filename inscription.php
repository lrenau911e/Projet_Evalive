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
            <form method="POST" action="creationProfil.php">
                <input type="text" name="nom" class="inputs" placeholder="Nom"/>
                <br/>
                <input type="text" name="prenom" class="inputs" placeholder="Prenom"/>
                <br/>
                <input type="text" name="id" class="inputs" placeholder="Identifiant"/>
                <br/>
                <input type="text" name="mdp" class="inputs" placeholder="Mot de passe"/>
                <br/>
                <input type="text" name="confmdp" class="inputs" placeholder="Recopiez votre Mot de Passe"/>
                <br/>
                <input type="text" name="mail" class="inputs" placeholder="Mail"/>
                <br/>
                <select class="inputs" name="statut">
                    <option value="1">Etudiant</option> 
                    <option value="2" selected>Enseignant</option>
                </select>
                <button type="submit" class="btnConnexion" >Confirmer</button>
                <br/>
            </form>
        </div>
    </body>
</html>
