<html>
	<head>
		<title>
			Index
		</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			session_start();
			
			if(!isset($_SESSION['logado']) && $_SESSION['logado'])
			{
				echo '<form>
			<label>Logado como: <i>'.$_SESSION['usuario'].'</i></label><br>
			<button type="submit" formaction="deslogar.php">Deslogar</button>
		</form>';
			}
			else
			{
				echo '<form>
			<button type="submit" formaction="cadastrar_usuario.php">Cadastrar</button>
			<button type="submit" formaction="logar_usuario.php">Logar</button>
		</form>';
			}
		?>
	</body>
</html>
