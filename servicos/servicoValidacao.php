<?php

function validaNome(string $nome) : bool
{

	if(empty($nome)){
		setMensagemErro("Preencha todos os dados, por gentileza!");
		return false;
	}
	else if (strlen($nome) < 5) {
		setMensagemErro("Digite o nome completo");
		return false;
	}

	else if (strlen($nome) > 40) {
		setMensagemErro("Nome muito extenso");
		header('location: cad_compet.php');
        return false;
	}

	return true;

}


function validaIdade(string $idade) : bool
{

	if(empty($idade)){
		setMensagemErro("Preencha todos os dados, por gentileza!");
		return false;
	}
	else if(!is_numeric($idade)){
		setMensagemErro("Idade invalida");
        return false;
	}

	return true;
}
	