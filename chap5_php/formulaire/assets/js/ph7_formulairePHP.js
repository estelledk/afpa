//déclaration des variables liées aux Id
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var adresse = document.getElementById("adresse");
var ville = document.getElementById("ville");
var postal = document.getElementById("postal");
var mail = document.getElementById("mail");


//déclaration des var pour les champs manquants
var missNom = document.getElementById("missNom");
var missPrenom = document.getElementById("missPrenom");
var missAdresse = document.getElementById("missAdresse");
var missVille = document.getElementById("missVille");
var missPostal = document.getElementById("missPostal");
var missMail = document.getElementById("missMail");


//définition des Regex (respect du format)
var regexNom = /^[A-Za-z\sàâéèêîïôöù]+$/;   //lettres + blancs + accents
var regexPrenom = /^[A-Za-z\sàâéèêîïôöù]+$/; 		//lettres + blancs + accents
var regexAdresse = /^[0-9A-Za-z\sàâéèêîïôöù]+$/; //chiffres + lettres + blancs + accents
var regexVille = /^[A-Za-z\s/]+$/; 			//lettres + / + blancs
var regexPostal = /^[0-9]{5}$/;					//chiffres, au nombre de 5
var regexMail = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; 	//[nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]


//focus
nom.onblur = nom;
prenom.onblur = prenom;
adresse.onblur = adresse;
ville.onblur = ville;
postal.onblur = postal;
mail.onblur = mail;


//fonction validation
var formValid = document.getElementById('envoyer');  //le formulaire est envoyé 
formValid.addEventListener('click', validation);	//si la fonction validation (cf en dessous) est totalement acceptée

function validation(event){
    //nom
    if (nom.validity.valueMissing){							//si le champ est vide
        event.preventDefault();
        missNom.textContent = "Nom manquant";
        missNom.style.color = "red";   
    } else if(regexNom.test(nom.value) == false) {	 		//si le format de données est incorrect
    	event.preventDefault();
    	missNom.textContent = "Format incorrect";
    	missNom.style.color = "orange";     
    } else{													//si ok
        missNom.textContent = "Ok";
        missNom.style.color = "green";
    }
    
 
//prenom
	if (prenom.validity.valueMissing) {
		event.preventDefault();
		missPrenom.textContent = "Prénom manquant";
		missPrenom.style.color = "red";   
    }else if(regexPrenom.test(prenom.value) == false) {	 
    	event.preventDefault();
    	missPrenom.textContent = "Format incorrect";
    	missPrenom.style.color = "orange";  
    }else{  
    	missPrenom.textContent = "Ok";
    	missPrenom.style.color = "green";
    }
	//adresse
	if (adresse.validity.valueMissing) {
		event.preventDefault();
		missAdresse.textContent = "Adresse manquante";
		missAdresse.style.color = "red";   
    }else if(regexAdresse.test(adresse.value) == false) { 	
    	event.preventDefault();
    	missAdresse.textContent = "Format incorrect";
    	missAdresse.style.color = "orange";   	   
    }else{  
    	missAdresse.textContent = "Ok";
    	missAdresse.style.color = "green";
    }
	//ville
	if (ville.validity.valueMissing) {
		event.preventDefault();
		missVille.textContent = "Ville manquante";
		missVille.style.color = "red";   
    }else if(regexVille.test(ville.value) == false) {	 
    	event.preventDefault();
    	missVille.textContent = "Format incorrect";
    	missVille.style.color = "orange";   
    }else{  
    	missVille.textContent = "Ok";
    	missVille.style.color = "green";
    }
    //code postal
	if (postal.validity.valueMissing) {
		event.preventDefault();
		missPostal.textContent = "Code postal manquant";
		missPostal.style.color = "red";   
    }else if(regexPostal.test(postal.value) == false) {	 
    	event.preventDefault();
    	missPostal.textContent = "Format incorrect";
    	missPostal.style.color = "orange";   
    }else{  
    	missPostal.textContent = "Ok";
    	missPostal.style.color = "green";
   }
	//mail
	if (mail.validity.valueMissing) {
		event.preventDefault();
		missMail.textContent = "Mail manquant";
		missMail.style.color = "red";   
    }else if(regexMail.test(mail.value) == false) {	
    	event.preventDefault();
    	missMail.textContent = "Format incorrect";
    	missMail.style.color = "orange";   
    }else{  
    	missMail.textContent = "Ok";
    	missMail.style.color = "green";
    }
}
