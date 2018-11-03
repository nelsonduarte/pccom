<?php session_start();

if(!isset($_SESSION['carrinho'])){
	$_SESSION['carrinho'] = array();
}
//adiciona produto
if(isset($_GET['acao'])){
//adicionar carrinho
	if($_GET['acao'] == 'add'){
		$id = intval($_GET['id']);
		if(!isset($_SESSION['carrinho'][$id])){
			$_SESSION['carrinho'][$id]=1;
		}else{
			$_SESSION['carrinho'][$id]+=1;
	}
//remover carrinho
	if($_GET['acao']== 'del'){
		$id = intval($_GET['id']);
		if(isset($_SESSION['carrinho'][$id])){
			unset($_SESSION['carrinho'][$id]);
		}
	}

//alterar quantidade
	if($_GET['acao'] == 'up'){
		if(is_array($_POST['prod'])){
			foreach($_POST['prod'] as $id => $qtd){
				$id = intval($id);
				$qtd = intval($dtd);
				if(!empty($qtd) || $qtd <> 0){
					$_SESSION['carrinho'][$id] = $qtd;
				}else{
					unset($_SESSION['carrinho'][$id]);
				}
			}
		}
	}
}

?>