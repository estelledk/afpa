<?php
/* nb secondes écoulées depuis 01/01/1970
echo time();
*/


/* date du jour
echo "Nous sommes le ".date('d/m/Y');
*/


/* heure
echo date("H:i:s");
*/


/* afficher la date 01/01/2000
$date = new DateTime('01/01/2000');
echo $date -> format('d/m/Y H\hi');
*/


/* affiche jour lettres, jour chiffres, mois lettres, années 4 chiffres, heure locale
setlocale(LC_TIME, 'french');
echo 'Nous sommes le '.strftime('%A %d %B %Y', time());
*/


/* affiche la date en français
setlocale(LC_TIME, 'french');
echo 'Date à afficher : '.strftime('%A %d %B %Y').date(W);
*/


/* affiche le numéro de la semaine
echo "Semaine n° ".date('W',strtotime('2019/07/14'));
*/


/* affiche nb de jour entre 2 dates
$datetime1 = new DateTime('2020/01/01'); // Date dans le passé ou futur
$datetime2 = new DateTime(date("Y-m-d H:i:s"));   // Date du jour 
$interval = $datetime1->diff($datetime2);
echo $interval->format('%a jours ');   // nombre de jours
echo $interval->format('%y années');  
*/

/*
$date = 2011;
while ($date <= date('L')) {
    
    $date += 1;
}
echo $date.' est la prochaine année bissextile';
*/
function anneeBissextile($annee) {  // année biss est /4 et /400 mais pas /100
    return ((($annee%4) == 0) && (($annee%100 != 0) || ($annee%400 == 0)));
}

for($I = 2019; $I <= 2024; $I++) {
    if(anneeBissextile($I)) echo strval($I)." sera une année bissextile<BR>";
}


?>