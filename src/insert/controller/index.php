<?php

/**
* 	Model, Views, estrutura do Controllers para inserir dados no database.
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
		$this->view->render("index/index");
	}

	function editSubmitIndex()
	{
		$action = $_POST['submit'];

		if ($action == "submit") {
			echo "$action";
			$arg = $_POST['id'];
			$data = [
				'id' => null,
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'contact' => $_POST['contact']
			];

			$this->model->submitIndex($data);
		}

		header("location: index");
	}
}
