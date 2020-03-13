<?php 
	
	include_once("conexao.php");

	$valor = isset($_GET['codigo'])?$_GET['codigo']:"";

		if($valor != "")
		{
			$conectar = new conexao();
	
			$conexao = $conectar->getConexao();
			
			$cmd = "delete from usuario
					where id = $valor";
			
			$registros = mysqli_query($conexao, $cmd);
	
			mysqli_close($conexao);
		}
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Excluir Contato</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
	<div class="container">
		<nav>
			<?php include "menu.html";?>
		</nav>
		<section class="one">
			<h2>Confirmação de Exclusao</h2>
			<hr><br><br>
			<?php
				if ($registros){
					print("<strong>Usuário excluido com sucesso!</strong>");
				}
				else{
					print("Não foi possível excluir o usuário<br>
							Entre em contato com seu administrador de sistemas");
				}
			?>
		</section>
	</div>
</body>
</html>