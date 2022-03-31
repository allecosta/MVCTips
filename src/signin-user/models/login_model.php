<?php

/**
 * Registra os dados no banco de dados
 */
class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
    }

    public function run()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $result = $this->db->select("SELECT * FROM register WHERE username = '" . $username . "' AND password = '" . $password . "' ");
        $count = count($result);

        if ($count > 0) {
            Session::init();
            Session::set('role', "user");
            Session::set('loggedIn', true);
            Session::set('username', $username);
            Session::set('password', $result[0]['password']);
            header('location: ' . URL . 'login/index');
        } else {
            Session::set('loggedIn', false);
            header('location: ' . URL);
        }
    }
}
