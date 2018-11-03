
        <?php include 'header.php';?>

    <!-- Formulario contato -->
    <div class="conteiner-pequeno">
    <form class="conteiner-forms" action="includes/registo.inc.php" method="POST">
        <legend>
            <p>REGISTO</p>
        </legend><br> 
        <br> <input type="text" name="nome" placeholder="Insira o seu nome..." required>
        <p></p>
        <br> <input type="text" name="apelido" placeholder="Insira o seu apelido..." required>
        <p></p>
        <br> <input type="email" name="email" placeholder="Insira o seu email..." required>
        <p></p>
        <br> <input type="text" name="login" placeholder="Insira um login..." required>
        <p></p>
        <br> <input type="password" name="password" placeholder="Insira uma senha..." required>
        <p></p>
        <br> <input type="password" name="password2" placeholder="Insira novamente a senha..." required><br><br> 
        <input type="submit" name="submit" value="Submeter"><br>
    </form>
    </div>
    
    
    
    <!-- Rodapé -->
   <?php include 'footer.php';?>

