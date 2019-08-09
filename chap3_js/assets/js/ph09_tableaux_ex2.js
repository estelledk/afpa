var somme = 0, max, recherche, nombrePostes;

function getInteger() 
{
    integer = parseInt(prompt("Saisir un entier pour déterminer la taille du tableau"));
    return integer;
}

function initTab() 
{
    nombrePostes = parseInt(prompt("Saisir le nombre de postes"));
    tableau = new Array(nombrePostes);
    return tableau;
}

function saisieTab(tableau) 
{
    for (i=0; i<tableau.length; i++) 
    {
        tableau[i]=parseInt(prompt("Saisir un entier"));
    }
    return tableau;
}

function afficheTab(tableau) 
{
    console.log(tableau);
}

function rechercheTab(tableau) 
{              // cette f° est liée à f° saisieTab
    recherche = parseInt(prompt("Afficher un poste"));
    recherche--;         // on décrémente dans le tableau, on récupère le poste cherché
    console.log(tableau[recherche]);        // on affiche la rech effectuée dans le tableau
}

function infoTab(tableau, somme)     //somme est affichée en dehors de la fonction, il faut donc l'intégrer dans les ()
{
	console.log(Math.max([0], [i]));        // f° Max
	for (i=0; i<tableau.length; i++) 
	{
		somme += tableau [i];
    }
    console.log(somme/tableau.length);
    return somme;          	 //retourne somme/nb postes = moyenne
}

var integer = getInteger();       // on veut récupérer la var integer dans la f° getInteger
var tableau = initTab();            // idem on ^précise la var à récupérer
tableau = saisieTab(tableau);  // on veut récupérer le tableau dans saisieTab
afficheTab(tableau);
rechercheTab(tableau);
infoTab(tableau, somme);

