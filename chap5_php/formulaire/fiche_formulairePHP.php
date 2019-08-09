<!DOCTYPE html>
...
<body>


<!-- --------------- lien vers la validation serveur avec le fichier validation.php --------------- -->

<form action="pageRedirection.php" method="post" enctype="multipart/form-data">
<!-- method="POST" : données transmises sans passer dans l'URL  
ou   method="GET" : données passent dans l'URL 
	 enctype="multipart/form-data" obligatoire, détermine le type de données renvoyées par le formulaire -->

<div class="jumbotron"> <!-- (B) class="jumbotron" affiche un fond bleuté -->
	<div class="text-center">  <!-- (B) class="text-center" centre le texte -->
		<h2>titreH2</h2><br><br>
	</div>

<!-- action="upload_formulairePHP.php"
    <p><input type="file" name="fichier" size="30">
    <input type="submit" name="upload" value="Uploader">
    </p><br> -->
    
   
    <h5>titreH5</h5>
    
    <div class="form-row">  <!-- une ligne est composée de 12 colonnes -->
    <!-- (B) class="row" permet de classer la ligne composée de 12 col ; 
  	avec (B) class="form-row" les col sont plus compact peuvent se mettre en ligne si page étroite -->
	
<!-- aaa -->
		<div class="col-lg-4">  <!-- (B) class="col-lg-4" le champ occupera 4 col -->
			<label for="aaa">affiche champs</label>
			<input id="aaa" class="form-control" type="text" name="aaa" required> <!-- (B) class="form-control" cadre allongé et arrondi --> 
			<!-- id="i_aa" utilisé en JS dans la fonction validation -->
			<!-- required est nécessaire dans validation.js/function nomValid/if -->
		</div>
		<div class="col-lg-1"><br><br>
			<span id="aaaBis"></span><br>	
			<!-- id="i_aaBis" cf validation.js/function validation()/affichage validation -->
		</div>
		
<!-- bbb -->		
		<div class="col-lg-3">
			<label for="bbb">affiche champs</label>
			<input id="bbb" class="form-control" type="email" name="bbb" placeholder="ex :  blablabla@gmail.com"  required>
			<!-- placeholder affiche champs prérempli -->		
		</div>
		<div class="col-lg-1"><br><br>
			<span id="bbbBis"></span><br>
		</div>
		
 ...
		
	</div>

		    
  	<div class="form-row"> <!-- une nouvelle div row pour nouvelle ligne de 12 col -->
<!--  -->
		<div class="col-lg-...">
		</div>
<!--  -->		
		<div class="col-lg-...">
		</div>
<!--  -->		
		<div class="col-lg-...">
		</div>
	</div>
 
<!-- ccc -->		  
	<div class="form-row">
		<div class="col-lg-...">
			<select id="ccc" class="form-control" name="ccc">
				<option value="" selected>choisissez</option>  <!-- selected = si on souhaite que ce soit la valeur affichée par défaut -->
				<option value="intitulé1">intitulé1</option>   
				<option value="intitulé2">intitulé2</option>
				<option value="intitulé3">intitulé3</option>
			</select><br>
		</div>
		<div class="col-lg-1"><br>
			<span id="cccBis"></span><br>
		</div>
	</div>


<!-- jour -->		    
	<div class="form-row">
		<div class="col-lg-...">
		<!-- Dans action="validation.php",  $_POST["Fjour]" contiendra un tableau dont il faudra lire les valeurs à l'aide d'une boucle -->
			<label id="jour" >affiche champs</label><br>
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
			<span id="jourBis"></span><br>
		</div>
	</div>
	
<!-- BOUTONS ENVOYER ET ANNULER -->	
	<input type="submit" value="envoyer" class="btn btn-info" name="envoyer" id="envoyer">
	<!-- type="submit" pour envoyer le formulaire -->
		 
	<input type="reset" value="effacer" class="btn btn-outline-secondary" name="effacer" id="effacer">
	<!-- type="reset" pour effacer le formulaire -->
		 
</div>
</form>

<br>

<div class="container-fluid"> 
	<h4><a href="mailto/estelle.fentza@gmail.com?subject=complément d'informations">Ecrivez-nous pour tout complément d'informations</a></h4>
</div>
<br><br>



<!-- --------------- lien vers la validation en temps réel via le fichier validation.js --------------- -->
    <script src="assets/js/validation.js"></script>
    




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>	
</body>
</html>
	

       