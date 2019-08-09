<?php
// combien reste-t-il de jours avant la fin de votre formation ?
$datetime1 = new DateTime('2020/01/01'); // Date dans le passé ou futur
$datetime2 = new DateTime(date("Y-m-d H:i:s"));   // Date du jour
$interval = $datetime1->diff($datetime2);
echo "Il reste ".$interval->format('%a jours ')." avant la fin de la formation";   // nombre de jours
// echo $interval->format('%y années'); 
?>