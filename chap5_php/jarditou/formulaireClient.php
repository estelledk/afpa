<?php 
include ('controller/clientController.php');   //validation en PHP
include ('header.php');

if (isset($_POST['submit']) && count($formError) === 0)  //s'il y a un post submit (isset <=> présent) et le nb d'erreurs =0
{
?>
	<p>il n'y a pas d'erreurs</p>  <!-- affichage en html, donc en dehors des balises php -->
<?php 
}
else   //on affiche le formulaire pour le remplir à nouveau 
{  
?>



<title>formulaire</title>

<form action="#" method="post" enctype="multipart/form-data">  
<!-- action="#" : pas de redirection, ce sera affiché en haut du questionnaire -->


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
			<label for="inom"> nom</label>
			<input id="inom" class="form-control" type="text" name="nom" class="champ" 
			 value="<?= isset($_POST['nom']) ? $_POST['nom'] : '' ?>" required> 
			 <p><?= isset($formError['nom']) ? $formError['nom'] : '' ?></p>
			<!-- id="inom" utilisé en JS dans la fonction validation -->
			<!-- required est nécessaire dans validation.js/function nomValid/if -->
			<!-- si la valeur de nom est pésente(isset...) alors(?) on récupère la valeur nom postée($_POST['nom'] sinon(:) on n'affiche rien ('') -->

		</div>
		<div class="col-lg-1"><br><br>
<!-- 			<span id="inomMiss" class="error">saisie manquante</span> -->
<!-- 			<span id="inomInvalid" class="error">Caractère invalide</span> -->
<!-- 			<span id="inomValid" class="valid">&#10003</span> -->
			<span id="inomBis"></span><br>	
			<!-- id="inomBis" utilisé en JS dans la fonction validation, si regex ok -->
		</div>
		
<!-- prenom -->		
		<div class="col-lg-3">
			<label for="iprenom">prénom</label>
			<input id="iprenom" class="form-control" type="text" name="prenom" class="champ" 
			 value="<?= isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>" required> 
			 <p><?= isset($formError['prenom']) ? $formError['prenom'] : '' ?></p>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="iprenomBis"></span><br>
		</div>
		
<!-- naissance -->		
		<div class="col-lg-2">
			<label for="inaissance"> date de naissance</label>
			<input id="inaissance" class="form-control" type="text" name="naissance" class="champ" 
			 value="<?= isset($_POST['naissance']) ? $_POST['naissance'] : '' ?>" required> 
			 <p><?= isset($formError['naissance']) ? $formError['naissance'] : '' ?></p>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="inaissanceBis"></span><br>
		</div>
	</div>
	<br><br>	
		    
  	<div class="form-row">
<!-- adresse --> 
		<div class="col-lg-4">
			<label for="iadresse"> adresse</label>
			<textarea id="iadresse" class="form-control" name="adresse" rows="3" class="form-control" 
			 value="<?= isset($_POST['adresse']) ? $_POST['adresse'] : '' ?>" required> </textarea>
			 <p><?= isset($formError['adresse']) ? $formError['adresse'] : '' ?></p>
			<!-- textarea pour écrire sur plusieurs lignes -->
		</div>
		<div class="col-lg-1"><br><br>
			<span id="iadresseBis"></span><br>
		</div>
		
<!-- ville -->		
		<div class="col-lg-3">
			<label for="iville"> ville</label>
			<input id="iville" class="form-control" type="text" name="ville" class="form-control" 
			 value="<?= isset($_POST['ville']) ? $_POST['ville'] : '' ?>" required> 
			 <p><?= isset($formError['ville']) ? $formError['ville'] : '' ?></p>  
		</div>
		<div class="col-lg-1"><br><br>
			<span id="ivilleBis"></span><br>
		</div>

<!-- postal -->		
		<div class="col-lg-2">
			<label for="ipostal"> code postal</label>
			<input id="ipostal" class="form-control" type="text" name="postal" class="form-control" 
			 value="<?= isset($_POST['postal']) ? $_POST['postal'] : '' ?>" required> 
			 <p><?= isset($formError['postal']) ? $formError['postal'] : '' ?></p>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="ipostalBis"></span><br>
		</div>
	</div>
	<br><br>

<!-- email -->	    
	<div class="form-row">
		<div class="col-lg-11">
			<label for="iemail"></label> e-mail</label>
			<input id="iemail" class="form-control" type="email" name="email" class="form-control" size="30" placeholder="ex :  blablabla@gmail.com" 
			 value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required> 
			 <p><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
			<!-- type="email" -->
		 	<!-- placeholder pour écrire en grisé -->
		</div>
		<div class="col-lg-1"><br><br>
			<span id="iemailBis"></span><br>
		</div>
	</div>
  	<br><br>  
 	  
  	<h5>Le jardinage</h5>
	<div class="form-row">
	
<!-- jardin -->		
		<div class="col-lg-3">
			<label for="ijardin">Vous avez : un jardin </label>
			<input id="ijardin" type="radio" name="jardinage" value="jardin" id="ijardin" checked>
		</div>
		<div class="col-lg-2">
			<label for="ibalcon">	un balcon </label>
			<input id="ibalcon"type="radio" name="jardinage" value="balcon" id="ibalcon">
		</div>
	</div>	
	<br><br>	  
  
	<div class="form-row">
<!-- frequence -->	
		<div class="col-lg-4">
			Vous jardinez... 
			<select id="ifrequence" name="frequence" class="form-control" 
			 value="<?= isset($_POST['frequence']) ? $_POST['frequence'] : '' ?>" required> 
			 <p><?= isset($formError['frequence']) ? $formError['frequence'] : '' ?></p>
				<option value="">choisissez</option>
				<!-- <option value="occasionnellement">occasionnellement</option>   <!-- selected = si on souhaite que ce soit la valeur affichée par défaut -->
				<option value="une fois par semaine">une fois par semaine</option>
				<option value="quotidiennement">quotidiennement</option>
				<option value="autre">autre</option>
			</select><br>
		</div>
		<div class="col-lg-1"><br>
			<span id="ifrequenceBis"></span><br>
		</div>
		
<!-- autre -->
		<div class="col-lg-6">
			<label for="iautre">si vous avez répondu "autre", précisez </label>
			<textarea id="iautre" name="autre" class="form-control" rows="3" cols="77"
			value="<?= isset($_POST['autre']) ? $_POST['autre'] : '' ?>"></textarea><br><br>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="iautreBis"></span><br>
		</div>
	</div>
	<br><br>
	
<!-- commentaire -->	    
	<div class="form-row">
		<div class="col-lg-11">
			<textarea id="icommentaire" name="commentaire" class="form-control" rows="5" cols="100" placeholder="vos commentaires" 
			 value="<?= isset($_POST['commentaire']) ? $_POST['commentaire'] : '' ?>"></textarea><br><br>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="icommentaireBis"></span><br>
		</div>
	</div>
	
<!-- jour -->		    
	<div class="form-row">
		<div class="col-lg-4">
		<!-- Dans action="validation.php",  $_POST["Fjour]" contiendra un tableau dont il faudra lire les valeurs à l'aide d'une boucle -->
			<label id="ijour">Vous jardinez plutôt le : </label><br>
    			<input type="checkbox" name="Fjour[]" value="lundi"> Lundi<br>
            	<input type="checkbox" name="Fjour[]" value="mardi"> Mardi<br>
            	<input type="checkbox" name="Fjour[]" value="mercredi"> Mercredi<br>
            	<input type="checkbox" name="Fjour[]" value="jeudi"> Jeudi<br />
            	<input type="checkbox" name="Fjour[]" value="vendredi"> Vendredi<br>
            	<input type="checkbox" name="Fjour[]" value="samedi"> Samedi<br />
            	<input type="checkbox" name="Fjour[]" value="dimanche"> Dimanche<br>
            	<span value="<?= isset($_POST['jour']) ? $_POST['jour'] : '' ?>"</span>
	<br><br>
		</div>
		<div class="col-lg-1"><br><br>
			<span id="ijourBis"></span><br>
		</div>
	</div>

	</div>
	
	<div>
    <!-- bouton envoyer et affacer -->
	<input id="envoyer" type="submit" value="envoyer" class="btn btn-info" name="submit" >
	<!-- type="submit" pour envoyer le formulaire -->
		 
	<input id="effacer" type="reset" value="effacer" class="btn btn-outline-secondary" name="effacer" >
	<!-- type="reset" pour effacer le formulaire -->
	
	</div>	 
	
</div>
</form>

<br>

<div class="container-fluid"> 
	<h4><a href="mailto/estelle.fentza@gmail.com?subject=complément d'informations">Ecrivez-nous pour tout complément d'informations</a></h4>
</div>
<br><br>

<!-- lien vers la validation en temps réel via le fichier validation.js -->


<?php 
}
include("footer.php");
?>
   
<script src="assets/js/controller/clientControllerJQ.js"></script>

</body>
</html>