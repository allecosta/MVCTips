/*
* Model: É um arquivo de classe que contém as consultas de conectividade do banco de dados

* Controller: Este é o acesso ao arquivo dos métodos e variáveis declarados

* View: Contém todos os html e página de exibição.

*/

<?php

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