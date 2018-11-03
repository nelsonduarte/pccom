
        <?php include 'header.php';?>

    <!-- Formulario contato -->
    <div class="conteiner-pequeno">
    <form class="conteiner-forms" action="includes/insProd.inc.php" method="POST" enctype="multipart/form-data">
        <legend>
            <p>Inserir Produtos</p>
        </legend><br> 
        <br> <input type="text" name="desc_prod" placeholder="Descrição do produto" required>
        <p></p>
        <br> <input type="text" name="quant_prod" placeholder="Quantidade do produto" required>
        <p></p>
        <br> <input type="text" name="preco_prod" placeholder="Preço do produto" required>
        <p></p>
        <br> <input type="text" name="cat_prod" placeholder="Categoria do produto" required>
        <p></p>
        <!--<br> <input type="file" name="img_prod" >
        //<p></p>-->
        <br><br> 
        <input type="submit" name="ok" value="Submeter"><br>
    </form>
    </div>
    
    
    
    <!-- Rodapé -->
   <?php include 'footer.php';?>