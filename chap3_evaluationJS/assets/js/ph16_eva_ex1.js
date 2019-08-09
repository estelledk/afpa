var pu = Number(prompt("Saisir le prix unitaire du produit"));
var qtecom = Number(prompt("Saisir les quantités commandées"));
var tot = pu*qtecom;
var rem = 0;
var port = 0.02*tot;
var pap = 0;

//si tot<100 alors rem=0 et port=2% (avec min 6€)
if (tot < 100) 
{
	rem = 0;
	if (port < 6) 
	{
		port2 = 6;
	} 
	else 
	{
		port2 = port;
	}
}

//si tot>=100 et <200, alors rem=5% et port=2% (avec min 6€)
else if (tot < 200) 
{
	rem = 0.05*tot;
	if (port < 6) 
	{
		port2 = 6;
	} 
	else 
	{
		port2 = port;
	}
}

//si tot>=200 et <=500, alors rem=10% et port=2% (avec min 6€)
else if (tot <= 500) {
	rem = 0.10*tot;
	if (port < 6) {
		port2 = 6;
	} else {
		port2 = port;
	}
}

//si tot>500, alors rem=10% et port=0
else 
{
	rem = 0.10*tot;
	port2 = 0;
}


var pap = tot-rem+port2;


//vérification des calculs sur la console
console.log("tot = "+tot);
console.log("rem = "+rem+"    (si tot<100 REM=0 ; si tot<200 rem=5% ; si tot>=200 rem=10%)");
console.log("tot-rem = "+(tot-rem));
console.log("port initial "+port);
console.log("port2 = "+port2+"    (si port<6 => port2=6 ; sinon appliquer port initial)");
console.log("PAP = "+pap+"    (=tot-rem+port)");


//affichage des résultats
alert("prix à payer : "+pap+" € \ndont remise : "+rem+" € \net frais de port : "+port2+" €");
