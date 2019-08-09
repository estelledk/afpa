var mot=prompt("Saisir un mot");

var nbVoyelles = 0;

for (i=0 ; i<=mot.length ; i++)		// var.length affiche le nb de caractères de la var
{
	if(mot[i] == "a" ||mot[i] =="e" ||mot[i] =="i" ||mot[i] =="o" ||mot[i] =="u" ||mot[i] =="y")
	{					// [i] permet de rentrer dans for
		nbVoyelles ++;
	}
}
alert("Le mot "+mot+" contient "+nbVoyelles+ " voyelles");
