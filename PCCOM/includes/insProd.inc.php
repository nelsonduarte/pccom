<?php 
	
require("dbh.inc.php");
	$descricao = $_POST['desc_prod'];
	$quantidade = $_POST['quant_prod'];
    $preco = $_POST['preco_prod'];
	$categoria = $_POST['cat_prod'];
	//$imagem = $_POST['img_prod'];


	$conn->query("INSERT INTO produtos (desc_prod, quant_prod, preco_prod, cat_prod) VALUES ('$descricao','$quantidade','$preco','$categoria')") or die(mysql_error()); 
	
	mysqli_close($conn);
header('Location: ../listaProduto.php');
	
?>