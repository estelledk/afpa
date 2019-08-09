//déclaration des variables liées aux Id
var nom = document.getElementById("i_nom");
var prenom = document.getElementById("i_prenom");
var naissance = document.getElementById("i_naissance");
var adresse = document.getElementById("i_adresse");
var ville = document.getElementById("i_ville");
var postal = document.getElementById("i_postal");
var email = document.getElementById("i_email");
var frequence = document.getElementById("i_frequence");
var autre = document.getElementById("i_autre");
var jour = document.getElementById("i_jour");

var effacer = document.getElementById("i_effacer");


//déclaration des var pour les champs manquants
var nomBis = document.getElementById("i_nomBis");
var prenomBis = document.getElementById("i_prenomBis");
var naissanceBis = document.getElementById("i_naissanceBis");
var adresseBis = document.getElementById("i_adresseBis");
var villeBis = document.getElementById("i_villeBis");
var postalBis = document.getElementById("i_postalBis");
var emailBis = document.getElementById("i_emailBis");
var frequenceBis = document.getElementById("i_frequenceBis");
var autreBis = document.getElementById("i_autreBis");
var jourBis = document.getElementById("i_jourBis");


//définition des Regex (respect du format)
var regexNom = /^[A-Za-z\sàâéèêîïôöù]+$/;   //lettres + blancs(\s) + accents
var regexPrenom = /^[A-Za-z\s\-àâéèêîïôöù]+$/; 	 //lettres + blancs(\s) + tiret(\-) + accents
var regexNaissance = /^([0-1-2])([0-9])\/([0-1])([0-9])\/([1-2])([0-9]){3}$/;
var regexAdresse = /^[0-9A-Za-z\sàâéèêîïôöù]+$/; //chiffres + lettres + blancs + accents
var regexVille = /^[A-Za-z\-\s\/]+$/; //lettres + /(\/)  + tiret(\-) + blancs(\s)
var regexPostal = /^[0-9]{5}$/;	//chiffres, au nombre de 5
var regexEmail = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; 	//[nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]





//fonctions validation
//nom
nom.onblur = nomValid;	// onblur (= le focus n'est plus dans le champ) qui lance la fonction nomValid

function nomValid()
{
    if (nom.validity.valueMissing)	//si le champ est vide (fait référence au required dans formulaire.php)
    {
    	event.preventDefault();  //stoppe l'envoi du formulaire
    	nomBis.innerHTML = "Nom manquant";
    	nomBis.style.color = "red";   
    } 
    else if(regexNom.test(nom.value) == false) 	//si le format de données est incorrect
    {
    	event.preventDefault();
    	nomBis.innerHTML = "caractère interdit pour le nom";
    	nomBis.style.color = "orange";     
    } 
    else  //si ok
    {   
    	nomBis.innerHTML = "&#10003";
        nomBis.style.color = "green";
    }
}    


//prenom
prenom.onblur = prenomValid;	

function prenomValid()
{
    if (prenom.validity.valueMissing)
    {
    	event.preventDefault();
    	prenomBis.innerHTML = "Prénom manquant";
    	prenomBis.style.color = "red";   
    } 
    else if(regexPrenom.test(prenom.value) == false) 
    {
    	event.preventDefault();
    	prenomBis.innerHTML = "caractère interdit pour le prénom";
    	prenomBis.style.color = "orange";     
    } 
    else  
    {   
    	prenomBis.innerHTML = "&#10003";
        prenomBis.style.color = "green";
    }
}    


//naissance
naissance.onblur = naissanceValid;	

function naissanceValid()
{
    if (naissance.validity.valueMissing)
    {
    	event.preventDefault();
    	naissanceBis.innerHTML = "Date de naissance manquante";
    	naissanceBis.style.color = "red";   
    } 
    else if(regexNaissance.test(naissance.value) == false) 
    {
    	event.preventDefault();
    	naissanceBis.innerHTML = "caractère interdit pour la date de naissance";
    	naissanceBis.style.color = "orange";     
    } 
    else  
    {   
    	naissanceBis.innerHTML = "&#10003";
        naissanceBis.style.color = "green";
    }
} 


