var game = true;

var mystere = parseInt(Math.random()*100);    //sert à chercher le nombre aléatoire

while (game)		//on recommence tant que la condition est vérifiée
{
	console.log(mystere);
	var saisie = prompt("Entrer un nombre");
	if (saisie<mystere) {
		alert("Trop petit !");
	}

	else if (saisie>mystere) {
		alert("Trop Grand !");
	}

	else {
		alert("C'est gagné !");
		game = confirm("Voulez-vous rejouer ?")
			if (true) {			//ok renvoie true, Annuler renvoie false
				var mystere = parseInt(Math.random()*100);	
			};	
	}
}
