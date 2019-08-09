var image="";

function cube(x) {
	document.write("Le cube de "+x+" est égal à "+x*x*x+"."+"<br>");  
}						//le <br> permet le retour non possible ici avec\n
var x = prompt("Entrez un nombre");
cube (x);


function produit(x,y) {
	document.write("\n Le produit de "+x+" x "+y+" est égal à "+x*y+"."+"<br>");
}
var x;
var y = prompt("Entrez un second nombre");
produit(x,y);


function afficheImg(image) {
	document.write("<img src="+image+">"); //on met la balise html dans un document.write;
}
afficheImg("assets/img/papillon.jpg");
	

/*
						OU

var image="";

var cube = function(x) {
	document.write("Le cube de "+x+" est égal à "+x*x*x+"."+"<br>");  //le <br> permet le retour non possible ici avec\n
	};
var x = prompt("Entrez un nombre");
cube (x);



var produit = function(x,y) {
	document.write("\n Le produit de "+x+" x "+y+" est égal à "+x*y+"."+"<br>");
	};
var x;
var y = prompt("Entrez un second nombre");
produit(x,y);


function afficheImg(image) {
		document.write("<img src="+image+">"); 	//on met la balise html dans un document.write;
}
afficheImg("assets/img/papillon.jpg");

*/
