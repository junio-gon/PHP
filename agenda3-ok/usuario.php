<?php
	//Classe mãe
	class Info
	{
		/*
		*SUPER CLASSE
		*/
		private $id = "";
		private $nome = "";
		private $email = "";
		private $telefone = "";
	}
	
	//Classe filha
	class Usuario extends Info
	{
		/*
		*SUBCLASSE
		*/
		//Estou herdando ($NOME, $EMAIL, $TELEFONE)
		
		public function setUsuario($POST)
		{
			if(isset($_POST['id'])){
				$this->id = $POST['id'];
			}
			$this->nome = $POST['nome'];
			$this->email = $POST['email'];
			$this->telefone = $POST['telefone'];
		}
	}
?>