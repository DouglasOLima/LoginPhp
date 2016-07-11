<?php
	$login = addslashes($_POST['txtlogin']);
	$senha = addslashes($_POST['txtsenha']);
	
	if(!empty($login) && !empty($senha))
	{
		include('consultas.php');
		if(logar($login, $senha))
		{
			
		}
	}
	else
	{
		echo '<a href="logar_usuario.php">Por favor, preencha todos os campos corretamente!</a>';
	}
?>
