var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
console.log(tab);

var prenom = prompt("Saisissez un prénom \nS'il est présent dans le tableau, il sera supprimé et un champ vide apparaîtra à la fin de celui-ci \nAttention, la 1ère lettre en majuscule est indispensable");

if(tab.indexOf(prenom) != -1) 
{
	tab.splice(tab.indexOf(prenom),1)
	tab.push("");
} 
else 
{
	alert("Ce prénom ne fait pas partie du tableau");
}

console.log(tab);  //affichage du tableau dans la console
