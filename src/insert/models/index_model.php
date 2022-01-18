/*
* Este é o arquivo model que estamos usando para inserir dados no database.

*/

<?php

	class IndexModel extends Model 
	{
		public function __construct() 
		{
			parent::__construct();
		}

		public function getAllrecords() 
		{
			return $this->db->select("SELECT * FROM mvc ORDER BY id DESC");
		}

		public function submitIndex($data) 
		{
			$this->db->insert("mvc", $data);
		}
	}