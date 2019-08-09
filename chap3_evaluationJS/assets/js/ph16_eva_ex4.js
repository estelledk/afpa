var jeunes = 0;
var moyens = 0;
var vieux = 0;
var centenaire = 0;
var cpt = 0;

while (age != "") 
{		//la saisie vide arrête la boucle
	var age = prompt("Saisissez des âges \non arrêtera avec la saisie vide"); 	//ne pas définir la var avant
	console.log(age);
	if (age < 20) 
	{				//si saisie <20
		jeunes += 1;
		cpt ++;
	} 
	else if (age <= 40 ) 
	{	//si saisie >=20 et <=40
		moyens += 1;
		cpt ++;
	} 
	else if (age < 100) 
	{		//si saisie >40 et <100
		vieux += 1;
		cpt ++;
	} 
	else 
	{					//si saisie >=100
		centenaire += 1;
		break;			//arrête la boucle pour toute saisie >= 100
	}
}

jeunes -= 1;		//évite de compter la valeur vide dans le groupe <20

alert("moins de 20 ans : "+jeunes+" personne(s)"+"\nentre 20 et 40 ans inclus : "+moyens+" personne(s)"+"\nentre 41 et 99 ans : "+vieux+" personne(s)"+"\ncentenaire : "+centenaire+" personne");
	

