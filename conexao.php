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
		header('location: ?action=visualizar');
	}else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'visualizar') {
		// visualizar carrinho
		echo "<br> <a href='?'>Retornar à lista de produtos</a>";
	}else{
		$sql = "select * from tbProdutos";
		$result = mysqli_query($link,$sql);
		while ($tbl = mysqli_fetch_array($result)) {
			$codProd = $tbl["codProd"];
			$nomeprod = $tbl["nome"];
			$valoProd = $tbl["valor"];
			$qtdeProd = $tbl["quantidade"];

			echo "<li>" . $nomeprod . " (R$ ". $valoProd . ") ( ". 	$qtdeProd . " em estoque)";
			echo "<a href='action=adicionar&id=" . $codProd . "'> Comprar</a>";
		}
		echo "<br> <a href='?action=visualizar'> Visualizar carrinho</a>";
	}

	mysqli_close($link);
 ?>