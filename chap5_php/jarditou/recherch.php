<?php

include ('connexionBase.php');

$id = $_GET['id'];
$query = 'SELECT * FROM `produits` WHERE `pro_id` = :id';  //":id" est notre marqueur nominatif, sa syntaxe sera toujours la même (:nom_marqueur)
$result = $db->prepare($query);  //nous allons utiliser la méthode "prepare()" plutôt que "query()". On va dire que l'on fait une requête préparée
$result->bindValue(':id', $id, PDO::PARAM_INT);  //on va ensuite lier une valeur à notre marqueur nominatif, en faisant un bindValue(lier la valeur), et le type de donnée(ici INT)
$result->execute(); //on execute la requête
$product = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();

?>
    
               