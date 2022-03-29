<?php

class Register extends Controller
{
  public fucntion __construct()
  {
    parent::__construct();
  }

  function checkUser()
  {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $count = $this->model->checkUser($username, $email);

    if ($count > 0) {
      echo "Ops! Este usuário já existe";
    } else {
      $data = [
        'id' => null,
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' = $_POST['password']
      ];

      $this->model->insert_user($data);

    }

    header('location:register');
  }
}
