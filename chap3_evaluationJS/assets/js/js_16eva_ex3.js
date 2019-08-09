var nb = 0;
var cpt = 0;
var min = 0;
var max = 0;

//le 1er nombre choisi sera à la fois min et max
nb = Number(prompt("Saisissez un nombre"));
min = nb;
max = nb;


//vérification dans la console
console.log(nb);
console.log("min = "+min);
console.log("max = "+max);


while (nb != "")
{
	nb = Number(prompt("Saisissez des nombres \non arrêtera avec la saisie vide"));
	if (nb < min)
	{
		min = nb;
	} 
	else if (nb > max) 
	{
		max = nb;
	}
	console.log(nb);
	console.log("min = "+min);	//vérification dans la console des étapes
	console.log("max = "+max);
	cpt++;
}

alert("Le nombre minimum est "+min+" \n(appuyez sur entrer pour afficher le maximum)");
alert("Le nombre maximum est "+max);

