/*
* Deletando dados em um banco de dados
*/

<?php 

class Index extends Controller 
{
	function __construct() 
	{
		parent::__construct();
	}

	function index() 
	{
		$this->view->allrecords = $this->model->getAllrecords();
		$this->view->render('index/index');
	}

	function deleteIndex($id) 
	{
		$this->model->deleteIndex($id);
		header('location: ../index/index');
	}
}