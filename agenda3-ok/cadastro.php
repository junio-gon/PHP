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
			<?php include "menu.html" ?>
		</nav>
		<section class="one">
			<h1>Cadastro de Contatos
			</h1><hr><br><br>
			
			<form method="post" action="cadastrar.php">
				Nome<br>
				<input type="text" name="nome" 
				class="campo" maxlength="30"
				placeholder="Informe o nome"
				required autofocus><br>
				E-mail<br>
				<input type="email" name="email" 
				class="campo" maxlength="45"
				placeholder="Informe o email"><br>
				Telefone<br>
				<input type="text" name="telefone" 
				class="campo" maxlength="18"
				placeholder="Informe o telefone"><br>
				<br>
				<input type="submit" value="Salvar"
				class="btn">
				<input type="reset" value="Limpar"
				class="btn">
			</form>
		</section>
	</div>
	
</body>
</html>