<?php
	class conexao
	{
		/*Precisamos definir nossos atributos*/
		private $hostname = "localhost";
		private $user = "root";
		private $password = "";
		private $database = "pw";
		
		/*Precisamos definir nosso método*/
		public function getConexao()
		{
			//instanciando uma conexao
			$conexao = mysqli_connect(
			$this->hostname, $this->user,
			$this->password, $this->database
			);
			
			return $conexao;
			
			if(!$conexao){
				print "Erro de conexao com o banco";
			}
		}
	}
?>