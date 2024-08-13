<?php 
	//conecta banco de dados
	if (!isset($_REQUEST['action']) || $_REQUEST['action'] == 'visualizar') {
		//Dados para conexão com banco de dados
		$servidor = 'localhost';
		$usuario = 'usuario';
		$senha = '123456';
		$banco = 'dbprodutos';

		$link = mysqli_connect($servidor,$usuario,$senha,$banco) or 
		die('Não foi possível conectar: ' .  mysqli_error($link));
	}
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'adicionar') {
		//adiciona produto ao carrinho
		header('location: ?action=visualizar');
	}else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'remover') {
		// remover produto do carrinho
	}

 ?>