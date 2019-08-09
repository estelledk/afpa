<?php 
include ("header.php");

// lance la fonction connexionBase qui est dans le fichier connexion_bdd :
include("connexionBase.php"); 
$db = connexionBase();  // appel de la fonction de connexion


// requête pour afficher toutes les col relatives à un prod visible via wamp/jarditou.php
// 4 lignes indissociables pour la requête : (suivies plus bas du foreach pour afficher)
$query = "SELECT * FROM produits";  //on stocke la requête dans une variable
$result = $db->query($query);  //on fait appel à la méthode query() de l'obet $db en faisant passer en argument la reqête SQL. Le résultat est stocker dans la variable $result
$allProduct = $result->fetchAll(PDO::FETCH_OBJ); // on va chercher(fetch();  fetchAll() permet d'afficher plusieurs lignes) pour obtenir le résultat sous forme d'objet avec l'utilisation du paramètre PDO::FETCH_OBJ
$result->closeCursor();

include 'controller/clientController.php';
//var_dump($_POST);
//var_dump($formError);
?>


<?php  
if (isset($_POST['submit']) && count($formError) == 0) {
    ?>
   <p>Formulaire validé</p>
    <?php 
}

?>
<div class="table table-responsive">
    <!-- table table-responsive : affiche barre défilement horizontale si réduction page -->   
    <table class="container table table-bordered table-striped table-sm table-hover">  
    <!-- <table> : initialise le tableau -->
        <!-- container : col ajustées -->
        <!-- table-bordered : bordures -->
        <!-- table-striped : lignes grisées 1/2 -->
        <!-- table-hover : mise en évidence au passage de la souris --> 
        <thead class="thead-light">
            <!-- thead-light : titre sur fond gris -->
            <tr>
                <th class="text-center">Photo</th>
                <th class="text-center">ID</th>
                <th class="text-center">Référence</th>
                <th class="text-center">Libellé</th>
                <th class="text-center">Prix</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Couleur</th>
                <th class="text-center">Ajout</th>
                <th class="text-center">Modif</th>
                <th class="text-center">Bloqué</th>
                <th class="text-center">Sélection</th>
                <th class="text-center">Supression</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($allProduct as $prod)  //boucle foreach(){ permet de parcourir chaque colonne de chaque ligne
                 {
                // renommer la variable avec AS car cela ne doit concerner que la variable présente dans le foreach
            ?> 
             <tr>
<!-- photo -->		<td><a href="formulaireUpdate.php?pro_id=<?= $prod->pro_id ?>">
                    	<!-- href="fichierDeBase.php?colSouhaitée=" -->
                        <img class="img-thumbnail" height="80px" width="80px" src="assets/img/<?= $prod->pro_id . "." . $prod->pro_photo ?>"></a></td>  
<!-- ID -->			<td><?= $prod->pro_id ?></td>
<!-- reference -->	<td><?= $prod->pro_ref ?></td>
<!-- libelle -->	<td><?= $prod->pro_libelle ?></td>
<!-- prix -->		<td class="text-right"><?= $prod->pro_prix ?> €</td>  
<!-- stock -->		<td class="text-right"><?= $prod->pro_stock ?></td>  
<!-- couleur -->	<td><?= $prod->pro_couleur ?></td>  
<!-- ajout -->		<td><?= $prod->pro_d_ajout ?></td>  
<!-- modif -->		<td><?= $prod->pro_d_modif ?></td>  
<!-- bloqué -->		<td><?php
                        if ($prod->pro_bloque == 1) {
                            echo "Oui";
                        }
                        ?></td>  
<!-- modification --><td><a href="formulaireUpdate.php?pro_id=<?= $prod->pro_id ?>" title="Lien vars la modification du faormulaire" class="btn btn-success btn-sm">modification</a></td>
<!-- suppression --> <td><a href="controller/controllerDelete.php?pro_id=<?= $prod->pro_id ?>" class="btn btn-danger btn-sm">suppression</a></td>
                </tr>
            <?php 
            } 
            ?>
        </tbody>
    </table>
</div>
<br>

    <center><a href='formulaireCreate.php'><input type="button" value="ajouter" class="btn btn-info" name="ajouter"></a></center>
    

<br><br><br>
</div>


</form>
</div>
</div>
<?php 
include("footer.php");
?>	


</body>
</html>
