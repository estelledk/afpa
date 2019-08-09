<?php
include ("header.php");

//lance la fonction connexionBase qui est dans le fichier connexion_bdd
include("connexionBase.php");
$db = connexionBase();  // appel de la fonction de connexion

//on retire tout ce qui est GET

$query = "SELECT distinct cat_nom, cat_id FROM categories";          //query pour liste déroulante pro_cat_id
$result = $db->query($query);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
   <title>Ajout</title>
</head>

<body>
   
  <div class="jumbotron">
  <div class="container">
  <div class="col-6">
  
<!-- présentation du formulaire de modification via Sélection -->
<form action="createController.php" method="post" enctype="multipart/form-data">
<!-- enctype="multipart/form-data" à insérer pour umpload fichier -->
	
<!-- categorie -->				
	<label for="pro_cat_id" >Catégorie</label>
		<select name='pro_cat_id'  class="form-control">                    <!--liste déroulante-->
			<?php
			while ($row = $result->fetch(PDO::FETCH_OBJ)) {  //chercher lignes dans la table pour les stocker dans un tabl d'objets($result)
            ?>
           <option value="<?= $row->cat_id ?>"><?= $row->cat_nom ?></option>
           <?php
            }
            ?>
		</select>
	
<!-- reference -->	
	<div>
		<label for="pro_ref">Référence</label>
		<input type="text" name="pro_ref" class="form-control">
	</div>
	
<!-- libelle -->	
	<div>
		<label for="pro_libelle">Libellé</label>
		<input type="text" name="pro_libelle" class="form-control">
	</div>
	
<!-- description -->		
	<div>
		<label for="pro_description">Description</label>
		<textarea name="pro_description" class="form-control" cols="150" rows=auto></textarea>
	</div>
	
	
<!-- prix -->
	<div>
		<label for="pro_prix">Prix</label>
		<input type="text" name="pro_prix" class="form-control">		
	</div>
	
	
<!-- stock -->		
	<div>
		<label for="pro_stock">Stock</label>
		<input type="text" name="pro_stock" class="form-control">
	</div>
	
	
<!-- couleur -->
	<div>
		<label for="pro_couleur">Couleur</label>
		<input type="text" name="pro_couleur" class="form-control">
	</div>
	<br>
	
<!-- bloque -->
	<div class="form-row">
		<div>
			<label>Bloqué :  oui</label>
			<input type="radio" name="pro_bloque" value="1" checked>  <!-- value déterminée pour la BDD -->
				
			<label>non</label>
			<input type="radio" name="pro_bloque" value="0">   <!-- value déterminée pour la BDD -->
		 </div>
	</div>


<!-- fichier -->	
    <br>
    <p>
    	<input name="fichier" type="file" class="btn btn-secondary" size="30">
    	<!-- type="file" permet d'insérer un fichier -->
        <!-- <input type="submit" name="upload" value="Uploader">   pas besoin, dans ce formulaire on a le bouton valider -->
    </p>
    <br><br>


<!-- valider -->	
    <br>
    <center><input name="submit" type="submit" class="btn btn-info" value="valider"></center>
	<br>

</div>


</form>
</div>
</div>
<?php 
include("footer.php");
?>	


</body>
</html>
