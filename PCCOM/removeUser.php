<?php 
require("ligaBD.php");
$id = $_GET["id"];

$sql = mysqli_query($con, "DELETE FROM user  where user_id=$id") or die(
	mysqli_error($con));
	if ($con->query($sql) === TRUE) {
		mysqli_close($con);
		header('Location: ./listaUtilizadoresNovo.php');
	}else{
		echo "Error remove record: " . $con->error;
		mysqli_close($con);
		header('Location: ./listaUtilizadoresNovo.php');
	}
	
?>