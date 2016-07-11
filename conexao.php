<?php
	
	#FUNÇÃO PARA ABRIR CONEXÃO COM O BANCO DE DADOS
	function abrir()
	{
		include('configuracao.php');
		
		global $conexao;
		
		#CONECTAR AO SERVIDOR
		$conexao = mysql_connect($host.':'.$porta, $usuario, $senha) or die(mysql_error());
		
		if($conexao)
		{
			#SELECIONAR A BASE DE DADOS
			mysql_select_db($banco, $conexao) or die(mysql_error());
		}
		
		return $conexao;
	}
	
	#FUNÇÃO PARA FECHAR CONEXÃO COM O BANCO DE DADOS
	function fechar()
	{
		global $conexao;
		
		if($conexao)
		{
			mysql_close($conexao);
		}
		
		$conexao = false;
	}
?>
