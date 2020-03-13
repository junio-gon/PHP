<?php 
	include_once("conexao.php");
	include_once("usuario.php");
	
	$usuario = new usuario();
	
	$usuario->setUsuario($_POST);
	
	$conectar = new conexao();
	
	$conexao = $conectar->getConexao();
	
	$cmd = "insert into USUARIO (nome,
	email, telefone) 
	values ('$usuario->nome', 
	'$usuario->email', '$usuario->telefone'
	)";
	
	$registros = mysqli_query($conexao, $cmd);
	
	//$registros = mysqli_affected_rows($conexao);
	
	mysqli_close($conexao);
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Contato</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
	<div class="container">
		<nav>
			<?php include "menu.html";?>
		</nav>
		<section class="one">
			<h2>Confirmacao de Cadastro</h2>
			<hr><br><br>
			<?php
				//var_dump($usuario);
				//print $usuario->nome;
				if ($registros){
					print("Usuário Cadastrado com sucesso!<br><br>$usuario->nome<br>$usuario->email<br>$usuario->telefone<br>");
				}
				else{
					print("Cadastro não efetuado!<br>Já existe um usuário com o e-mail informado:<br><strong>$usuario->email</strong>");
				}
			?>
		</section>
	</div>
</body>
</html>