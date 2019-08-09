<?php 

include ("entete.php");

$date = date("Y-m-d H:i:s");

if($_POST['pro_bloque'] == 0){   // la valeur 0 n'est pas acceptée, il faut que ce soit NULL ou 1
    $_POST['pro_bloque'] = NULL;
}


//définition des regex
$regexPhoto = '/.(gif|jpg|jpeg|png)$/';   //.gif + .jpg + .jpeg + .png
$regexReference = '/^[0-9A-Za-z]+$/';  //chiffres + lettres + majuscules
$regexLibelle = '/^[A-Za-z]+$/';    //lettres + majuscules
$regexDescription = '/^[A-Za-z\s\-àâéèêîïôöù]+$/'; 	 //lettres + blancs(\s) + tiret(\-) + accents
$regexPrix = '/^[0-9,.]*$/';   //chiffres + virgule + point
$regexStock = '/^[0-9]+$/';   //chiffres
$regexCouleur = '/^[A-Za-z]+$/';  //lettres
$regexAjout = '/^([2][0-9]{3}\-([0-1])([0-9])\-[0-1-2])([0-9])$/';  //année(en 2000)-mois-jour
$regexModif = '/^([2][0-9]{3}\-([0-1])([0-9])\-[0-1-2])([0-9])$/';
$regexBloque = '/^oui|non$/'; //oui + non


include("connexionBase.php");
$db = connexionBase();       // appel de la fonction de connexion


//propre à la MODIFICATION : extensions du fichier téléchargé
    $aMimeTypes = array("image/gif","image/jpeg","image/pjpeg","image/png", "image/x-png","image/tiff");  //tableau stockage des tupes de fichiers
    $finfo = finfo_open(FILEINFO_MIME_TYPE);  //ouvre la fonction fileinfo_...
    $mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);  //stocke l'extension(=mime_type) du fichier envoyé
    finfo_close($finfo);   //ferme la fonction finfo_...


//MISE A JOUR(update ... set ...)
$requete = $db->prepare("UPDATE produits SET pro_cat_id = :pro_cat_id, pro_ref = :pro_ref, pro_libelle = :pro_libelle, pro_description = :pro_description, pro_prix = :pro_prix, pro_stock = :pro_stock, pro_couleur = :pro_couleur, pro_d_modif = :pro_d_modif, pro_bloque = :pro_bloque WHERE pro_id =".$_POST['pro_id']); 
//$db->prepare est préalable au bindValue
   //!! on a retiré date_d_ajout et pro_photo par rapport au scriptAjout

//relie la valeur(bindValue)
                //du paramètre à insérer(':pro_...') 
                              //et la valeur à insérer qui à été postée($_Post['pro_...])
$requete->bindValue(':pro_cat_id', $_POST['pro_cat_id']);  
$requete->bindValue(':pro_ref', $_POST['pro_ref']);
$requete->bindValue(':pro_libelle', $_POST['pro_libelle']);
$requete->bindValue(':pro_description', $_POST['pro_description']);
$requete->bindValue(':pro_prix', $_POST['pro_prix']);
$requete->bindValue(':pro_stock', $_POST['pro_stock']);
$requete->bindValue(':pro_couleur', $_POST['pro_couleur']);
$requete->bindValue(':pro_d_modif', $date);
$requete->bindValue(':pro_bloque', $_POST['pro_bloque']);


//validation côté serveur
if (!preg_match($regexReference, $_POST['pro_ref']) || !preg_match($regexLibelle, $_POST['pro_libelle']) || !preg_match($regexDescription, $_POST['pro_description']) || !preg_match($regexPrix, $_POST['pro_prix']) || !preg_match($regexStock, $_POST['pro_stock']) || !preg_match($regexCouleur, $_POST['pro_couleur'] ) || !in_array($mimetype,$aMimeTypes)) {  
    
    if (!preg_match($regexReference, $_POST['pro_ref'])) {
        ?><p><br><br><br>Référence invalide</P><br>
   		<center><a href="formulaireModification.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexLibelle, $_POST['pro_libelle'])) {                        
        ?><p><br><br><br>Libellé invalide</P><center><a href="formulaireModification.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexDescription, $_POST['pro_description'])) {         
        ?><p><br><br><br>Description invalide</P><center><a href="formulaireModification.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexPrix, $_POST['pro_prix'])) {                   
        ?><p><br><br><br>Prix invalide</P><center><a href="formulaireModification.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexStock, $_POST['pro_stock'])) { 
        ?><p><br><br><br>Stock invalide</P><center><a href="formulaireModification.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } if (!preg_match($regexCouleur, $_POST['pro_couleur'])) {   
        ?><p><br><br><br>Couleur invalide</P><center><a href="formulaireModification.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } //propre à la MODIFICATION :
      if (!in_array($mimetype,$aMimeTypes)){  //si l'extension du fichier envoyé correspond à une des extensions du tableau aMimeTypes
        ?><p><br><br><br>Format photo invalide</P><center><a href="formulaireModification.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
		<br><?php 
    } 
} else {
    $extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1);  //trouve l'extension
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "assets/img" ."/" .$_POST["pro_id"] ."." .$extension);  //Si le fichier est autorisé on le déplace dans le dossier assets/img
    
    $requete->execute();   //execute toutes les requêtes
    header('Location:http://localhost/projet/chap5_php/jarditou/liste.php');   //redirection (en PHP) une fois le traitement terminé
    ?><span><br><br><br>tous les champs sont valides<br></span>
    <center><a href="liste.php"><input type="button" class="btn btn-secondary" value="ok"></a></center>
	<br>
		
<?php 
}
?>

