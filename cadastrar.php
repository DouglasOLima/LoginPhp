<?php
	$nome = addslashes($_POST['txtnome']);
	$login = addslashes($_POST['txtlogin']);
	$senha = addslashes($_POST['txtsenha']);
	$repetirsenha = addslashes($_POST['txtrepetirsenha']);
	
	if($senha == $repetirsenha && !empty($nome) && !empty($login) && !empty($senha) && !empty($repetirsenha))
	{
		include('consultas.php');
		if(cadastrar($nome, $login, $senha))
		{
			echo '<a href="index.php">Usuario criado com sucesso</a>';
		}
		else
		{
			echo '<a href="index.php">Desculpe, nao foi possivel criar o usuario \''.$login.'\'</a>';
		}
	}
	else
	{
		echo '<a href="cadastrar_usuario.php">Por favor, preencha todos os campos corretamente!</a>';
	}
?>
