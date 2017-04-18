<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="mainStyle.css" />
        <title></title>
	</head>
	<body>
		<?php include 'header.php'; ?>

		<div class="module">
            <form method="POST" action="candidaterActivite.php">
                <h3>Choisissez l'activité</h3>
                <select name="idActivite" class="inputs">
                    <?php
	                    $BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

						$requete = $BDD -> query ('SELECT * FROM activite ORDER BY nom_activite');

						while ($donnees = $requete -> fetch()) 
					    {
					        echo "<option class='inputs' value='".$donnees['id']."'>".$donnees['nom_activite']."</option>";
					    }
                    ?>
                </select>
                <button type='submit' class='btnMenuLink'>Confirmer</button>
            </form>
        </div>

        <?php
	        if(isset($_POST['idActivite']))
	        {
	        	$idActivite = $_POST['idActivite'];

	            $BDD = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'Loic.Renault', 'Lou.35.Lou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	            $Requete = $BDD -> prepare ('INSERT INTO realiser_activite (id_activite, id_personne) VALUES(:idActivite, :idPersonne)');
	            $Requete -> execute (array ('idActivite' => $idActivite, 'idPersonne' => $_SESSION['id']));
	            
	            //echo 'On est bien rentré dans la condition insertion';
	        }
        ?>

        <div>
        	<?php
        	//echo $_SESSION['id'].$idActivite;
        	?>
        </div>
	</body>
</html>