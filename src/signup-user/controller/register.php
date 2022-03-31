<?php

/**
 * Toda lógica para o registro de dados no banco fica aqui no controller
 */
class Register extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('register/index');
    }

    function signup()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $count = $this->model->checkUser($username, $email);

        if ($count > 0) {
            echo "Este usuário já existe";
        } else {
            $data = [
                'id' => null,
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];

            $this->model->insertUser($data);
        }

        header('location:index');
    }
}
