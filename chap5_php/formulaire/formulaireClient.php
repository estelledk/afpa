<?php 
include ("entete.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>formulaire</title>
</head>

<body>

<!-- lien vers la validation serveur avec le fichier validation.php -->

<form action="validationFormClient.php" method="post" enctype="multipart/form-data">  
<!-- method="post" obligatoire ainsi que enctype="multipart/form-data" qui détermine le type de données renvoyées par le formulaire -->


<div class="jumbotron">
<!-- class="jumbotron" affiche un fond bleuté -->
	<div class="text-center">
		<h2>FORMULAIRE</h2><br><br>
	</div>

<!-- action="upload_formulairePHP.php"
    <p><input type="file" name="fichier" size="30">
    <input type="submit" name="upload" value="Uploader">
    </p><br> -->
    
   
    <h5>Vos coordonnées</h5>
    <div class="form-row">  <!-- class="row" permet de classer la ligne composée de 12 col ; avec class="form-row" les col peuvent se mettre en ligne si page étroite -->
<!-- nom -->
		<div class="col-lg-4">  <!-- class="col-lg-4" = 4 colonnes -->
			<label for="i_nom"> nom</label>
			<input id="i_nom" class="form-control" type="text" name="nom" class="form-control" required> 
			<!-- id="i_nom" utilisé en JS dans la fonction validation -->
			<!-- required est nécessaire dans validation.js/function nomValid/if -->
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_nomBis"></span><br>	
			<!-- id="i_nomBis" utilisé en JS dans la fonction validation, si regex ok -->
		</div>
<!-- prenom -->		
		<div class="col-lg-3">
			<label for="i_prenom">prénom</label>
			<input id="i_prenom" class="form-control" id="i_prenom" type="text" name="prenom" class="form-control" id="i_prenom" required>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_prenomBis"></span><br>
		</div>
<!-- naissance -->		
		<div class="col-lg-2">
			<label for="i_naissance"> date de naissance</label>
			<input id="i_naissance" class="form-control" id="i_naissance" type="text" name="naissance" class="form-control" id="i_naissance" required>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_naissanceBis"></span><br>
		</div>
	</div>
	<br><br>	
		    
  	<div class="form-row">
<!-- adresse -->
		<div class="col-lg-4">
			<label for="i_adresse"> adresse</label>
			<textarea id="i_adresse" class="form-control" id="i_adresse" name="adresse" rows="3" class="form-control" id="i_adresse" required></textarea> 
			<!-- textarea pour écrire sur plusieurs lignes -->
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_adresseBis"></span><br>
		</div>
<!-- ville -->		
		<div class="col-lg-3">
			<label for="i_ville"> ville</label>
			<input id="i_ville" class="form-control" id="i_ville" type="text" name="ville" class="form-control" id="i_ville" required>  
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_villeBis"></span><br>
		</div>
<!-- postal -->		
		<div class="col-lg-2">
			<label for="i_postal"> code postal</label>
			<input id="i_postal" class="form-control" id="i_postal" type="text" name="postal" class="form-control" id="i_postal" required> 
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_postalBis"></span><br>
		</div>
	</div>
	<br><br>
<!-- email -->	    
	<div class="form-row">
		<div class="col-lg-11">
			<label for="i_email"></label> e-mail</label>
			<input id="i_email" class="form-control" type="email" name="email" class="form-control" size="30" placeholder="ex :  blablabla@gmail.com" id="i_email" required>  
			<!-- type="email" -->
		 	<!-- placeholder pour écrire en grisé -->
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_emailBis"></span><br>
		</div>
	</div>
  	<br><br>  
  	  
  	<h5>Le jardinage</h5>
	<div class="form-row">
<!-- jardin -->		
		<div class="col-lg-3">
			<label for="i_jardin">Vous avez : un jardin </label>
			<input id="i_jardin" type="radio" name="jardinage" value="jardin" id="i_jardin" checked>
		</div>
		<div class="col-lg-2">
			<label for="i_balcon">	un balcon </label>
			<input id="i_balcon"type="radio" name="jardinage" value="balcon" id="i_balcon">
		</div>
	</div>	
	<br><br>	  
	  
	<div class="form-row">
<!-- frequence -->	
		<div class="col-lg-4">
			Vous jardinez... 
			<select id="i_frequence" name="frequence" class="form-control" id="i_frequence">
				<option value="">choisissez</option>
				<option value="occasionnellement">occasionnellement</option>   <!-- selected = si on souhaite que ce soit la valeur affichée par défaut -->
				<option value="une fois par semaine">une fois par semaine</option>
				<option value="quotidiennement">quotidiennement</option>
				<option value="autre">autre</option>
			</select><br>
		</div>
		<div class="col-lg-1"><br>
			<span id="i_frequenceBis"></span><br>
		</div>
<!-- autre -->
		<div class="col-lg-6">
			<label for="i_autre">si vous avez répondu "autre", précisez </label>
			<textarea id="i_autre" name="autre" class="form-control" rows="3" cols="77" id="i_autre"></textarea><br><br>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_autreBis"></span><br>
		</div>
	</div>
	<br><br>
<!-- commentaire -->	    
	<div class="form-row">
		<div class="col-lg-11">
			<textarea id="i_commentaire" name="commentaire" class="form-control" rows="5" cols="100" placeholder="vos commentaires" ></textarea><br><br>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_commentaireBis"></span><br>
		</div>
	</div>
<!-- jour -->		    
	<div class="form-row">
		<div class="col-lg-4">
		<!-- Dans action="validation.php",  $_POST["Fjour]" contiendra un tableau dont il faudra lire les valeurs à l'aide d'une boucle -->
			<label id="i_jour">Vous jardinez plutôt le : </label><br>
			<input type="checkbox" name="Fjour[]" value="lundi"> Lundi<br>
	<input type="checkbox" name="Fjour[]" value="mardi"> Mardi<br>
	<input type="checkbox" name="Fjour[]" value="mercredi"> Mercredi<br>
	<input type="checkbox" name="Fjour[]" value="jeudi"> Jeudi<br />
	<input type="checkbox" name="Fjour[]" value="vendredi"> Vendredi<br>
	<input type="checkbox" name="Fjour[]" value="samedi"> Samedi<br />
	<input type="checkbox" name="Fjour[]" value="dimanche"> Dimanche<br>
	<br><br>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="i_jourBis"></span><br>
		</div>
	</div>
	
	<input id="envoyer" type="submit" value="envoyer" class="btn btn-info" name="envoyer" >
	<!-- <input type="submit" name="envoyer" value="Envoyer">   -->
	<!-- type="submit" pour envoyer le formulaire -->
		 
	<input id="effacer" type="reset" value="effacer" class="btn btn-outline-secondary" name="effacer" >
	<!-- type="reset" pour effacer le formulaire -->
		 
</div>
</form>

<br>

<div class="container-fluid"> 
	<h4><a href="mailto/estelle.fentza@gmail.com?subject=complément d'informations">Ecrivez-nous pour tout complément d'informations</a></h4>
</div>
<br><br>

<!-- lien vers la validation en temps réel via le fichier validation.js -->
    
    <script src="assets/js/validationFormClient.js"></script>





<?php 
include("pieddepage.php");
?>	


</body>
</html>	
