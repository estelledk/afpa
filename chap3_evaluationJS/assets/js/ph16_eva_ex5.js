nb = Number(prompt("Saisissez le nombre souhaité pour afficher \nla table de multiplication"));  //Number=exige que la saisie soit un nombre
i = 0;
resultat = 0;

function tableMultiplication(nb) 
{
	for(i=1 ; i<=10 ; i++) 
	{
		resultat = nb*i;
		console.log(nb+" x "+i+" = "+resultat);			//affichage de la table dans la console
	}
}

tableMultiplication(nb);		//lance la fonction
