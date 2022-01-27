/*
* Arquivo model utilizado para visualizar dados no banco de dados.
*/

<?php

class Index extends Model 
{
	public function __construct() 
	{
		parent::__construct();
	}

	public function getAllrecords() 
	{
		return $this->db->select("SELECT * FROM `mvc` ORDER BY id DESC");
	}

	public function viewOnerecord($id) 
	{
		return $this->db->select("SELECT * FROM `mvc` WHERE id = '".$id."' LIMIT 1");
	}

}
