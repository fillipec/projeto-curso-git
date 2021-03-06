<?php

	function defineCategoriaCompetidor(string $nome, string $idade) :?string
	{
	  	
		if (validaNome($nome) && validaIdade($idade))
		{
			removeMensagemErro();
				
			if($idade >= 6 && $idade <= 12)
			{
			
		        setMensagemSucesso("O competidor ".$nome." pertence a categoria infantil");
		        return null;
			}
			elseif ($idade > 12 && $idade <= 18)
			{
				
		        setMensagemSucesso("O competidor ".$nome." pertence a categoria adolescente");
		        return null;
			}
			elseif ($idade > 18 && $idade <= 60)
			{
				
		        setMensagemSucesso("O competidor ".$nome." pertence a categoria adulto");
		        return null;
			}
			else
			{
				
		        setMensagemSucesso("O candidato ".$nome." infelizmente não pode participar");
		        return null;
			}

		}
		else
		{
			removeMensagemSucesso();
			return getMensagemErro();
		}
	} 