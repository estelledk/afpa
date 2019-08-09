<?php
$date = new DateTime();
if ($date->format('L') != 1) {
    $date->modify('+1 years');
}

echo $date->format('Y')." est la prochaine année bissextile";
?>

<!-- 
// Quelle sera la prochaine année bissextile ?
function anneeBissextile($annee) {  // année biss est /4 et /400 mais pas /100
    return ((($annee%4) == 0) && (($annee%100 != 0) || ($annee%400 == 0)));
}

for($I = 2019; $I <= 2024; $I++) {
    if(anneeBissextile($I)) echo strval($I)." sera une année bissextile<BR>";
}
-->