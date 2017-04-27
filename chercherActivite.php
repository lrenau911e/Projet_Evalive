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
            <form method="POST" action="resultatsRecherche.php">
                <h3>Quelle activité recherchez-vous?</h3>
                <input type="text" name="nomRecherche" class="inputs" placeholder="Nom"/>
                
                <button type='submit' class='btnMenuLink'>Confirmer</button>
            </form>
        </div>

        <div>
        	<?php
        	//echo $_SESSION['id'].$idActivite;
        	?>
        </div>
	</body>
</html>