<!--  Ajoutez 1 mois à la date courante  -->
<?php
$date = new DateTime();
$date->modify('+1 month');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ph6_dates_exo8</title>
</head>

<body>
<p>Le mois prochain nous serons le <?= $date->format('d/m/Y'); ?></p>
</body>
</html>
