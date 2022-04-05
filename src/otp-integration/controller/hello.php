<?php

/**
* Controlador para integração OTP no formulário de inscrição
*/
class Hello extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function signUp()
  {
    $this->view->render('hello/index');
  }

  function verification()
  {
    if (isset($_POST['submit'])) {
      Session::set('contact', $_POST['contact']);
      Session::set('name', $_POST['name']);
      Session::set('email', $_POST['email']);

      // chave de autenticação
      $authkey = "354555695Abti5JzlQTYb593b5c59";

      // vários números de celulares separados por vírgula
      $mobileNumber = $_POST['contact'];

      // ID do remetente, enquanto o ID do remetente da rota4 deve ter 6 caracteres
      $senderId = "ZXVUT";

      // sua mensagem a ser enviada, adicione codificação de URL aqui
      $rndno = rand(1000, 9999);
      Session::set('opt', $rndno);
      $message = urlencode("Seu número OTP é: " .$rndno);

      // define rota
      $route = "route=4";

      $postData = [
        'authkey' => $authkey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,
        'route' => $route
      ];

      // API URL
      $url = "https://control.msg91.com/api/sendhttp.php";

      // inicia o recurso
      $ch = curl_init();
      curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
      ));

      // ignora a verificação do certificado SSL
      curl_setopt($ch, CURL_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURL_SSL_VERIFYHOST, 0);

      // obtém resposta
      $output = curl_exec($ch);

      if (curl_errno($ch)) {
        echo "error: " . curl_error($ch);
      }

      curl_close($ch);

    }

    if (isset($_POST['resend'])) {
      $authkey = "354555695Abti5JzlQTYb593b5c59";
      $mobileNumber = Session::get('contact');
      $sendId = "ACEGI";
      $rndno = Session::get('otp');
      $message = urlencode("Seu número OTP é: " . $rndno);
      $route = "route=4";

      $postData = [
        'authkey' => $authkey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'route' => $route
      ];

      $url = "https://control.msg91.com/api/sendhttp.php";

      $ch = curl_init();
      curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
      ));

      curl_setopt($ch, CURL_SSL_VERIFYHOST, O);
      curl_setopt($ch, CURL_SSL_VERIFYPEER, 0);

      if (curl_errno($ch)) {
        echo "error: " . curl_error($ch);
      }

      curl_close($ch);

      echo "Otp reenviado com sucesso!";
    }

    if (isset($_POST['save'])) {
      if (Session::get('otp') == $_POST['otp']) {
        $data = [
          'id' => null;
          'name' => Session::get('name');
          'email' => Session::get('email');
          'contact' => Session::get('contact')
        ];

        this->model->submit_index($data);

        echo "Inscrito com sucesso!";
      } else {
        echo "OTP invalido.";
      }

      Session::destroy();
    }

    $this->view->render('hello/otp_verify');
  }
}
