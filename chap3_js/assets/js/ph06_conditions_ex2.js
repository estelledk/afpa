var annee = prompt("Notez votre année de naissance");		
//prompt permet à l'utilisateur de rentrer une donnée

var age = 2019 - annee;

if (age < 18)
{
	alert("Vous avez " + age + " ans et vous êtes mineur");	//alert affiche une fenêtre
}
else
{
	alert("Vous avez " + age + " ans et vous êtes majeur");
}
