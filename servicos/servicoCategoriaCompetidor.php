<?php

	function defineCategoriaCompetidor(string $nome, string $idade)
	{
		$categorias = [];
		$categorias[] = "infantil";
		$categorias[] = "adolescente";
		$categorias[] = "adulto";


		$nome = $_POST['nome'];
		$idade = $_POST['idade'];

		//return 0;
		

	    if($idade >= 6 && $idade <= 12){
			
	        setMensagemSucesso("O competidor ".$nome." pertence a categoria infantil");
	        return;
		}
		elseif ($idade > 12 && $idade <= 18) {
			
	        setMensagemSucesso("O competidor ".$nome." pertence a categoria adolescente");
	        return;
		}
		elseif ($idade > 18 && $idade <= 60) {
			
	        setMensagemSucesso("O competidor ".$nome." pertence a categoria adulto");
	        return;
		}
		else{
			
	        setMensagemSucesso("O candidato ".$nome." infelizmente não pode participar");
	        return;
		}

	} 