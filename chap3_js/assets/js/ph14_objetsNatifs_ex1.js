var tableau = new Array;
var somme = 0;

while (true) 
{
    var donnees = parseInt(prompt("Saisissez vos nombres \npuis terminez par 0 pour afficher le tableau dans la console"));
    if (donnees != 0) 
    {
        console.log(donnees);
        tableau.push(donnees);
        somme += donnees;
    } else 
    {
        break;
    }
}

var moyenne = somme/(tableau.length);
var tabSommeMoyenne = [somme, moyenne];

console.log(tableau);
console.log("somme = "+somme);
console.log("nombre de données = "+tableau.length);
console.log("moyenne = "+moyenne);
console.log(tabSommeMoyenne);
