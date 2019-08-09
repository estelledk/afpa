<?php
//lance la fonction connexionBase qui est dans le fichier connexion_bdd
include("connexionBase.php");
$db = connexionBase();  // appel de la fonction de connexion


// Pour récupérer la variable passée dans l'URL, il faut utiliser le tableau associatif $_GET.
$pro_id = $_GET["pro_id"];


//requête pour afficher toutes les col relatives à un prod visible via wamp/jarditou.php
$query = "SELECT * FROM produits WHERE pro_id =".$pro_id; 
$result = $db->query($query);
$produit = $result->fetch(PDO::FETCH_OBJ);  //avoir toutes les valeurs sous forme objet
$result->closeCursor();

include ("header.php");
?>


<title>produits</title>


<!-- présentation du formulaire de modification via Sélection -->
<form action="liste.php" method="post" enctype="multipart/form-data">
<div class="jumbotron">
<!-- ID -->
	<div class="form-group col-xs-6">
		<label for="pro_id">ID</label>
		<input type="text" name="pro_id" class="form-control" value="<?php echo $produit->pro_id; ?>" readonly="readonly">
		<!-- readonly="readonly" fige la valeur, pas possiblité de la modifier  -->
	</div>
<!-- reference -->	
	<div class="form-group col-xs-6">
		<label for="pro_ref">Référence</label>
		<input type="text" name="pro_ref" class="form-control" value="<?php echo $produit->pro_ref; ?>">
	</div>
<!-- categorie -->				
	<div class="form-group col-xs-6">
		<label for="pro_cat_id">Catégorie</label>
		<input type="text" name="pro_cat_id" class="form-control" value="<?php echo $produit->pro_cat_id; ?>">
	</div>
<!-- libelle -->	
	<div class="form-group col-xs-6">
		<label for="pro_libelle">Libellé</label>
		<input type="text" name="pro_libelle" class="form-control" value="<?php echo $produit->pro_libelle; ?>">
	</div>
<!-- description -->		
	<div class="form-group col-xs-6">
		<label for="pro_description">Description</label>
		<textarea name="pro_description" class="form-control" cols="150" rows=auto><?php echo $produit->pro_description; ?></textarea>
	</div>
<!-- prix -->
	<div class="form-group col-xs-6" class="text-right">
		<label for="pro_prix">Prix</label>
		<input type="text" name="pro_prix" class="form-control" value="<?php echo $produit->pro_prix; ?>">		
	</div>
<!-- stock -->		
	<div class="form-group col-xs-6">
		<label for="pro_stock">Stock</label>
		<input type="text" name="pro_stock" class="form-control" value="<?php echo $produit->pro_stock; ?>">
	</div>
<!-- couleur -->
	<div class="form-group col-xs-6">
		<label for="pro_couleur">Couleur</label>
		<input type="text" name="pro_couleur" class="form-control" value="<?php echo $produit->pro_couleur; ?>">
	</div>
<!-- photo -->
	<div class="form-group col-xs-6">
		<label for="fichier">Photo</label><br>
		<input name="fichier" type="file" class="btn btn-secondary" size="30">
	</div><br><br> 

<!-- bloque -->
	<div class="form-row">
		<div class="form-group col-l-6">
			<?php 
            if ($produit->pro_bloque == 1) 
            { 
            ?>
		  
			<label>Bloqué :  oui</label>
			<input type="radio" name="pro_bloque" value="1" checked>
				
			<label>non</label>
			<input type="radio" name="pro_bloque" value="0">
			
			<?php 
            } 
            else 
            { 
            ?>
		  
			<label>Bloqué :  oui</label>
			<input type="radio" name="pro_bloque" value="1">
				
			<label>non</label>
			<input type="radio" name="pro_bloque" value="0" checked>
    		      
			<?php 
            } 
            ?>
		 </div>
	</div>
<!-- date d ajout -->	
	<span name="pro_d_ajout" class="form-control">
		<?php 
        echo "Date d'ajout : " .$produit->pro_d_ajout; 
        ?>
    </span><br>
<!-- date modif -->			
	<span name="pro_d_modif" class="form-control">
		<?php 
        echo "Date de modification : " .$produit->pro_d_modif; 
        ?>
	</span>
	
<!-- valider -->	
    <br><br>
     <center><input type="submit" value="valider" name="submit" class="btn btn-info"></center>
    

</div>

</form>
<?php 
include("footer.php");
?>	


</body>
</html>

