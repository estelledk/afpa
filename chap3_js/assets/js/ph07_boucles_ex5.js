var n = parseInt(prompt("table de multiplication du nombre"));

var x = parseInt(prompt("multiplier jusqu'à"));

function multiplication (n,x)
{
	for (i=1 ; i<=x ; i++)
	{
		resultat = (i*n);
		console.log(i+ " x " +n+ " = " +resultat);
	}
} 

multiplication (n,x);
