<?php 

	include_once("conexao.php");

	$filtro = isset($_GET['pesquisa'])?$_GET['pesquisa']:"";

	$cmd = "select * from usuario where nome like '%$filtro%'
	order by nome";
	$Conectar = new conexao();

	$conexao = $Conectar->getConexao();

	$consulta = mysqli_query($conexao, $cmd);
	$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Consulta</title>
	<link rel="stylesheet" href="CSS/estilo.css">
	<script type="text/javascript">
		function confirma(id) {
			alert("entrou");
			var confirmar = confirm("Tem certeza que deseja excluir o registro??");
			if(confirmar == true){
				//document.getElementById("form1").submit();
				window.location.href = "excluir.php?codigo="+id;
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<nav>
			<?php include "menu.html"; ?>
		</nav>
		<section>
			<h2>Usuários Cadastrados:</h2>
			<hr><br>
			<form method="get" action="">
				Procurar por nome: <input type="text" name="pesquisa" class="campo" required autofocus>
				<input type="submit" value="Pesquisar" class="btn">

				<br><br>
			</form>
			

			<?php 

				if ($filtro != "") {
					print("Resultado da pesquisa por: <strong>$filtro</strong> <br><br>");
				}
				
				print("$registros registros encontrados");
				print("<br><br>");

				while ($exibirRegistros = mysqli_fetch_array($consulta)) {

					$id = $exibirRegistros[0];
					$nome = $exibirRegistros[1];
					$email = $exibirRegistros[2];
					$telefone = $exibirRegistros[3];

					print "<article>";

					print("$id <br>");
					print("$nome <br>");
					print("$email <br>");
					print("$telefone<br>");
					
					print('<form method="post" action="editar.php">');
					print('<input type="hidden" name="id" value="'.$id.'">');
					print('<input type="hidden" name="nome" value="'.$nome.'">');
					print('<input type="hidden" name="email" value="'.$email.'">');
					print('<input type="hidden" name="telefone" value="'.$telefone.'">');
					print('<input type="submit" value="Editar" class="editar">');
					print('<input onclick="confirma('.$id.')" type="button" value="Excluir" class="excluir"');
					//print('<input onclick="confirma('.$id.')" type="button" value="Excluir" class="excluir"');
					
					//print('</form>');
					//print('<form method="post" action="concultas.php">');
					//print('<input type="submit" onclick="confirma('.$id.')" value="Excluir" class="excluir"');
					//print('<input onclick="confirma('.$id.')" type="button" value="Excluir" class="excluir"');
					
					print('</form>');
					/*incluindo passagem de parâmetro*/
					
					print "</article>";
				}

				mysqli_close($conexao);

			?>
			
			<br><br>
			<a href="index.php"><button class="btn">Voltar</button></a>
			<br>
		</section>
		
	</div>
</body>
</html>