<!-- Montrez que la date du 17/17/2019 est erronée -->

<?php 
$result = checkdate(17, 17, 2019); // m-d-Y
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ph6_dates_exo6</title>
</head>

<body>
<?php 
    if ($result == true) {
?>
		<p><?php echo 'la date est valide'; ?></p>
<?php
    } else{
?>
         <p><?php echo 'la date n\'est pas valide'; ?></p>
<?php
    }
?>
</body>
</html>


<!-- 
$d2 = new DateTime('17-17-2019');
echo $d2->format('d/m/Y');
 -->