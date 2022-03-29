<?php

/**
* Visualizando dados no banco de dados
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

	function viewIndex()
	{
		$data = $_GET;

		if ($data['id'] == "") {
			$this->view->pick = "";
			$this->view->data = $data;
		} else {
			$this->view->pick = $data['id'];
			$this->view->content = $this->model->viewOnerecord($data['id']);
		}

		$this->view->render('index/view_index');
	}
}
