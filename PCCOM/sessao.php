
 <?php include 'header.php';?>

    <!-- Formulario contato -->
    
    <form class="conteiner-forms" action="includes/login.inc.php"  method="POST">
        <legend>
            <p>INICIAR SESSÃO</p>
        </legend><br>
        <br> <input type="text" name="login" placeholder="Insira o seu login...">
        <p></p>
        <br> <input type="password" name="password" placeholder="Insira uma senha..."><br><br>
        <input type="submit" name="submit" value="Submeter"><br><br>
        
            <a href="registar.html"><input type="submit" name="submit" value="Não tem conta? Crie uma aqui!"><br><br></a><br><br>
        
    </form>
    
   
    <!-- Rodapé -->
   <?php include 'footer.php';?>
