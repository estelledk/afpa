var cpt = 0;	//compteur
var nombre = Number(prompt("Saisissez un nombre pour afficher \nla somme des nombres inférieurs à celui-ci"));  //Number=exige que la saisie soit un nombre
var somme = 0;

console.log("le nombre sélectionné est "+nombre);

while (cpt < nombre) 
{
	somme += cpt;
	console.log(cpt);  //vérification sur la console des nombres inférieurs à la saisie
	cpt++;
}

alert("La somme des nombres inférieurs à "+nombre+" est "+somme);
