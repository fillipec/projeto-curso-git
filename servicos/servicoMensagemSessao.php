<?php

	session_start();


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