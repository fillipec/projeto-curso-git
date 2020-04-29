<?php

function validaNome(string $nome) : bool
{

	if(empty($nome)){
		$_SESSION['mensagem-erro'] = "Preencha todos os dados, por gentileza!";
		return false;
	}
	else if (strlen($nome) < 5) {
		$_SESSION['mensagem-erro'] = "Digite o nome completo";
		return false;
	}

	else if (strlen($nome) > 40) {
		$_SESSION['mensagem-erro'] = "Nome muito extenso";
		header('location: cad_compet.php');
        return false;
	}

	return true;

}


function validaIdade(string $idade) : bool
{

	if(empty($idade)){
		$_SESSION['mensagem-erro'] = "Preencha todos os dados, por gentileza!";
		return false;
	}
	else if(!is_numeric($idade)){
		$_SESSION['mensagem-erro'] = "Idade invalida";
        return false;
	}

	return true;
}
	