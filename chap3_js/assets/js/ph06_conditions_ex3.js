var nombre1 = prompt("Saisissez un nombre entier");

var nombre2 = prompt("Saisissez un autre nombre entier");

var operateur = prompt("Saisissez l'opérateur de votre choix \n soit + soit - soit * soit /");

if (operateur=="/"&&nombre2==0)					//inscrire tout de suite la condition où dénominateur != 0
{
	alert("Erreur, le diviseur doit être différent de 0");
}
else
{
	switch (operateur)				//le switch permet de faire calculs en fonction de l'opérateur choisit
	{
		case "+" :						
			resultat=nombre1+nombre2;
			break;
		case "-" :
			resultat=nombre1-nombre2;
			break;
		case "*" :
			resultat=nombre1*nombre2;
			break;
		case "/" :
			resultat=nombre1/nombre2;			//case et default sont toujours suivis par :
			break;
		default :
		alert("Veuillez saisir un opérateur de la liste \n + \n - \n * \n /");
	}
}

if (typeof resultat === 'number')				//affiche le calcul et le résultat
{
	alert(nombre1+operateur+nombre2+" = "+resultat);
}
