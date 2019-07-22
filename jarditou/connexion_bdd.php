<?php
// la fonction connextionBase() envoie l'identifiant de connexion à la base personnelle 
// directement à la page qui a demandé la connexion, grâce à la fonction return()
function connexionBase()
{
    // paramètre de connexion serveur
    $host = "localhost:3307";
    $login= "root";     // loggin d'accès au serveur de BDD
    $password= "";    // password pour s'identifier auprès du serveur
    $base = "jarditou";    // bdd avec laquelle on travaille
    
    try {
        $db = new PDO('mysql:host=' . $host. ';charset=utf8;dbname=' . $base, $login, $password);
        return $db;
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible');
    }
}
?>