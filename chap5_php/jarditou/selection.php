<?php 
include ("header.php");
?>

<title>sélection un produit</title>

<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

<div class="container-fluid">
    <!-- lance la requête affichée dans fichier produits.php -->
    <form action="vueDetail.php" method="get" 
          enctype="multipart/form-data"><br>Pour avoir les précisions sur un produit, entrez son identifiant<br><br>
        <input type="text" name="pro_id">
        <input type="submit" value="valider" name="valider">
    </form>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php 
include("footer.php");
?>	
</body>
</html>