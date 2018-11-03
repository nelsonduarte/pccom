<?php include 'header.php';?>

<h1 style="text-align:center;"> Produtos Disponiveis</h1>
<div id="tabela" style="width:50%;margin:auto; margin-top:50px;">
	<?php 

require("includes/dbh.inc.php");

$sql = mysqli_query($conn, "SELECT * FROM produtos") or die(
	mysqli_error($conn));
	//pecorrendo os registros da consulta.
	echo '<table class="table">';
	echo '<thead >';
	echo '<tr><th>&nbspID&nbsp</th> <th>&nbspDescrição&nbsp</th> <th>&nbspQuantidade&nbsp</th> <th>&nbspPreço&nbsp</th> <th>&nbsp Categoria&nbsp</th> <th>&nbspEditar&nbsp</th> <th>&nbspRemover&nbsp</th></tr>';
	echo '</thead>';

	while($aux = mysqli_fetch_assoc($sql))
	{

		echo '<tr>';
		echo '<td >'.$aux["id_prod"].'</td>';
		echo '<td >&nbsp'.$aux["desc_prod"].'</td>';
		echo '<td >&nbsp'.$aux["quant_prod"].'</td>';
        echo '<td >&nbsp'.$aux["preco_prod"].'</td>';
		echo '<td >&nbsp'.$aux["cat_prod"].'</td>';
		
echo '<td>&nbsp;&nbsp;<a href="editaProduto.php?id='.$aux["id_prod"] .  '" ">
          <span class="glyphicon glyphicon-pencil"></span></a></td>';
		echo '<td>&nbsp;&nbsp;<a href="removeProduto.php?id='.$aux["id_prod"] .  '" ">
          <span class="glyphicon glyphicon-remove"></span> 
        </a></td>';

		echo '</tr>';
		
	}
	echo '</table>';
	mysqli_close($conn);

?>
</div>


<?php include 'footer.php';?>