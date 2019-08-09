<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  <!-- responsive, s'adapte à la taille écran -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">

    <title>JARDITOU</title>
<!-- lien css  -->
    <link rel="stylesheet" href="assets/css/entete.css">

</head>

<body>
    <div class="container-fluid bg-dark"> 
    <!-- class="container-fluid" permet de faire une marge à gauche -->
	<br>
<!-- img logo -->
        <img src="assets/img/jarditou_logo.jpg" title="logo Jarditou" width="300">
        <br><span class="text-light">La qualité depuis 70 ans</span><br><br>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- accueil -->
        <a class="navbar-brand" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarColor02" aria-controls="navbarColor02" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
<!-- liste -->
                <li class="nav-item active">
                    <a class="nav-link" href="liste.php">Liste des produits<span 
                            class="sr-only">(current)</span></a>
                </li>
<!-- selection -->
                <li class="nav-item">
                    <a class="nav-link" href="selection.php">vue-détail</a>
                </li>

<!-- formulaire -->
                <li class="nav-item">
                    <a class="nav-link" href="formulaireClient.php">Formulaire-client</a>
                </li>
<!-- mentions legales -->
                <li class="nav-item">
                    <a class="nav-link" href="mentionsLegales.php">Mentions légales</a>
                </li>
            </ul>
<!-- recherche -->                
            <form class="form-inline my-2 my-lg-0" action="recherch.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
            </form>
        </div>
    </nav>
        
<!-- img promotion -->
    <img src="assets/img/promotion.jpg" title="promotion sur les lames de terrasse" 
         class="bandeau-image">
         
