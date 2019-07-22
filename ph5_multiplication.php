<?php
if(isset($_POST['nombre'])) {
    for($i =1 ; $i <= 10 ; $i++) {
        echo $i." X ".$_POST['nombre']." = ".$i*$_POST['nombre']."<br />";
    }
}
?>
<br />
<form method="post">
<?php
for( $i = 1 ; $i <= 10 ; $i++) {
   echo '<button name="nombre" value="'.$i.'">'.$i.'</button>';
}
?>