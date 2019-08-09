<?php
$my = "KO";

if ($my == "OK") {
    echo"C'est bon<br>";
}
else {
    echo"Pas bien !<br>"; // Message affiché dans la page web
    $message = "Pas bien ".__FILE__." ".__LINE__; // Message enregistré dans le fichier 'C:/wamp/logs/php_error.log'    
    error_log($message); 
} 
?>