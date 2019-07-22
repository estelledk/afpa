<HTML><BODY>
<TABLE BORDER>
<?php
// 1ère ligne
echo "<TR><TD></TD>";
for ($col = 0; $col <= 12; $col++) {
   echo "<TH>$col</TH>";
}
echo "</TR>\n";
// 1ère colonne
for ($lig = 0; $lig <= 12; $lig++) {
   echo "<TR><TH>$lig</TH>";
// restant
   for ($col = 0; $col <= 12 ; $col++) {
       $res = $col * $lig;
       echo "<TD ALIGN=right>$res</TD>";
   }
   echo "</TR>\n";
}
?>
</TABLE>
</BODY></HTML>