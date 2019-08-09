<?php 

include ("entete.php");

$date = date("Y-m-d");

if($_POST['pro_bloque'] == 0){   // la valeur 0 n'est pas acceptée, il faut que ce soit NULL ou 1
    $_POST['pro_bloque'] = NULL;
}


//définition des regex
$regexPhoto = '/.(gif|jpg|jpeg|png)$/';   //.gif + .jpg + .jpeg + .png
$regexReference = '/^[0-9A-Za-z]+$/';  //chiffres + lettres + majuscules
$regexLibelle = '/^[A-Za-z]+$/';    //lettres + majuscules
$regexDescription = '/^[A-Za-z\s\-àâéèêîïôöù]+$/'; 	 //lettres + blancs(\s) + tiret(\-) + accents
$regexPrix = '/^[0-9,.]*$/';  //chiffres + virgule + point
$regexStock = '/^[0-9]+$/';   //chiffres
$regexCouleur = '/^[A-Za-z]+$/';  //lettres
$regexAjout = '/^([2][0-9]{3}\-([0-1])([0-9])\-[0-1-2])([0-9])$/';  //année(en 2000)-mois-jour
$regexModif = '/^([2][0-9]{3}\-([0-1])([0-9])\-[0-1-2])([0-9])$/';
$regexBloque = '/^oui|non$/'; //oui + non


include("connexionBase.php");
$db = connexionBase();       // appel de la fonction de connexion


//AJOUT(insert into)
$query = $db->prepare("INSERT INTO produits(pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_d_modif, pro_bloque)  VALUES(:pro_cat_id, :pro_ref, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_photo,  :pro_d_ajout, :pro_d_modif, :pro_bloque)");
//$db->prepare est préalable au bindValue


//propre à l'AJOUT : auto incrémentation id
    $query_id = "SELECT AUTO_INCREMENT AS max FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'jarditou' AND TABLE_NAME = 'produits';"; //Requête pour avoir l'auto incrément
    $res_id = $db->query($query_id);
    $obj_id = $res_id->fetch(PDO::FETCH_OBJ);   //récupère le résultat de la requête
    $id = (int) $obj_id->max;   //on force la conversion de l'auto incrément en int' 
    $extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1);    //recupere l'extention du fichier pour l'image


//relie la valeur(bindValue)
                   //du paramètre à insérer(':pro_...')
                                        //et la valeur à insérer qui à été postée($_Post['pro_...])
$query->bindValue(':pro_cat_id', $_POST['pro_cat_id']); 
$query->bindValue(':pro_ref', $_POST['pro_ref']);
$query->bindValue(':pro_libelle', $_POST['pro_libelle']);
$query->bindValue(':pro_description', $_POST['pro_description']);
$query->bindValue(':pro_prix', $_POST['pro_prix']);
$query->bindValue(':pro_stock', $_POST['pro_stock']);
$query->bindValue(':pro_couleur', $_POST['pro_couleur']);
$query->bindValue(':pro_photo', $extension);
$query->bindValue(':pro_d_ajout',$date);
$query->bindValue(':pro_d_modif', NULL);
$query->bindValue(':pro_bloque', $_POST['pro_bloque']);



//validation côté serveur
if (!preg_match($regexReference, $_POST['pro_ref']) || !preg_match($regexLibelle, $_POST['pro_libelle']) || !preg_match($regexDescription, $_POST['pro_description']) || !preg_match($regexPrix, $_POST['pro_prix']) || !preg_match($regexStock, $_POST['pro_stock']) || !preg_match($regexCouleur, $_POST['pro_couleur'])) {  //||!in_array($mimetype, $aMimeTypes)) 
    if (!preg_match($regexReference, $_POST['pro_ref'])) {  
        ?><P><br><br><br>Référence invalide</P><br>
   		<center><a href="formulaireCreate.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexLibelle, $_POST['pro_libelle'])) {                        
        ?><P><br><br><br>Libellé invalide</P><center><a href="formulaireCreate.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexDescription, $_POST['pro_description'])) {         
        ?><P><br><br><br>Description invalide</P><center><a href="formulaireCreate.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexPrix, $_POST['pro_prix'])) {                   
        ?><P><br><br><br>Prix invalide</P><center><a href="formulaireCreate.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexStock, $_POST['pro_stock'])) { 
        ?><P><br><br><br>Stock invalide</P><center><a href="formulaireCreate.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexCouleur, $_POST['pro_couleur'])) {   
        ?><P><br><br><br>Couleur invalide</P><center><a href="formulaireCreate.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } 
} else {
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "assets/img" ."/" .$id ."." .$extension);  //Si le fichier est autorisé on le déplace dans le dossier assets/img en le renommant
    $query->execute();   //execute toutes les requêtes
    ?><span><br><br><br>tous les champs sont valides<br></span>
    <center><a href="liste.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
	<br>
	<?php 
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  <!-- responsive, s'adapte à la taille écran -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">

    <title>ajout</title>
</head>
<body></body>
</html>
    
    
