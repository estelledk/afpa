<?php

//DECLARATIONS

//déclaration du tableau d'erreurs
$formError = array();    

//déclaration des regex (les var sont remplacées par $, et les valeurs des regex sont encadrées par des " ")
$regexNom = "/^[A-Za-z\sàâéèêîïôöù]+$/";   //lettres + blancs(\s) + accents
$regexPrenom = "/^[A-Za-z\s\-àâéèêîïôöù]+$/"; 	 //lettres + blancs(\s) + tiret(\-) + accents
$regexNaissance = "/^([0-1-2])([0-9])\/([0-1])([0-9])\/([1-2])([0-9]){3}$/";
$regexAdresse = "/^[0-9A-Za-z\sàâéèêîïôöù]+$/"; //chiffres + lettres + blancs + accents
$regexVille = "/^[A-Za-z\-\s\/]+$/"; //lettres + /(\/)  + tiret(\-) + blancs(\s)
$regexPostal = "/^[0-9]{5}$/";		//chiffres, au nombre de 5
$regexMail = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/"; 	//[nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]



//VERIFICATION DES SAISIES

//pour nom,           $_POST('relatif_a_NAME=']
if (isset($_POST['submit'])){   //si la valeur du bouton envoyer est présente
    if (!empty($_POST['nom'])){   //si la valeur de nom n'est pas présente et pas remplie (!empty)
       if (preg_match($regexNom, $_POST['nom'])){  //si la donnée saisie passe la regex
            $nom = $_POST['nom'];
       }
       else {
           $formError['nom'] = 'saisie incorrecte';   //sinon on rempli le tableau d'erreur si la saisie est incorrecte
       }
   }
   else {  //sinon (= si le champs est vide) on rempli le tableau d'erreur si la saisie est manquante
       $formError['nom'] = 'veuillez renseigner le champs "nom"';
   }
}

//pour prenom
if (isset($_POST['submit'])){   //si la valeur du bouton envoyer est présente
    if (!empty($_POST['prenom'])){   //si la valeur de prenom n'est pas présente et pas remplie (!empty)
        if (preg_match($regexNom, $_POST['prenom'])){  //si la donnée saisie passe la regex
            $prenom = $_POST['prenom'];
        }
        else {
            $formError['prenom'] = 'saisie incorrecte';   //sinon on rempli le tableau d'erreur si la saisie est incorrecte
        }
    }
    else {  //sinon (= si le champs est vide) on rempli le tableau d'erreur si la saisie est manquante
        $formError['prenom'] = 'veuillez renseigner le champs "prénom"';
    }
}

//pour naissance
if (isset($_POST['submit'])){   //si la valeur du bouton envoyer est présente
    if (!empty($_POST['naissance'])){   //si la valeur de naissance n'est pas présente et pas remplie (!empty)
        if (preg_match($regexNaissance, $_POST['naissance'])){  //si la donnée saisie passe la regex
            $naissance = $_POST['naissance'];
        }
        else {
            $formError['naissance'] = 'saisie incorrecte';   //sinon on rempli le tableau d'erreur si la saisie est incorrecte
        }
    }
    else {  //sinon (= si le champs est vide) on rempli le tableau d'erreur si la saisie est manquante
        $formError['naissance'] = 'veuillez renseigner le champs "date de naissance"';
    }
}

//pour adresse
if (isset($_POST['submit'])){   //si la valeur du bouton envoyer est présente
    if (!empty($_POST['adresse'])){   //si la valeur de adresse n'est pas présente et pas remplie (!empty)
        if (preg_match($regexNom, $_POST['adresse'])){  //si la donnée saisie passe la regex
            $adresse = $_POST['adresse'];
        }
        else {
            $formError['adresse'] = 'saisie incorrecte';   //sinon on rempli le tableau d'erreur si la saisie est incorrecte
        }
    }
    else {  //sinon (= si le champs est vide) on rempli le tableau d'erreur si la saisie est manquante
        $formError['adresse'] = 'veuillez renseigner le champs "adresse"';
    }
}

//pour ville
if (isset($_POST['submit'])){   //si la valeur du bouton envoyer est présente
    if (!empty($_POST['ville'])){   //si la valeur de ville n'est pas présente et pas remplie (!empty)
        if (preg_match($regexNom, $_POST['ville'])){  //si la donnée saisie passe la regex
            $ville = $_POST['ville'];
        }
        else {
            $formError['ville'] = 'saisie incorrecte';   //sinon on rempli le tableau d'erreur si la saisie est incorrecte
        }
    }
    else {  //sinon (= si le champs est vide) on rempli le tableau d'erreur si la saisie est manquante
        $formError['ville'] = 'veuillez renseigner le champs "ville"';
    }
}

