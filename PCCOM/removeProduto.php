<?php 
include ("includes/dbh.inc.php");
$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM produtos where id_prod=$id") or die(
	mysqli_error($conn));
	if ($conn->query($sql) === TRUE) {
		mysqli_close($conn);
		header('Location: ./listaProduto.php');
	}else{
		echo "Erro ao remover produto: " . $conn->error;
		mysqli_close($conn);
		header('Location: listaProduto.php');
	}
	
?>