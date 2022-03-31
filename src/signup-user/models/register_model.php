<?php

/**
 * Registra os dados no banco de dados
 */
class Register_Model extends Model
{
    public function __construct()
    {
        parent::__construct;
    }

    public function checkUser($username, $email)
    {
        $result = $this->db->select("SELECT * FROM register WHERE username = '" . $username . "' OR email = '" . $email . "' ");
        $count = count($result);
        return $count;
    }

    public function insertUser($data)
    {
        $this->db->insert('register', $data);
    }
}
