<?php
/**
* Inserindo dados no banco de dados
*/
class HelloModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function submitIndex($data)
  {
    $this->db->insert('user_data', $data);
  }
}
