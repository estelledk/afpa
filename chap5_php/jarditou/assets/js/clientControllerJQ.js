//définition des variables
var nom = $('#inom');
var prenom = $('#iprenom');
var naissance = $('#inaissance');
var adresse = $('#iadresse');
var ville = $('#iville');
var postal = $('#ipostal');
var email = $('#iemail');
var jardin = $('#ijardin');
var frequence = $('#ifrequence');
var autre = $('#iautre');
var commentaire = $('#icommentaire');
var jour = $('#ijour');

var envoi = $('#envoyer');
var effacer = $('#effacer');


//définition des variables pour affichage des erreurs
var erreurNom = $('#inomBis');
var erreurPrenom = $('#iprenomBis');
var erreurNaissance = $('#inaissanceBis');
var erreurAdresse = $('#iadresseBis');
var erreurVille = $('#ivilleBis');
var erreurPostal = $('#ipostalBis');
var erreurEmail = $('#iemailBis');
//jardin//
var erreurFrequence = $('#ifrequenceBis');
var erreurAutre = $('#iautreBis');
var erreurCommentaire = $('#icommentaireBis');
var erreurJour = $('#ijourBis');


//définition des Regex (respect du format)
var regexNom = /^[A-Za-z\sàâéèêîïôöù]+$/;   //lettres + blancs(\s) + accents
var regexPrenom = /^[A-Za-z\s\-àâéèêîïôöù]+$/; 	 //lettres + blancs(\s) + tiret(\-) + accents
var regexNaissance = /^([0-1-2])([0-9])\/([0-1])([0-9])\/([1-2])([0-9]){3}$/;
var regexAdresse = /^[0-9A-Za-z\sàâéèêîïôöù]+$/; //chiffres + lettres + blancs + accents
var regexVille = /^[A-Za-z\-\s\/]+$/; //lettres + /(\/)  + tiret(\-) + blancs(\s)
var regexPostal = /^[0-9]{5}$/;	//chiffres, au nombre de 5
var regexEmail = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; 	//[nom]@[domaine au moins 2 caractères].[extension entre 2 et 6 caractères]



$(document).ready(function(){   //dès que le document est chargé, on va faire {...  
	function verifier(champ, erreur, regex){  //ordre paramètres n'importe pas
		if (champ.val() == ""){   //si le champ est vide
			erreur.text("Saisie manquante"); //on affiche le message d'erreur
			erreur.css({   //on rend le champ rouge
				color : "red"
			});
	    }
		else if (regex.test(champ.val()) == false){  //valid est relatif à la regex)
			erreur.text("Saisie erronée");  //on affiche le message d'erreur
			erreur.css({   //on rend le champ rouge
				color : "orange"
			});
		}
		else {
			erreur.html("&#10003");  //on affiche le check(&#10003) de validation
			erreur.css({   //on rend le champ vert
				color : "green"
			});
		}
	}

//nom
	nom.blur(function(){   //blur : à la perte de focus ça lance la fonction (click : risque que ce soit PHP avant JS)
		verifier(nom, erreurNom, regexNom);   //vérifie $nom et affichera message d'erreur dans $erreurNom
	});
	
//prenom
	prenom.blur(function(){   
		verifier(prenom, erreurPrenom, regexPrenom);  
	});

//naissance
	naissance.blur(function(){
		verifier(naissance, erreurNaissance, regexNaissance);  
	});

//adresse
	adresse.blur(function(){
		verifier(adresse, erreurAdresse, regexAdresse);  
	});

//ville
	ville.blur(function(){
		verifier(ville, erreurVille, regexVille);  
	});

//postal
	postal.blur(function(){
		verifier(postal, erreurPostal, regexPostal);  
	});

//email
	email.blur(function(){
		verifier(email, erreurEmail, regexEmail);  
	});

//frequence
	frequence.blur(function(){
		verifier(frequence, erreurFrequence, regexFrequence);  
	});

//jour
	jour.blur(function() {
		verifier(jour, erreurJour, regexJour);  
	});
	
	
});
