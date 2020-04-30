<?php

	session_start();


	function setMensagemSucesso(string $mensagem) :void
	{
		
		$_SESSION['mensagem-sucesso'] = $mensagem;

	}


	function getMensagemSucesso() : ?string
	{
		if (isset($_SESSION['mensagem-sucesso'])) {
			
			return $_SESSION['mensagem-sucesso'];
		}
		
		return null;

	}

	function setMensagemErro(string $mensagem) :void
	{
		
		$_SESSION['mensagem-erro'] = $mensagem;

	}


	function getMensagemErro() : ?string
	{
		if (isset($_SESSION['mensagem-erro'])) {
			
			return $_SESSION['mensagem-erro'];
		}
		
		return null;

	}

	function removeMensagemSucesso() : void
	{
		if (isset($_SESSION['mensagem-sucesso'])) {
			return unset($_SESSION['mensagem-sucesso'])
		}
	}

	function removeMensagemErro() : void
	{
		if (isset($_SESSION['mensagem-erro'])) {
			return unset($_SESSION['mensagem-erro'])
		}
	}