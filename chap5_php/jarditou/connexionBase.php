<?php
// la fonction connextionBase() envoie l'identifiant de connexion à la base personnelle 
// directement à la page qui a demandé la connexion, grâce à la fonction return()
function connexionBase()
{
    // paramètre de connexion serveur
    $host = 'localhost:3307';
    $base = 'jarditou';    // bdd avec laquelle on travaille
    $login= 'root';     // loggin d'accès au serveur de BDD
    $password= '';    // password pour s'identifier auprès du serveur

    
    //try...catch permet de tenter(try) une connection à la base et de retourner(catch) une erreur si la connexion ne se fait pas
    try {
        $db = new PDO('mysql:host=' . $host. ';charset=utf8;dbname=' . $base, $login, $password);  
        return $db;
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br>';  //$e->getMessage() permet de récupérer le message d'erreur
        echo 'N° : ' . $e->getCode() . '<br>';   //$e->getCode() permet de récupérer le code d'erreur
        die('Connexion au serveur impossible');
    }
}

//$db instance de connexion à la BDD
//mysql:host=localhost:3307 : adresse du host(=serveur) où se trouve la BDD
//charset=utf8 : type de caractères utilisés
//root : nom d'utilisateur de base de données (le même que sur Phpmyadmin ou heidiSQL)

?>









<!-- CONSIGNES

A ce niveau, si vous déclenchez une erreur, celle-ci sera interceptée par l'instruction catch, le texte 
associé à celle-ci sera affiché, puis le die() arrêtera l'exécution du script.
Le message d'erreur pourra être personnalisé pour chaque erreur (serveur, bdd, etc…) ou encore tracé dans un fichier log.
La fonction connexionBase() envoie ensuite l'identifiant de connexion à la base personnelle directement 
à la page qui a demandé la connexion. Pour cela, on utilise la fonction return() -->