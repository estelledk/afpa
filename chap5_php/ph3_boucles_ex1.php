<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Nombres impairs de 0 à 150</title>
</head>

<body>
    <?php for ($i = 1; $i <= 150; $i += 2) { ?>
        <p><?= $i ?></p>          <!-- équivalent à :  <p>?php echo $i ?></p>  -->
    <?php } ?>
</body>

</html>