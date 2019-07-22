<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>testDb.php</title>
<?php
//lance la fonction connexionBase qui est dans le fichier connexion_bdd
include("connexion_bdd.php");
$db = connexionBase();


// Pour récupérer la variable passée dans l'URL, il faut utiliser le tableau associatif $_GET.
$pro_id = $_GET["pro_id"];

// requête pour afficher toutes les col relatives à un prod visible via wamp/jarditou.php
$requete = "SELECT * FROM produits WHERE pro_id =".$pro_id; 
$result = $db->query($requete);
$produit = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();
?>
</head>

<body>
<div class="jumbotron">
	<div class="form-group col-xs-6">
		<label for="pro_id">ID</label><br>
		<input type="text" name="pro_id" class="form-control" value="<?php echo $produit->pro_id; ?>">
	</div><br> 
	
	
	<div class="form-group col-xs-6">
		<label for="pro_ref">Référence</label><br>
		<input type="text" name="pro_ref" class="form-control" value="<?php echo $produit->pro_ref; ?>">
	</div><br>
	
				
	<div class="form-group col-xs-6">
		<label for="pro_cat_id">Catégorie</label><br>
		<input type="text" name="pro_cat_id" class="form-control" value="<?php echo $produit->pro_cat_id; ?>">
	</div><br>
	
	<div class="form-group col-xs-6">
		<label for="pro_libelle">Libellé</label><br>
		<input type="text" name="pro_libelle" class="form-control" value="<?php echo $produit->pro_libelle; ?>">
	</div><br>
		
	<div class="form-group col-xs-6">
		<label for="pro_description">Description</label><br>
		<textarea name="pro_description" class="form-control" cols="150" rows="5"><?php echo $produit->pro_description; ?></textarea>
	</div><br> 

	<div class="form-group col-xs-6">
		<label for="pro_prix">Prix</label><br>
		<input type="text" name="pro_prix" class="form-control" value="<?php echo $produit->pro_prix; ?>">		
	</div><br>
		
	<div class="form-group col-xs-6">
		<label for="pro_stock">Stock</label><br>
		<input type="text" name="pro_stock" class="form-control" value="<?php echo $produit->pro_stock; ?>">
	</div><br>

	<div class="form-group col-xs-6">
		<label for="pro_couleur">Couleur</label><br>
		<input type="text" name="pro_couleur" class="form-control" value="<?php echo $produit->pro_couleur; ?>">
	</div><br> 
	
<!-- 
	<div class="form-group col-xs-6">
		<label for="pro_photo">Photo</label><br>
		<input type="text" name="pro_photo" class="form-control" value="<?php echo $produit->pro_photo; ?>">
	</div><br><br>  -->

	<div class="form-row">
		<div class="form-group col-l-6">
		<label>Bloqué :  oui</label>
			<input type="radio" name="pro_bloque_oui" value="<?php echo $produit->pro_bloque; ?>">

			<label>non</label>
			<input type="radio" name="pro_bloque_non" value="<?php echo $produit->pro_bloque; ?>">
		</div>
	</div>
	
	<span name="pro_d_ajout" class="form-control"><?php echo "Date d'ajout : ".$produit->pro_d_ajout; ?></span><br>
			
	<span name="pro_d_modif" class="form-control"><?php echo "Date de modification : ".$produit->pro_d_modif; ?></span><br>

</div>
	
	
			
</body>
</html>
  
  