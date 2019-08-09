var cpt = 0;
var resultat = 0;

var nombre1 = Number(prompt("Saisissez un 1er nombre"));

var nombre2 = Number(prompt("Saisissez un 2ème nombre \n afin d'afficher la somme des entiers entre ces 2 nombres"));

while ((nombre1 + cpt) <= nombre2)
{
	resultat += nombre1 + cpt;
	cpt++;
}
console.log(resultat);


/* Avec For
 
var n1 = Number(prompt("Saisissez un premier nombre"));
var n2 = Number(prompt("Saisissez un deuxième nombre"));//Number ici pour éviter de le répéter dans les caluls, sinon le programme recherche ici n1 le caratctère, pas le nombre.
var resultat = 0;

for (x=n1; x<=n2; x++)
    {
    resultat += x;
    }
console.log(resultat);
*/
