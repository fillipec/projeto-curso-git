<?php

	$categorias = [];
	$categorias[] = "infantil";
	$categorias[] = "adolescente";
	$categorias[] = "adulto";


	//var_dump($categorias);

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

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
