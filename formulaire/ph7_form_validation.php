<?php
// DEFINITION DES REGEX
// var est remplacée par $, et les valeurs des regex sont encadrées par des " "
$regexNom = "/^[A-Za-z\sàâéèêîïôöù]+$/";   //lettres + blancs + accents
$regexPrenom = "/^[A-Za-z\sàâéèêîïôöù]+$/"; 	//lettres + blancs + accents
$regexNaissance = "/^([0-1-2])([0-9])\/([0-1])([0-9])\/([1-2])([0-9]){3}$/";
$regexAdresse = "/^[0-9A-Za-z\sàâéèêîïôöù]+$/"; //chiffres + lettres + blancs + accents
$regexVille = "/^[A-Za-z\s\/]+$/"; 	//lettres + / + blancs
$regexPostal = "/^[0-9]{5}$/";		//chiffres, au nombre de 5
$regexMail = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/"; 	//[nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]


// VALIDATION DES DONNEES COTE SERVEUR
// si le nom posté est vide :
if (empty($_POST["nom"])) {
    // ça affichera le message d'erreur suivant :
    echo "Le nom doit être renseigné <br><br>";

  // VALIDATION DES REGEX
  // sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regexNom) avec ce qui est posté($_post["nom"]) :
} elseif(!preg_match($regexNom, $_POST["nom"])) {
     // ça affichera le message d'erreur suivant :
     echo "Le nom ne peut comporter que des caractères de l'alphabet français";
  }


if (empty($_POST["prenom"])) {
    echo "Le prénom doit être renseigné <br><br>";
} elseif(!preg_match($regexPrenom, $_POST["prenom"])) {
     echo "Le prénom ne peut comporter que des caractères de l'alphabet français";
     }

     
if (empty($_POST["naissance"])) {
    echo "La date de naissance doit être renseignée <br><br>";
} elseif(!preg_match($regexNaissance, $_POST["naissance"])) {
     echo "La date de naissance n'est pas valide";
     }
     
     
if (empty($_POST["adresse"])) {
    echo "L'adresse doit être renseignée <br><br>";
} elseif(!preg_match($regexAdresse, $_POST["adresse"])) {
     echo "L'adresse n'est pas valide";
     }

     
if (empty($_POST["ville"])) {
    echo "La ville doit être renseignée <br><br>";
} elseif(!preg_match($regexVille, $_POST["ville"])) {
    echo "La ville n'est pas valide";
}


if (empty($_POST["postal"])) {
    echo "Le code postal doit être renseigné <br><br>";
} elseif(!preg_match($regexPostal, $_POST["postal"])) {
    echo "Le code postal n'est pas valide";
}


if (empty($_POST["mail"])) {
    echo "Le mail doit être renseigné <br><br>";
} elseif(!preg_match($regexMail, $_POST["mail"])) {
    echo "L'email n'est pas valide";
}
?>

<?php
// AFFICHAGE DE TOUS LES CHAMPS SAISIS
//var_dump($_POST); pour afficher toutes les saisies
echo "Vous avez saisi : <br>";
echo "Nom : ".($_POST["nom"])."<br>";
echo "Prénom : ".($_POST["prenom"])."<br>";
echo "Date de naissance : ".($_POST["naissance"])."<br>";
echo "Adresse : ".($_POST["adresse"]);     
echo " - ".($_POST["postal"]);
echo " ".($_POST["ville"])."<br>";
echo "Email : ".($_POST["mail"])."<br>";

if (!empty($_POST["jardin"])) {
    echo "Vous avez un ".($_POST["jardin"])."<br>";
} elseif (!empty($_POST["balcon"])) {
    echo "Vous avez un ".($_POST["balcon"])."<br>";
} else {
    echo "Vous n'avez pas sélectionné jardin ou balcon<br>";
}

echo "Fréquence de jardinage : ".($_POST["frequence"])."<br>";


if (!empty($_POST["commentaire"])) {
    echo "Commentaire : ".($_POST["commentaire"])."<br>";
}

//AFFICHAGE DE LA CHECKBOX
echo "Vous jardinez le : ";
// Lecture du tableau
foreach (($_REQUEST["Fjour"]) as $jour) {
    echo $jour.", ";
}

?>



<?php
/*
 // Ouverture en lecture seule dès début du fichier (r)
 $fp = fopen("ListeLiens.txt", "r");
 
 // Boucle jusqu'à la fin du fichier
 while (!feof($fp)) {
 // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne
 $ligne = fgets($fp, 4096);
 
 echo "<a href=".$ligne.">".$ligne."</a> <br> <br>";
 }
 */
?>
