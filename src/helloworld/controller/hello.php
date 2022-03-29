<?php

/**
* 	Model: É um arquivo de classe que contém as consultas de conectividade do banco de dados
* 	Controller: Este arquivo acessa os métodos e variáveis declarados
* 	View: Contém todo o html e página de exibição.
*/

class Hello extends Controller
{
	function __contruct()
	{
		parent::__contruct();
	}

	function index()
	{
		$this->view->render('hello/index');
	}

}
