var option = parseInt(prompt("1- Multiples \n2- Somme \n3- Moyenne \n4- Recherche du nombre de voyelles \n5- Recherche du nombre de caractères suivants \nEntrez votre option :"));

switch (option) 
{
    case 1 :
        var n = parseInt(prompt("table de multiplication du nombre"));
        var x = parseInt(prompt("multiplier jusqu'à"));
        function multiplication (n,x) 
        {
	        for (i=1 ; i<=x ; i++) 
	        {
	        	resMulti = (i*n);
	        	console.log(i+ " x " +n+ " = " +resMulti);
	        }
        } 
        console.log(multiplication (n,x));
        break;

    case 2 :
        var cptS = 0;
        var resSomme = 0;
        var nombre1 = Number(prompt("Saisissez un 1er nombre"));
        var nombre2 = Number(prompt("Saisissez un 2ème nombre \n afin d'afficher la somme des entiers entre ces 2 nombres"));
        while ((nombre1 + cptS) <= nombre2) 
        {
	        resSomme += nombre1 + cptS;
	        cptS++;
        }
        console.log(resSomme);
        break;

    case 3 :
        var nombre = Number;
        var cptM = 0;
        var somme = 0;
        var moyenne = 0;
        while (nombre != 0) 
        {
	       nombre = Number(prompt("Saisissez un nombre"));
	      somme += nombre;
	      cptM++;
        }
        cptM -= 1
        console.log("la somme de ces nombres est "+somme);
        moyenne = somme / cptM;
        console.log("la moyenne de ces "+cptM+" nombres est "+moyenne);

    case 4 :
        var mot=prompt("Saisir un mot");
        var nbVoyelles = 0;
        for (i=0 ; i<=mot.length ; i++)	// var.length affiche le nb de caractères de la var
    	 if(mot[i] == "a" ||mot[i] =="e" ||mot[i] =="i" ||mot[i] =="o" ||mot[i] =="u" ||mot[i] =="y")	// [i] permet de rentrer dans for
    	{
    		nbVoyelles ++;
        }  
        console.log("Le mot "+mot+" contient "+nbVoyelles+ " voyelles");

    case 5 :
        var phrase = prompt("saissez une phrase");
        var lettre = prompt("saissez une lettre");
        var nbLettre = 0;
        function nombre5 (phrase, lettre) 
        {
            for (i=0; i<=phrase.length; i++) // var.length affiche le nb de caractères de la var
            {
            	if (phrase[i] == lettre) // [i] permet de rentrer dans for
            	{			
                    nbLettre++;
                }
            }
        }
        nombre5 (phrase, lettre);	//appeler la fonction !!
        console.log("La phrase "+phrase+" contient "+nbLettre+ " fois la lettre "+lettre);

    default :
        console.log("Saisissez un nombre de la liste");
}
