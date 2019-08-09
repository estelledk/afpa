var nombre = Number;
var cpt = 0;
var somme = 0;
var moyenne = 0;


while (nombre != 0)
{
	nombre = Number(prompt("Saisissez un nombre"));
	somme += nombre;
	cpt++;
}

cpt -= 1

console.log("la somme de ces nombres est "+somme);

moyenne = somme / cpt;

console.log("la moyenne de ces "+cpt+" nombres est "+moyenne);
