var ligne = parseInt(prompt("Ecrire une taille de tableau"));
var i = 0;

var tableau = new Array(ligne);

while (i < ligne) 
{
	var valeur = prompt("Entrer une valeur");
	if (valeur != '') 
	{
		tableau[i] = valeur;
		i = i+1;
	}
	else
	{ 
		break;
	}
}
	

console.log(tableau);

