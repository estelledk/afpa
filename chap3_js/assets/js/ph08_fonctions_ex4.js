var str1 = prompt("Saisir plusieurs mots séparés à chaque fois d'un ;");    
//ex: le;cours;est;fini
var str2 = str1.split(";");
var n = prompt("Pour extraire un mot de la liste, saisir un nombre");	//ex: 3

function strtok(str1, str2, n)
{
	console.log(str2[n]);
}
strtok(str1, str2, n);	//ex: fini}

