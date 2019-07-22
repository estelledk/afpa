<?php

// Ouverture en lecture seule dès début du fichier (r)
$fp = fopen("ListeLiens.txt", "r");

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) {
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne
    $ligne = fgets($fp, 4096);

    echo "<a href=".$ligne.">".$ligne."</a> <br> <br>";
        
    /*
    // regex pour une url
    $url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
    
    //fonction preg_replace() qui va remplacer toutes parties du commentaire
    // qui ressembleront à la regex par le lien URL
    $ligneAvecURL = preg_replace($url, '<a href="http$2://$4">$0</a>', $ligne);
    
    
    // Affiche le commentaire ici avec les URLs
    echo $ligneAvecURL."<br> <br>";
    */   
} 

?>