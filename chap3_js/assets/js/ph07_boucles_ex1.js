var cpt = 1;
var prenom = 0

do
{
	var prenom = prompt("Saisissez le prénom N°"+cpt+ "\n ou Clic sur Annuler pour arrêter la saisie.");
	console.log(cpt+" "+prenom)
	cpt++;
	if (prenom.lengh == 0)
	{
		cpt=cpt-1
		break;
	}
} while (prenom != "");

console.log(prenom)
