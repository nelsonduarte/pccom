<?php
	// Variaveis de mensagens
	$msg = '';
	

	// Verificar submissão
	if(filter_has_var(INPUT_POST, 'submit')){
		// Obter dados de formulário
		$nome = htmlspecialchars($_POST['nome']);
		$email = htmlspecialchars($_POST['email']);
		$msg = htmlspecialchars($_POST['msg']);

		// Verificar campos do formulário
		if(!empty($email) && !empty($nome) && !empty($msg)){
			// Passou
			
			// Verificar Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Falhou
				$msg = 'Por favor utilize uma conta de email válida!';
				
			} else {
				// Passou
				$toEmail = 'nelson.miguel.duarte@outlook.com';
				$subject = 'Contacto de: '.$nome;
				$body = '<h2>Pedido de Contacto</h2>
					<h4>Nome</h4><p>'.$nome.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Messagem</h4><p>'.$msg.'</p>
				';

				// Cabeçalhos de Email
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Cabeçalhos Adicionais
				$headers .= "De: " .$nome. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					 $msg = 'O seu email foi enviado.';			
				} else {
					 $msg = 'O seu email não foi enviado.';
				}
			}
		} else {
			// Falhou
			$msg = 'Por favor preencha todos os campos!';		
		}
	}
?>


    
        <?php include 'header.php';?>

    <!-- Formulario contato -->
    <div class="conteiner-pequeno">
      <?php if($msg != ''): ?>
          <div><?php echo $msg; ?></div>
      <?php endif; ?>
    <form class="conteiner-forms" method="POST" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
        <legend>
            <p>INFORMAÇÕES</p>
        </legend><br>
        <br> <input type="text" name="nome" placeholder="Insira o seu nome..." required>
        <p></p>
        <br> <input type="email" name="email" placeholder="Insira o seu email..." required>
        <p></p>
        <br> <textarea name="msg" rows="15" cols="50" placeholder="Mensagem" required></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
    <!-- Rodapé -->
    <?php include 'footer.php';?>

