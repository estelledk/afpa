<?php 
include ("entete.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>types de lames</title>
</head>

<body>

<br><br><br><br>
	<style> table, tr, td, th {
		border: 1px solid #000000;
		margin-left: 2px;
		}
	</style>
</head>


<body>

<div class="container-fluid">
        
<table class="table table-sm">
    <caption>  <!-- titre sous tableau -->
        <h4>Quantités disponibles</h4>
    </caption>
    
    <thead class="table-info">  
    <!-- class="table-info" : cellule bleue -->
        <tr>
            <th>tailles des lames</th> 
            <th>juin</th>
            <th>juillet</th>
            <th>août (prévisionnel)</th> 
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>lames S</td>  
            <td>65 800</td>
            <td>53 200</td>
            <td class="table-active">46 400</td>
            <!-- class="table-active" : ligne grise -->
        </tr>
        <tr> 
            <td>lames M</td>
            <td class="table-success">88 000</td>
            <!-- class="table-success" : cellule verte -->
            <td>51 500</td>
            <td class="table-active">62 300</td>
        </tr>
        <tr>
            <td>lames L</td>
            <td>74 400</td> 
            <td>64 200</td>
            <td class="table-active">78 900</td>
        </tr>
        <tr class="table-danger">
        <!-- class="table-danger" : cellule rouge -->
            <td>lames XL</td>
            <td colspan="3">en rupture de stock</td> <!-- colspan="3" : fusion de 3 cellules horizontalement -->
        </tr>
        <!--
        <tr>
            <td rowspan="2">lot mélangé de lames M et L</td>
             td rowspan="2" : fusion de 2 cellules verticalement 
            <td>58 000</td>
            <td>46 500</td>
            <td class="table-active">46 000</td>
            </tr><tr>
            <td>36 400</td>
            <td>54 200</td>
            <td class="table-active">62 900</td>
        </tr>
        -->
    </tbody>
    
    <tfoot>
	<tr>
            <td>TOTAL</td>
            <td>618 800</td>
            <td>284 600</td>
            <td class="table-active">328 800</td>
	</tr>
    </tfoot>
</table>    
        
</div>    
        
        
        
        
        
        
<?php 
include("pieddepage.php");
?>	


</body>
</html>
