<?php

if (isset($_POST['submit'])){
    
    include_once 'dbh.inc.php';
    
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $apelido = mysqli_real_escape_string($conn, $_POST['apelido']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Erros
    //Verificar campos vazios
    if(empty($nome) || empty($apelido) || empty($email) || empty($login) || empty($password)){
        header("Location: ../registar.php?registar=camposvazios");
        exit();
    } else
        //Verificar se os carateres inseridos são válidos
        if(!preg_match("/^[a-zA-Z]*$/", $nome) || !preg_match("/^[a-zA-Z]*$/", $apelido)) {
        header("Location: ../registar.php?registar=nomeinvalido");
        exit();  
        } else {
            //Verificar se o email é válido
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               header("Location: ../registar.php?registar=emailinvalido");
               exit(); 
            } else {
                //Verificar se o utilizador já existe
                $sql = "SELECT * FROM users_pccom WHERE user_login = '$login'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0){
                  header("Location: ../registar.php?registar=nomeutilizadorexistente");
                  exit();   
                } else {
                    //Encriptar a password
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    //Inserir utilizador na DB
                    $sql = "INSERT INTO users_pccom (user_nome, user_apelido, user_email, user_login, user_pwd) VALUES ('$nome', '$apelido', '$email', '$login', '$hashedPwd');";
                    mysqli_query($conn, $sql);
                    header("Location: ../sessao.php?registar=sucesso");
                    exit();
                }
            }
        }
    
} else {
   header("Location: ../registar.php");
    exit();
}
?>