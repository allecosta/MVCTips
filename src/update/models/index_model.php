<?php

/**
*		Arquivo model utilizado para atualizar dados no database.
*/ 
class IndexModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllrecords()
	{
		return $this->db->select("SELECT * FROM `mvc` ODER BY id DESC");
	}

	public function getOnerecord($id)
	{
		return $this->db->select("SELECT * FROM `mvc` WHERE id='".$id."' LIMIT 1");
	}

	public function editSubmitIndex($data, $arg)
	{
		$this->db->update('mvc', $data, "`id` = $arg");
	}
}
