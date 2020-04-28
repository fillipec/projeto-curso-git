<?php
	//inicio de sessão

	session_start();
	

	//criar vetor categoria

	$categorias = [];
	$categorias[] = "infantil";
	$categorias[] = "adolescente";
	$categorias[] = "adulto";


	//var_dump($categorias);

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	//return 0;
	if(empty($nome) || empty($idade)){
		$_SESSION['mensagem-erro'] = "Preencha todos os dados";
		return;
	}
	if (strlen($nome) < 5) {
		echo "Digite o nome completo";
		return;
	}

	if (strlen($nome) > 40) {
		echo "Nome muito extenso";
		return;
	}

	if(!is_numeric($idade)){
		echo "Idade invalida";
		return;
	}

	if($idade >= 6 && $idade <= 12){
		echo "O competidor ".$nome." pertence a categoria infantil";
	}
	elseif ($idade > 12 && $idade <= 18) {
		echo "O competidor ".$nome." pertence a categoria adolescente";
	}
	elseif ($idade > 18 && $idade <= 60) {
		echo "O competidor ".$nome." pertence a categoria adulto";
	}
	else{
		echo "Infelizmente não pode participar!";
	}
