<?php

include ("entete.php");

$date = date("Y-m-d");



include("connexionBase.php");
$db = connexionBase();       // appel de la fonction de connexion


//SUPPRIME(delete from)
$requete = $db->prepare("DELETE FROM produits WHERE pro_id= $_GET[pro_id]");

$requete->execute();   //execute toutes les requêtes

?>



<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  <!-- responsive, s'adapte à la taille écran -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">

    <title>ajout</title>
</head>
<body>
	<br><br><br>
	<center><a href="liste.php"><input type="button" class="btn btn-secondary" value="retour"></a></center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<?php
    include ("pieddepage.php");
    ?>
</body>
</html>

