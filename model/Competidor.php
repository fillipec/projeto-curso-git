<?php

	/**
	 * Classe competidor
	 */
	class Competidor
	{
		protected $nome;
		protected $idade;

		function __construct($nome, $idade)
		{
			
			this->nome = $nome;
			this->idade= $idade;

		}

		function inserirCompetidor(){
			return this->nome;
		}
	}