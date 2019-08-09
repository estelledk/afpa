<?php
if(isset($_POST['upload'])) { // si formulaire soumis
    $content_dir = '/imgDeplacee_formulaire'; // adresse du dossier où sera déplacé le fichier
    
    $tmp_file = $_FILES['fichier']['tmp_name'];
    
    if(!is_uploaded_file($tmp_file)) {
        exit("Le fichier est introuvable");
    }
    
    // on vérifie maintenant l'extension
    $type_file = $_FILES['fichier']['type'];
    
    if(!strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif')) {
        exit("Le fichier n'est pas une image");
    }
    
    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['fichier']['name'];
    
    if(!move_uploaded_file($tmp_file, $content_dir.$name_file)) {
        exit("Impossible de copier le fichier dans $content_dir");
    }
    
    echo "Le fichier a bien été uploadé";
}



//on prend le type du fichier uploader grâce file_info

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

if(in_array($mimetype,$aMimeTypes)) {
     //On récupère l'extention du fichier :
    $extension = substr(strrchr($_FILES["fichier"]["name"],"."), 1); 
     //On bouge le fichier du dossier tmp, dans "nom de dossier/et on le renomme :
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "images"."/"."cucurbitacé".".".$extension); 
     //Si le fichier fait a un type autorisé alors on l'affiche on affiche les images avec print_r
    print_r ("<img src = 'images/cucurbitacé.jpg' width='50px' heigt='50px'>"); 
}

else {
   echo "Type de fichier non autorisé";
   exit;
}
*/

?>