//déclaration des variables liées aux Id
var nom = document.getElementById("i_nom");
...
var effacer = document.getElementById("i_effacer");


//déclaration des var pour les champs manquants
var nomBis = document.getElementById("i_nomBis");
...


//définition des Regex (respect du format)
var regexNom = /^[A-Za-z\sàâéèêîïôöù]+$/;   //lettres + blancs(\s) + accents
//var regexPrenom = /^[A-Za-z\s\-àâéèêîïôöù]+$/; 	 //lettres + blancs(\s) + tiret(\-) + accents
//var regexNaissance = /^([0-1-2])([0-9])\/([0-1])([0-9])\/([1-2])([0-9]){3}$/;
//var regexAdresse = /^[0-9A-Za-z\sàâéèêîïôöù]+$/; //chiffres + lettres + blancs + accents
//var regexVille = /^[A-Za-z\-\s\/]+$/; //lettres + /(\/)  + tiret(\-) + blancs(\s)
//var regexPostal = /^[0-9]{5}$/;	//chiffres, au nombre de 5
//var regexEmail = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; 	//[nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]



//fonctions validation
//nom
nom.onblur = nomValid;	// onblur (= le focus n'est plus dans le champ) qui lance la fonction nomValid

function nomValid()
{
    if (nom.validity.valueMissing)	//si le champ est vide (fait référence au required dans formulaire.php)
    {
    	event.preventDefault();
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


//à faire pour tous les champs
...



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

