<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="mainStyle.css" type="text/css">
    </head>
    <body>
        <?php include 'header.php'; ?>

    	<div class="connexion">
            <form method = "POST" action="connexionProfil.php">
                <input type ="text" name="login" class="inputs" placeholder="Identifiant"/>
                <br/>
                <input type="password" name="mdp" class="inputs" placeholder="Mot de Passe"/>
                <br/>
                <br/>
                <button type="submit" class="btnConnexion">Connexion</button>
            </form>
        </div>
    </body>
</html>