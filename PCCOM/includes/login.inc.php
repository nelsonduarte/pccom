<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'dbh.inc.php';
    
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Erros
    //Verificar se os campos estão vazios
    if(empty($login) || empty($password)){
       header("Location: ../sessao.php?login=campovazio");
       exit(); 
    } else {
        $sql = "SELECT * FROM users_pccom WHERE user_login='$login' OR user_email='$login'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        }
        if($resultCheck < 1){
        header("Location: ../sessao.php?login=erro1");
        exit();
    } else {
        if($row = mysqli_fetch_assoc($result)) {
            //Desencriptar a password
            $hashedPwdCheck = password_verify($password, $row['user_pwd']);
            //Verificar se a password existe na BD
            if($hashedPwdCheck == false) {
               header("Location: ../sessao.php?login=erro2");
               exit(); 
            } elseif($hashedPwdCheck == true){
                //Permitir login do utilizador
                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_nome'] = $row['user_nome'];
                $_SESSION['u_apelido'] = $row['user_apelido'];
                $_SESSION['u_email'] = $row['user_email'];
                $_SESSION['u_login'] = $row['user_login'];
                header("Location: ../index.php?login=sucesso");
               exit();
            }
        }
    }
    
} else {
    header("Location: ../index.php?login=erro3");
    exit();
}
