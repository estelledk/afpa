<title>Tableau</title>

<?php 
include("entete.php");
?>

<br><br>
	<style> table, tr, td, th {
		border: 1px solid #000000;
		margin-left: 2px;
		}
	</style>
</head>


<body>
<div class="container-fluid"> 
	<h1>Tableau de nos types de lames</h1>
	<table>
		<caption>Quantités disponibles</caption>
		<colgroup>
  			<col span="3" style="background-color:#C8C8C8">
    		<col style="background-color:#66FF99">
  		</colgroup>
  		<thead>
			<tr>
				<th>taille des lames</th>
				<th>Mai</th>
				<th>juin</th>
				<th>juillet prévisionnel</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td>lame S</td>
			<td>65 800</td>
			<td>53 200</td>
			<td>46 400</td>
		</tr>
		<tr>
			<td>lame M</td>
			<td>88 000</td>
			<td>51 500</td>
			<td>62 300</td>
		</tr>
		<tr>
			<td>lame L</td>
			<td>74 400</td>
			<td>64 200</td>
			<td>78 900</td>
		</tr>
		<tr>
			<td>lame XL</td>
			<td colspan="3">en rupture de stock</td>
		</tr>
		<tr>
			<td rowspan="2">lot mélangé de tailles M et L</td>
			<td>88 000</td>
			<td>51 500</td>
			<td>62 300</td></tr><tr>
			<td>74 400</td>
			<td>64 200</td>
			<td>78 900</td>
		</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>Total</td>
				<td>618 800</td>
				<td>284 600</td>
				<td>328 800</td>
			</tr>
		</tfoot>
	</table>
	<br><br>


<?php 
include("pieddepage.php");
?>	