//pour postal
if (isset($_POST['submit'])){   //si la valeur du bouton envoyer est présente
    if (!empty($_POST['postal'])){   //si la valeur de postal n'est pas présente et pas remplie (!empty)
        if (preg_match($regexPostal, $_POST['postal'])){  //si la donnée saisie passe la regex
            $postal = $_POST['postal'];
        }
        else {
            $formError['postal'] = 'saisie incorrecte';   //sinon on rempli le tableau d'erreur si la saisie est incorrecte
        }
    }
    else {  //sinon (= si le champs est vide) on rempli le tableau d'erreur si la saisie est manquante
        $formError['postal'] = 'veuillez renseigner le champs "code postal"';
    }
}

//pour email
if (isset($_POST['submit'])){   //si la valeur du bouton envoyer est présente
    if (!empty($_POST['email'])){   //si la valeur de email n'est pas présente et pas remplie (!empty)
        if (preg_match($regexMail, $_POST['email'])){  //si la donnée saisie passe la regex
            $email = $_POST['email'];
        }
        else {
            $formError['email'] = 'saisie incorrecte';   //sinon on rempli le tableau d'erreur si la saisie est incorrecte
        }
    }
    else {  //sinon (= si le champs est vide) on rempli le tableau d'erreur si la saisie est manquante
        $formError['email'] = 'veuillez renseigner le champs "email"';
    }
}





// AFFICHAGE DE TOUS LES CHAMPS SAISIS

//var_dump($_POST); pour afficher toutes les saisies
// if(isset($_POST["nom"])){
//     echo "Vous avez saisi : <br><br>";
//     echo "Nom : ".($_POST["nom"])."<br>";
// }

// if(isset($_POST["prenom"])){
//     echo "Prénom : ".($_POST["prenom"])."<br>";
// }

// if(isset($_POST["naissance"])){
//     echo "Date de naissance : ".($_POST["naissance"])."<br>";
// }


// if(isset($_POST["adresse"])){
//     echo "Adresse : ".($_POST["adresse"]);   
// }

// if(isset($_POST["postal"])){
//     echo " - ".($_POST["postal"]);
// }

// if(isset($_POST["ville"])){
//     echo " ".($_POST["ville"])."<br>";
// }

// if(isset($_POST["email"])){
// echo "Email : ".($_POST["email"])."<br>";
// }

// if (!empty($_POST["jardin"])) {
//     echo "Vous avez un ".($_POST["jardin"])."<br>";
// } elseif (!empty($_POST["balcon"])) {
//     echo "Vous avez un ".($_POST["balcon"])."<br>";
// } 

// if(isset($_POST["frequence"])){
//     echo "Fréquence de jardinage : ".($_POST["frequence"])."<br>";
// }

// if (!empty($_POST["commentaire"])) {
//     echo "Commentaire : ".($_POST["commentaire"])."<br>";
// }

// if(isset($_POST["Fjour"])){  //pour la checkbox
//     foreach (($_REQUEST["Fjour"]) as $jour) {
//         echo "Vous jardinez le : ";
//         echo $jour.", ";
//     }
// }

// ?>







<?php 
// // VALIDATION DES DONNEES COTE SERVEUR
// // si le nom posté est vide :
// if (empty($_POST["nom"])) {
//     // ça affichera le message d'erreur suivant :
//     echo "Le nom doit être renseigné <br><br>";
    
//     // VALIDATION DES REGEX
//     // sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regexNom) avec ce qui est posté($_post["nom"]) :
// } elseif(!preg_match($regexNom, $_POST["nom"])) {
//     // ça affichera le message d'erreur suivant :
//     echo "Le nom ne peut comporter que des caractères de l'alphabet français";
// }


// if (empty($_POST["prenom"])) {
//     echo "Le prénom doit être renseigné <br><br>"; 
// } elseif(!preg_match($regexPrenom, $_POST["prenom"])) {
//     echo "Le prénom ne peut comporter que des caractères de l'alphabet français";
// }


// if (empty($_POST["naissance"])) {
//     echo "La date de naissance doit être renseignée <br><br>"; 
// } elseif(!preg_match($regexNaissance, $_POST["naissance"])) {
//     echo "La date de naissance n'est pas valide";
// }


// if (empty($_POST["adresse"])) {
//     echo "L'adresse doit être renseignée <br><br>";
// } elseif(!preg_match($regexAdresse, $_POST["adresse"])) {
//     echo "L'adresse n'est pas valide";
// }


// if (empty($_POST["ville"])) {
//     echo "La ville doit être renseignée <br><br>";
// } elseif(!preg_match($regexVille, $_POST["ville"])) {
//     echo "La ville n'est pas valide";
// }


// if (empty($_POST["postal"])) {
//     echo "Le code postal doit être renseigné <br><br>";
// } elseif(!preg_match($regexPostal, $_POST["postal"])) {
//     echo "Le code postal n'est pas valide";
// }


// if (empty($_POST["mail"])) {
//     echo "Le mail doit être renseigné <br><br>";
// } elseif(!preg_match($regexMail, $_POST["mail"])) {
//     echo "L'email n'est pas valide";
// }
?>


