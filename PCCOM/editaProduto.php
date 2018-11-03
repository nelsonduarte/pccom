<?php include 'header.php';?>

	<?php
		require("includes/dbh.inc.php"); 

$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM produtos Where id_prod=$id") or die(
	mysqli_error($conn));
while($aux = mysqli_fetch_assoc($sql)){
	$descricao = $aux['desc_prod'];
$quantidade = $aux['quant_prod'];
$categoria = $aux['cat_prod'];
$preco = $aux['preco_prod'];


	?>
	
		<form class="conteiner-forms" action="updateProduto.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <legend>
            <p>Editar Produtos</p>
        </legend> 
        <h3>Descrição</h3><input type="text" name="desc_prod" value="<?php echo $descricao; ?>"><br>
        
        <h3>Quantidade</h3><input type="text" name="quant_prod" value="<?php echo $quantidade; ?>">
        
        <br> <h3>Preço</h3><input type="text" name="preco_prod" value="<?php echo $preco; ?>">
        
        <br><h3>Categoria</h3></legend> <input type="text" name="cat_prod" value="<?php echo $categoria; ?>">
        
        
        <!--<br> <input type="file" name="img_prod" >
        //<p></p>-->
        <br><br> 
        <input type="submit" name="submit" value="Editar"><br>
    </form>
		<?php }
mysqli_close($conn); ?> 
	</form>
</body>
</html>