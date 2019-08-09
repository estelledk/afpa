var phrase = prompt("saissez une phrase");

var lettre = prompt("saissez une lettre");
var nbLettre = 0;

function nombre (phrase, lettre) {
	for (i=0; i<=phrase.length; i++){   // var.length affiche le nb de caractères de la var
		if (phrase[i] == lettre) {			// [i] permet de rentrer dans for
			nbLettre++;
		}
	}
}

nombre (phrase, lettre);						//appeler la fonction !!

alert("La phrase "+phrase+" contient "+nbLettre+ " fois la lettre "+lettre);
	
