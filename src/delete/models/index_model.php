<?php

/**
* 	Arquivo model utilizado para deletar os dados no banco de dados.
*/ 
class IndexModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllrecords()
	{
		return $this->db->select("SELECT * FROM `mvc` ORDER BY id DESC");
	}

	public function deleteIndex($id)
	{
		$this->db->delete('mvc', "`id` = {$id}");
	}
}
