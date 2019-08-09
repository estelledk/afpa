var bouton = document.getElementById("ibouton");      // concerne le bouton
bouton.addEventListener("click", saisie);              // concerne le bouton

function saisie() 
{
    alert("Vous avez saisi "+"'"+document.getElementById("itexte").value+"'");  // concerne le texte
}

