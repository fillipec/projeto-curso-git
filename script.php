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
		$_SESSION['mensagem-erro'] = "Preencha todos os dados, por gentileza!";
		header('location: cad_compet.php');
        return;
	}
	else if (strlen($nome) < 5) {
		$_SESSION['mensagem-erro'] = "Digite o nome completo";
		header('location: cad_compet.php');
        return;
	}

	else if (strlen($nome) > 40) {
		$_SESSION['mensagem-erro'] = "Nome muito extenso";
		header('location: cad_compet.php');
        return;
	}

	else if(!is_numeric($idade)){
		$_SESSION['mensagem-erro'] = "Idade invalida";
		header('location: cad_compet.php');
        return;
	}

    if($idade >= 6 && $idade <= 12){
		
        $_SESSION['mensagem-sucesso'] = "O competidor ".$nome." pertence a categoria infantil";;
        header('location: cad_compet.php');
        return;
	}
	elseif ($idade > 12 && $idade <= 18) {
		
        $_SESSION['mensagem-sucesso'] = "O competidor ".$nome." pertence a categoria adolescente";;
        header('location: cad_compet.php');
        return;
	}
	elseif ($idade > 18 && $idade <= 60) {
		
        $_SESSION['mensagem-sucesso'] = "O competidor ".$nome." pertence a categoria adulto";;
        header('location: cad_compet.php');
        return;
	}
	else{
		
        $_SESSION['mensagem-sucesso'] = "O candidato ".$nome." infelizmente não pode participar";;
        header('location: cad_compet.php');
        return;
	}
