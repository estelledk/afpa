var magic = parseInt(Math.random()*100);

document.getElementById("verif").addEventListener('click',function() 
{
	if (parseInt(document.getElementById("nombre").value) == magic) 
	{
		window.alert("Gagné !");
		document.getElementById("label1").innerHTML = "Entrez votre proposition de nombre (entre 0 et 100) :";
		magic = parseInt(Math.random()*100);
    } 
	else if (parseInt(document.getElementById("nombre").value) > magic) 
    {
		document.getElementById("label1").innerHTML = "Plus petit !";
    } 
	else 
    {
		document.getElementById("label1").innerHTML = "Plus grand !";
	}
	document.getElementById("nombre").value = "";
});
   
   console.log(magic);


