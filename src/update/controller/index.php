<?php

/**
* 	Model, Views, estrutura do Controllers para atualizar os dados inseridos no database.
*/
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

	function editIndex()
	{
		$data = $_GET;

		if ($_GET['id'] == '') {
			$this->view->pick = '';
			$this->view->data = $data;
		} else {
			$this->view->pick = $_GET['id'];
			$this->view->content = $this->model->getOnerecord($_GET['id']);
		}

		$this->view->render('index/editIndex');

	}

	function editSubmitIndex()
	{
		$arg = $_POST['id'];
		$data = [
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'contact' => $_POST['contact']
		];

		$this->model->editSubmitIndex($data, $arg);
	}

	header('location: index');
}
