<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Utilizadores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<style
td{
width:20px;
}
/style>-->
</head>
<body >
<h1 style="text-align:center;"> Utilizadores Registados</h1>
<div id="tabela" style="width:50%;margin:auto; margin-top:50px;">
	<? php 

require("ligaBD.php");

$sql = mysqli_query($con, "SELECT * FROM user") or die(
	mysqli_error($con));
	//pecorrendo os registros da consulta.
	echo '<table >';
	echo '<thead >';
	echo '<tr><th>ID</th> <th> Nome</th> <th> Login</th> <th> Password </th> <th> Email</th> <th> Opções</th></tr>';
	echo '</thead>';

	while($aux = mysqli_fetch_assoc($sql))
	{

		echo '<tr>';
		echo '<td >'.$aux["codUser"].'</td>';
		echo '<td >'.$aux["nome"].'</td>';
		echo '<td >'.$aux["login"].'</td>';
		echo '<td >'.$aux["password"].'</td>';
		echo '<td >'.$aux["email"].'</td>';
echo '<td>&nbsp;&nbsp;<a href="editaUser.php?id='.$aux["codUser"].'" class="btn btn-info btn-s">
          <span class="glyphicon glyphicon-pencil"></span> Editar</a></td>';
		echo '<td>&nbsp;&nbsp;<a href="removeUser.php?id='.$aux["codUser"].'" class="btn btn-danger btn-s">
          <span class="glyphicon glyphicon-remove"></span> Remover 
        </a></td>';

		echo '</tr>';
		
	}
	echo '</table>';
	mysqli_close($con);

?>
</div>

</body>
</html>