//adresse
adresse.onblur = adresseValid;	

function adresseValid()
{
    if (adresse.validity.valueMissing)	
    {
    	event.preventDefault();
    	adresseBis.innerHTML = "Adresse manquante";
    	adresseBis.style.color = "red";   
    } 
    else if(regexAdresse.test(adresse.value) == false) 
    {
    	event.preventDefault();
    	adresseBis.innerHTML = "caractère interdit pour l'adresse";
    	adresseBis.style.color = "orange";     
    } 
    else  
    {   
    	adresseBis.innerHTML = "&#10003";
        adresseBis.style.color = "green";
    }
} 
	
	
	
//ville
ville.onblur = villeValid;	

function villeValid()
{
    if (ville.validity.valueMissing)
    {
    	event.preventDefault();
    	villeBis.innerHTML = "Ville manquante";
    	villeBis.style.color = "red";   
    } 
    else if(regexVille.test(ville.value) == false) 
    {
    	event.preventDefault();
    	villeBis.innerHTML = "caractère interdit pour la ville";
    	villeBis.style.color = "orange";     
    } 
    else  
    {   
    	villeBis.innerHTML = "&#10003";
        villeBis.style.color = "green";
    }
} 
	
	
	
//code postal
postal.onblur = postalValid;	

function postalValid()
{
    if (postal.validity.valueMissing)
    {
    	event.preventDefault();
    	postalBis.innerHTML = "Code postal manquant";
    	postalBis.style.color = "red";   
    } 
    else if(regexPostal.test(postal.value) == false) 
    {
    	event.preventDefault();
    	postalBis.innerHTML = "caractère interdit pour le code postal";
    	postalBis.style.color = "orange";     
    } 
    else  
    {   
    	postalBis.innerHTML = "&#10003";
        postalBis.style.color = "green";
    }
}
	
	
//email  
email.onblur = emailValid;	

function emailValid()
{
    if (email.validity.valueMissing)
    {
    	event.preventDefault();
    	emailBis.innerHTML = "E-mail manquant";
    	emailBis.style.color = "red";   
    } 
    else if(regexEmail.test(email.value) == false) 
    {
    	event.preventDefault();
    	emailBis.innerHTML = "caractère interdit pour l'e-mail";
    	emailBis.style.color = "orange";     
    } 
    else  
    {   
    	emailBis.innerHTML = "&#10003";
        emailBis.style.color = "green";
    }
}


//frequence
frequence.onblur = frequenceValid;	

function frequenceValid()
{
    if (frequence.value == "")
    {
    	event.preventDefault();
    	frequenceBis.innerHTML = "Fréquence de jardinage manquante";
    	frequenceBis.style.color = "red";   
    } 
    else  
    {   
    	frequenceBis.innerHTML = "&#10003";
    	frequenceBis.style.color = "green";
    }
}


//jour
jour.onblur = jourValid;	

function jourValid()
{
    if (jour.value == "")
    {
    	event.preventDefault();
    	jourBis.innerHTML = "Jour manquant";
    	jourBis.style.color = "red";   
    } 
    else  
    {   
    	jourBis.innerHTML = "&#10003";
    	jourBis.style.color = "green";
    }
}



effacer.addEventListener("click", effaceErreurs);

function effaceErreurs () 
{
	nomBis.innerHTML = "";
	prenomBis.innerHTML = "";
	naissanceBis.innerHTML = "";
	adresseBis.innerHTML = "";
	villeBis.innerHTML = "";
	postalBis.innerHTML = "";
	emailBis.innerHTML = "";
	frequenceBis.innerHTML = "";
}






























