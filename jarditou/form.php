<title>formulaire</title>

<?php 
include("entete.php");
?>

 
<body>
<form action="form_validation.php" method="post" enctype="multipart/form-data">
<!-- class="jumbotron" affiche un fond bleuté -->
<div class="jumbotron">
	<div class="text-center">
		<h2>FORMULAIRE</h2><br><br>
	</div>

<!-- method="post" obligatoire ainsi que enctype="multipart/form-data" qui détermine le type de données renvoyées par le formulaire -->
<!-- action="ph7_upload_formulairePHP.php"
    <p><input type="file" name="fichier" size="30">
    <input type="submit" name="upload" value="Uploader">
    </p><br> -->
    
    <!-- class="form-row" présentation col qui peut se mettre en ligne si page étroite -->
    
    <h5>Vos coordonnées  (Les zones * sont obligatoires pour envoyer le formulaire)</h5>
    <div class="form-row">
    <!-- dans le class="form-group on détermine les colonnes-->
		<div class="form-group col-xl-6">
			<label for="nom">votre nom *</label>
			<input type="text" name="nom" class="form-control"
			 id="nom"> <!-- id="nom" utilisé en JS dans la fonction validation, si champ vide-->
			<!-- <span id="missNom"></span><br>	info: id="missNom" utilisé en JS dans la fonction validation, si regex ok -->
		</div>
		<div class="form-group col-xs-6">
			<label for="prenom">votre prénom *</label>
			<input type="text" name="prenom" class="form-control"
			 id="prenom" >
			<!-- <span id="missPrenom"></span><br>  -->
		</div>
		<div class="form-group col-xs-6">
			<label for="naissance">votre date de naissance *</label>
			<input type="text" name="naissance" class="form-control"
			 id="naissance" >
			<!-- <span id="missNaissance"></span><br>   -->
		</div>
	</div>
			    
  	<div class="form-row">
		<div class="form-group col-xl-6">
			<label for="adresse">votre adresse *</label>
			<textarea name="adresse" rows="3" class="form-control"
			 id="adresse"></textarea> <!-- textarea pour écrire sur plusieurs lignes -->
			<!-- <span id="missAdresse"></span><br>  -->
		</div>
		<div class="form-group col-l-6">
			<label for="ville">votre ville *</label>
			<input type="text" name="ville" class="form-control"
			 id="ville">
			<!-- <span id="missVille"></span><br>  -->
		</div>
		<div class="form-group col-xs-6">
			<label for="postal">votre code postal *</label>
			<input type="text" name="postal" class="form-control"
			 id="postal" placeholder="06000">  <!-- placeholder pour écrire en grisé -->
			<!-- <span id="missPostal"></span><br>  -->
		</div>
	</div>
			    
	<div class="form-group">
		<label for="mail">votre e-mail *</label>
		<input type="email" name="mail" class="form-control"
		 id="mail" placeholder="ex :  blablabla@gmail.com">	<!-- type="email" -->
		<!-- <span id="missMail"></span><br> -->
	</div>
  	<br><br>
		    
  	<h5>Le jardinage</h5>
	<div class="form-row">
		<div class="form-group col-l-6">
			<label>Vous avez : un jardin</label>
			<input type="radio" name="jardin" value="jardin">
		</div>
		<div class="form-group col-xl-6">
			<label >un balcon</label>
			<input type="radio" name="balcon" value="balcon">
		</div>
	</div>
			    
	<div class="form-row">
		<div class="form-group col-xl-6">
			<label for="frequence">Vous jardinez...</label><br>
			<select name="frequence">
				<option value="occasionnellement" selected>occasionnellement</option>
				<option value="une fois par semaine">une fois par semaine</option>
				<option value="quotidiennement">quotidiennement</option>
				<option value="autre">autre</option>
			</select><br><br>
		</div>
		<div class="form-group col-xl-6">
			<label for="autre">si vous avez répondu "autre", précisez </label>
			<textarea name="autre" rows="3" cols="70" ></textarea><br><br>
		</div>
	</div>
			    
	<div class="form-group">
		<textarea name="commentaire" rows="5" cols="100" placeholder="vos commentaires"></textarea><br>
	</div>
		    
	<!-- Dans action="ph7_form_validation.php",  $_POST["Fjour]" contiendra un tableau dont il faudra lire les valeurs à l'aide d'une boucle -->
	Vous jardinez plutôt le :<br>
	<input type="checkbox" name="Fjour[]" value="lundi"> Lundi<br>
	<input type="checkbox" name="Fjour[]" value="mardi"> Mardi<br>
	<input type="checkbox" name="Fjour[]" value="mercredi"> Mercredi<br>
	<input type="checkbox" name="Fjour[]" value="jeudi"> Jeudi<br />
	<input type="checkbox" name="Fjour[]" value="vendredi"> Vendredi<br>
	<input type="checkbox" name="Fjour[]" value="samedi"> Samedi<br />
	<input type="checkbox" name="Fjour[]" value="dimanche"> Dimanche<br>
	<br><br>
	<!-- <input type="submit" name="envoyer" value="Envoyer">   -->
	
	
	<!-- type="submit" pour envoyer le formulaire -->
	<input type="submit" class="btn btn-info" name="envoyer"
	 id="envoyer" value="envoyer">
	 
	<!-- type="reset" pour effacer le formulaire -->
	<input type="reset" class="btn btn-outline-secondary" name="effacer"
	 id="effacer" value="effacer">
	 
</div>
</form>

<br>

<div class="container-fluid"> 
	<h4><a href="mailto/estelle.fentza@gmail.com?subject=complément d'informations">Ecrivez-nous pour tout complément d'informations</a></h4>
</div>
<br><br>


<!-- <script src="formulaire/assets/js/ph7_formulairePHP.js"></script> -->	

<?php 
include("pieddepage.php");
?>		
