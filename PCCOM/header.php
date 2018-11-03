<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="autores" content="Nelson, Tiago e Daniel">
    <title>PCCOM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>

<header>
<!-- Registo -->
<div class="conteiner-grande">
     
            <div class="registar">
    <?php
        if(isset($_SESSION['u_id'])){
           echo '<form action="includes/logout.inc.php"  method="POST">        
        <button type="submit" name="submit">Terminar Sessão</button>
    </form>'; 
        } else {
          echo ' <ul>
                    <li>
                        <a href="sessao.php">Iniciar Sessão</a>
                    </li>
                    <li>
                        <a href="registar.php">Registar</a>
                    </li>
                </ul> ';
        }
    
     ?> 
                
            </div>
        </div>
        <!-- Logo, procurar e carrinho -->
        <div class="conteiner-pequeno">
            <div id="logo-procurar-carrinho">
                <div class="logo">
                    <a href="./index.php">
                        <img src="img/logo.png" alt="logotipo pccom">
                    </a>
                </div>
                <div class="compras">
                    <form class="procurar">
                        <input type="search" name="procurar" placeholder="Procurar">
                    </form>
                    <div class="carrinho">
                        <img src="img/carrinho.png" alt="carrinho compras">
                    </div>
                    <form class="items">
                        <input type="text" name="items" placeholder="0,00€" disabled>
                    </form>
                </div>
            </div>
        </div>
        <!-- Menu navegação -->
        <nav>
            <div class="conteiner-grande">
                <div class="menu">
                    <ul class="menu-nav">
                        <li>
                            <a href="computadores.php">Computadores</a>
                        </li>
                        <li>
                            <a href="componentes.php">Componentes</a>
                        </li>
                        <li>
                            <a href="armazenamento.php">Armazenamento</a>
                        </li>
                        <li>
                            <a href="smartphones.php">Smartphones</a>
                        </li>
                        <li>
                            <a href="redes.php">Redes</a>
                        </li>
                        <li>
                            <a href="contatos.php">Contate-nos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   <body>