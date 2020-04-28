<?php

function validaNome(string $nome) : bool
{

	if(empty($nome)){
		$_SESSION['mensagem-erro'] = "Preencha todos os dados, por gentileza!";
		header('location: cad_compet.php');
        return false;
	}
	else if (strlen($nome) < 5) {
		$_SESSION['mensagem-erro'] = "Digite o nome completo";
		header('location: cad_compet.php');
        return false;
	}

	else if (strlen($nome) > 40) {
		$_SESSION['mensagem-erro'] = "Nome muito extenso";
		header('location: cad_compet.php');
        return false;
	}

}


function validaIdade(string $idade) : bool
{

	if(empty($idade)){
		$_SESSION['mensagem-erro'] = "Preencha todos os dados, por gentileza!";
		header('location: cad_compet.php');
        return false;
	}
	else if(!is_numeric($idade)){
		$_SESSION['mensagem-erro'] = "Idade invalida";
		header('location: cad_compet.php');
        return false;
	}

}
	