////modification de la couleur de l'arrière plan si c'est faux
//function surligne(champ, erreur)  
//{
//	if(erreur) 
//	{
//		champ.style.backgroundColor = "#fba";  //en rouge pâle
//	}
//	else
//	{
//		champ.style.backgroundColor = "";  //pas de changement de couleur
//	}
//}
//
//
//
////vérification des champs
//
////nom
//function verifNom(champ)
//{
// var regex = /^[A-Za-z\sàâéèêîïôöù]+$/; //regex du (nom) = lettres avec accents et espace (\s)
// if(!regex.test(champ.value))  //si la regex n'est pas juste
// {
//    surligne(champ, true);  // renvoie true et applique la fonction surligne avec chgt de couleur (if)
//    return false;  // puis retourne false
// }
// else
// {
//    surligne(champ, false);//renvoie false et applique la fonction surligne sans chgt de couleur (else)
//    return true;  //??
// }
//}
//
//
////prenom
//function verifPrenom(champ)
//{
// var regex = /^[A-Za-z\sàâéèêîïôöù]+$/; //regex du (prenom) = lettres avec accents et espace (\s)
// if(!regex.test(champ.value))  
// {
//    surligne(champ, true);  
//    return false;
// }
// else
// {
//    surligne(champ, false);
//    return true;
// }
//}
//
//
////naissance
//function verifNaissance(champ)
//{
//	var regex = /^[([0-2]{1})([0-9]{1})/\([0-2]{1})([0-9]{1})/\([0-9]{4})]+$/;
//	if(!regex.test(champ.value))  
//	{
//		surligne(champ, true);
//		return false;
//	}
// else
// {
//	   surligne(champ, false);
//	   return true;
// }
//}
//
//
////adresse
//function verifAdresse(champ)
//{
// var regex = /^[0-9A-Za-z\sàâéèêîïôöù]+$/; //regex de l'adresse = lettres avec accents, espace (\s) et chiffres
// if(!regex.test(champ.value))  
// {
//    surligne(champ, true);  
//    return false;
// }
// else
// {
//    surligne(champ, false);
//    return true;
// }
//}
//
//
////ville
//function verifVille(champ)
//{
// var regex = /^[A-Za-z\s\/àâéèêîïôöù]+$/; //regex de la ville = lettres avec accents et espace (\s) et / (\/)
// if(!regex.test(champ.value))  
// {
//    surligne(champ, true);  
//    return false;
// }
// else
// {
//    surligne(champ, false);
//    return true;
// }
//}
//
//
////postal
//function verifPostal(champ)
//{
// var regex = /^[0-9]{5}$/; //regex du code postal = 5 chiffred de 0 à 9
// if(!regex.test(champ.value))  
// {
//    surligne(champ, true);  
//    return false;
// }
// else
// {
//    surligne(champ, false);
//    return true;
// }
//}
//
//
////mail
//function verifMail(champ)
//{
// var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; //regex de l'adresse mail
// if(!regex.test(champ.value))  
// {
//    surligne(champ, true);  
//    return false;
// }
// else
// {
//    surligne(champ, false);
//    return true;
// }
//}
//
//
//
//
////vérification avant envoi
//function verifForm(f)
//{
//	var nomOk = verifNom(f.nom);
//	var prenomOk = verifPrenom(f.prenom);
//	var naissanceOk = verifNaissance(f.naissance);
//	var adresseOk = verifAdresse(f.adresse);
//	var villeOk = verifVille(f.ville);
//	var postalOk = verifPostal(f.postal);
//	var mailOk = verifMail(f.mail);
// 
//	if(nomOk && prenomOk && naissanceOk &&adresseOk && villeOk && postalOk && mailOk)  //si ttoutes les vérif sont ok
//	{
//	   return true;
//	}
//	else
//	{
//		alert("Veuillez remplir correctement tous les champs");
//		return false;
//	}
//}
//
//

