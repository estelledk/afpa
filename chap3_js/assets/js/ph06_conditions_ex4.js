var situation = prompt("Saisissez célibataire ou marié");

var enfant = prompt("Saisissez le nombre d'enfants que vous avez");

var salaire = prompt("Saisissez votre salaire");

var taux = null;


if (situation = "célibataire")						
{
	taux = 20 + enfant*10;
} else						
{
	taux = 25 + enfant*10;
}

if (salaire < 1200)
{
	taux = taux *1.1;
}

if (taux >= 50)
{ 	
	taux = 50;
} else
{
	taux = taux;
}


if (typeof taux === 'number') //affiche le calcul et le résultat
{
	alert("Vous bénéficiez d'un taux de participation égal à " + taux + "%");
}