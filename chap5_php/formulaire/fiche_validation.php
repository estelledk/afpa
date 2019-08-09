<?php
// DEFINITION DES REGEX
// var est remplacée par $, et les valeurs des regex sont encadrées par des " "
$regexNom = "/^[A-Za-z\sàâéèêîïôöù]+$/";   //lettres + blancs(\s) + accents
// $regexPrenom = "/^[A-Za-z\s\-àâéèêîïôöù]+$/"; 	 //lettres + blancs(\s) + tiret(\-) + accents
// $regexNaissance = "/^([0-1-2])([0-9])\/([0-1])([0-9])\/([1-2])([0-9]){3}$/";
// $regexAdresse = "/^[0-9A-Za-z\sàâéèêîïôöù]+$/"; //chiffres + lettres + blancs + accents
// $regexVille = "/^[A-Za-z\-\s\/]+$/"; //lettres + /(\/)  + tiret(\-) + blancs(\s)
// $regexPostal = "/^[0-9]{5}$/";		//chiffres, au nombre de 5
// $regexMail = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/"; 	//[nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]


//VALIDATION DES DONNEES COTE SERVEUR  $_POST prend le (name)
if (empty($_POST['nom'])) //si le nom posté est vide :
{
    echo "Le nom doit être renseigné <br><br>";  //ça affichera le message d'erreur suivant :
//VALIDATION DES REGEX
} 
elseif(!preg_match($regexNom, $_POST['nom'])) 
{  //sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regexNom) avec ce qui est posté($_post["nom"]) :
    echo "caractère interdit pour le nom";  //ça affichera le message d'erreur suivant :
}


... 
//à faire pour tous les champs

?>



<?php
// AFFICHAGE DE TOUS LES CHAMPS SAISIS
//var_dump($_POST); pour afficher toutes les saisies
echo "Vous avez saisi : <br><br><br>";
echo "Nom : ".($_POST["nom"])."<br><br>";
echo "Prénom : ".($_POST["prenom"])."<br><br>";
echo "Date de naissance : ".($_POST["naissance"])."<br><br>";
echo "Adresse : ".($_POST["adresse"]);     
echo " - ".($_POST["postal"]);
echo " ".($_POST["ville"])."<br><br>";
echo "Email : ".($_POST["email"])."<br><br>";

if (!empty($_POST["jardin"])) 
{
    echo "Vous avez un ".($_POST["jardin"])."<br><br>";
} 
elseif (!empty($_POST["balcon"])) 
{
    echo "Vous avez un ".($_POST["balcon"])."<br><br>";
} 
else 
{
    echo "Vous n'avez pas sélectionné jardin ou balcon<br><br>";
}

echo "Fréquence de jardinage : ".($_POST["frequence"])."<br><br>";


if (!empty($_POST["commentaire"])) 
{
    echo "Commentaire : ".($_POST["commentaire"])."<br><br>";
}


//AFFICHAGE DE LA CHECKBOX
echo "Vous jardinez le : ";

foreach (($_REQUEST["Fjour"]) as $jour) // Lecture du tableau
{
    echo $jour.", ";
}

?>

