// un nombre premier est divisible seulement par 2 nombre : lui-même et 1, on commence donc le divieur à 2

var nombre = Number(prompt("Saisir un nombre"));

for (diviseur=2 ; diviseur <= nombre ; diviseur++) 
{
	if (nombre%diviseur == 0) // si le reste est 0 et n'est pas égal au nombre alors ce n'est pas un nombre premier.
	{
		break;
	}    
}

if (nombre == diviseur)
{
	alert("C'est un nombre premier.");
}
else
{
	alert("Ce n'est pas un nombre premier.");
}
