<?php
		
		$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
		$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");
		
		$des = $_REQUEST['login'];
		$troca = "UPDATE usuarios SET ativo='1' WHERE login='$des'";
		$res = mysqli_query($conexao,$troca) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$troca);
		mysqli_close($conexao);
		header('location: adm.php');
?>