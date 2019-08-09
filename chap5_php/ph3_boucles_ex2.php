<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>répétition 500 fois</title>
</head>

<body>
    <?php
    $ligne = 1; // initialisation de la variable
    while ($ligne <= 500) // tant que la ligne n'atteind pas la ligne 500
    { // affichage
    ?>
        <p><?= $ligne ?> : Je dois faire des sauvegardes régulières de mes fichiers</p> 
        
        <?php $ligne++; // incrémentation
    }
    ?>
</body>