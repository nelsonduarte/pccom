<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="forms.css">
    <title>Registo</title>
</head>
<body>
<?php  
require("ligaBD.php"); 

$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM user Where codUser=$id") or die(
	mysqli_error($con));
while($aux = mysqli_fetch_assoc($sql)){
	$nome = $aux['nome'];
$log = $aux['login'];
$pass = $aux['password'];
$mail = $aux['email'];



?>
    <div class="conteiner-forms">
       <div class="alinhar-margem">
        <form id="register-form" action="updateUtilizador.php?id=<?php echo $id; ?>" method="POST">
            <legend>Registo de Utilizador</legend><br>

      <input type="text" name="nome" placeholder="Insira o seu nome e apelido" value="<?php echo $nome; ?>"><br>
            <input type="email" name="email" placeholder="Insira o seu email" value="<?php echo $mail; ?>"><br>
            <input type="text" name="utilizador" placeholder="Insira um nome de Utilizador" value="<?php echo $log; ?>"><br>
    <input id="password" type="password" name="password" placeholder="Insira uma senha" value="<?php echo $pass; ?>"><br>
             <input  type="password" name="password2" placeholder="Insira novamente a senha" value="<?php echo $pass; ?>"><br>
            <input type="submit" name="enviar" value="Atualizar Dados"><br>
<?php }
mysqli_close($con); ?>        
</form>
        </div>
        <p>Lembrou-se?<a href="sessao.html"> Clique aqui</a> para entrar!</p>
    </div>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script> <!--   
    https://github.com/jquery-validation/jquery-validation/tree/master/src/additional -->
    <script src="./js/valida.js"></script>
</body>
</html>