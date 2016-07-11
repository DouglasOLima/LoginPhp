<?php
	include('conexao.php');
	
	function cadastrar($usuario, $login, $senha)
	{
		$verificar = mysql_query('SELECT * FROM login WHERE login = \''.$login.'\';', abrir()) or die(mysql_error());
		
		if(mysql_num_rows($verificar) > 0)
		{
			return false;
		}
		
		mysql_query('INSERT INTO login(nome, login, senha) VALUES(\''.$usuario.'\', \''.$login.'\', \''.$senha.'\');', abrir()) or die(mysql_error());
		
		return true;
	}
	
	function logar($login, $senha)
	{
		return false;
	}
?>
