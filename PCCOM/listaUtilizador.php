<?php include 'header.php';?>

<h1 style="text-align:center;">Lista de Utilizadores</h1>
<div id="tabela" style="width:50%;margin:auto; margin-top:50px;">
    <?php 

require("includes/dbh.inc.php");

$sql = mysqli_query($conn, "SELECT * FROM users_pccom") or die(
	mysqli_error($conn));
	//pecorrendo os registros da consulta.
	echo '<table>';
	echo '<thead >';
	echo '<tr><th>&nbspID&nbsp</th> <th>&nbspNome&nbsp</th> <th>&nbspApelido&nbsp</th> <th>&nbspEmail&nbsp</th> <th>&nbsp Login&nbsp</th></tr>';
	echo '</thead>';

	while($aux = mysqli_fetch_assoc($sql))
	{

		
        echo '<tr >';
		echo '<td >'.$aux["user_id"].'</td>';
		echo '<td >&nbsp'.$aux["user_nome"].'</td>';
		echo '<td >&nbsp'.$aux["user_apelido"].'</td>';
        echo '<td >&nbsp'.$aux["user_email"].'</td>';
		echo '<td >&nbsp'.$aux["user_login"].'</td>';
        
		//echo '<td >&nbsp'.$aux["imagem"].'</td>';
        echo '<td>&nbsp;&nbsp;<a href="editaUser.php?id='.$aux["user_id"].'" class="btn btn-info btn-s">
          <span class="glyphicon glyphicon-pencil"></span> Editar</a></td>';
		echo '<td>&nbsp;&nbsp;<a href="removeUser.php?id='.$aux["user_id"].'" class="btn btn-danger btn-s">
          <span class="glyphicon glyphicon-remove"></span> Remover 
        </a></td>';
		echo '</tr>';
		
	}
	echo '</table>';
    
	mysqli_close($conn);

?>
</div>


<?php include 'footer.php';?>
