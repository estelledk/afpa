//déclaration des variables liées aux Id
var entreprise = document.getElementById("entreprise");
var personne = document.getElementById("personne");
var adresse = document.getElementById("adresse");
var postal = document.getElementById("postal");
var ville = document.getElementById("ville");
var mail = document.getElementById("mail");
var telephone = document.getElementById("telephone");

//déclaration des var pour les champs manquants
var missEntreprise = document.getElementById("missEntreprise");
var missPersonne = document.getElementById("missPersonne");
var missAdresse = document.getElementById("missAdresse");
var missPostal = document.getElementById("missPostal");
var missVille = document.getElementById("missVille");
var missMail = document.getElementById("missMail");
var missTelephone = document.getElementById("missTelephone");

//définition des Regex (respect du format)
//société = chiffres + lettres + blancs + accents + caractères spéciaux
var regexEntreprise = /^[0-9A-Za-z\sàâéèêîïôöù&@#µ*°$£%§/]+$/; 
//nom = alphabet + blancs + accents
var regexPersonne = /^[A-Za-z\sàâéèêîïôöù]+$/; 		
//adresse = chiffres + lettres + blancs + accents
var regexAdresse = /^[0-9A-Za-z\sàâéèêîïôöù]+$/; 
//code postal = chiffres, au nombre de 5
var regexPostal = /^[0-9]{5}$/;
//ville = lettres + / + blancs
var regexVille = /^[A-Za-z\s/]+$/; 	
//mail = [nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]
var regexMail = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; 	
//téléphone = chiffres, au nombre de 10
var regexTelephone = /^[0-9]{10}$/;			

//focus
entreprise.onblur = entreprise;
personne.onblur = personne;
adresse.onblur = adresse;
postal.onblur = postal;
ville.onblur = ville;
mail.onblur = mail;
telephone.onblur = telephone;


//fonction validation
//envoi du formulaire
var formValid = document.getElementById('envoyer');  
//si la fonction validation (cf en dessous) est totalement acceptée
formValid.addEventListener('click', validation);	

function validation(event)
{
   //entreprise
	//si le champ est vide	
	if (entreprise.validity.valueMissing)
	{							
        event.preventDefault();
        missEntreprise.textContent = "Entreprise manquante";
        missEntreprise.style.color = "red";          
    } //sinon si le format de données est incorrect
	else if(regexEntreprise.test(entreprise.value) == false) 
	{	
    	event.preventDefault();
    	missEntreprise.textContent = "Format incorrect";
    	missEntreprise.style.color = "orange";     
    } //si ok
	else
	{															
        missEntreprise.textContent = "Ok";
        missEntreprise.style.color = "green";
    }
	
    //personne
	if (personne.validity.valueMissing) 
	{
		event.preventDefault();
		missPersonne.textContent = "Personne manquante";
		missPersonne.style.color = "red";   
    }
	else if(regexPersonne.test(personne.value) == false) 
    {	 
    	event.preventDefault();
    	missPersonne.textContent = "Format incorrect";
    	missPersonne.style.color = "orange";  
    }
	else
    {  
    	missPersonne.textContent = "Ok";
    	missPersonne.style.color = "green";
    }
	
	//adresse
	if (adresse.validity.valueMissing) 
	{
		event.preventDefault();
		missAdresse.textContent = "Adresse manquante";
		missAdresse.style.color = "red";   
    }
	else if(regexAdresse.test(adresse.value) == false) 
    { 	
    	event.preventDefault();
    	missAdresse.textContent = "Format incorrect";
    	missAdresse.style.color = "orange";   	   
    }
	else
    {  
    	missAdresse.textContent = "Ok";
    	missAdresse.style.color = "green";
    }
	
    //code postal
	if (postal.validity.valueMissing) {
		event.preventDefault();
		missPostal.textContent = "Code postal manquant";
		missPostal.style.color = "red";   
    }
	else if(regexPostal.test(postal.value) == false) 
	{	 
    	event.preventDefault();
    	missPostal.textContent = "Format incorrect";
    	missPostal.style.color = "orange";   
    }
	else
	{  
    	missPostal.textContent = "Ok";
    	missPostal.style.color = "green";
    }
	
	//ville
	if (ville.validity.valueMissing) {
		event.preventDefault();
		missVille.textContent = "Ville manquante";
		missVille.style.color = "red";   
    }
	else if(regexVille.test(ville.value) == false) 
	{	 
    	event.preventDefault();
    	missVille.textContent = "Format incorrect";
    	missVille.style.color = "orange";   
    }
	else
    {  
    	missVille.textContent = "Ok";
    	missVille.style.color = "green";
    }
	
	//mail
	if (mail.validity.valueMissing) 
	{
		event.preventDefault();
		missMail.textContent = "Mail manquant";
		missMail.style.color = "red";   
    }
	else if(regexMail.test(mail.value) == false) 
    {	
    	event.preventDefault();
    	missMail.textContent = "Format incorrect";
    	missMail.style.color = "orange";   
    }
	else
    {  
    	missMail.textContent = "Ok";
    	missMail.style.color = "green";
    }
	
 
	//telephone
	if (telephone.validity.valueMissing) {
		event.preventDefault();
		missTelephone.textContent = "Téléphone manquant";
		missTelephone.style.color = "red";   
    }
	else if(regexTelephone.test(telephone.value) == false) 
    {	
    	event.preventDefault();
    	missTelephone.textContent = "Format incorrect";
    	missTelephone.style.color = "orange";   
    }
	else
    {  
    	missTelephone.textContent = "Ok";
    	missTelephone.style.color = "green";
    }
}

//fonction liste : sélectionne dans menu déroulant et renvoi dans textarea
function liste () 
{
	var list = document.getElementById("choix").value;
	//on affiche le contenu de l'élément <option> ciblé grâce à son html
	document.getElementById("projet").innerHTML = list;		
}
//va lire le changement dans le menu déroulant et va l'afficher dans le textarea
document.getElementById("choix").addEventListener("change",liste);	


