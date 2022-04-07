<?php

/**
*   Importando arquivos excel e CSV
*   Controller, para importar o arquivo excel e CSV
*/
class Hello extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function import()
  {
    if (isset($_POST['save'])) {
      $file = $_FILES['file']['tmp_name'];
      $handle = fopen($file, 'r');
      $c = 0;

      // while(($filesop = fgetcsv($handle, 1000, ",")) !== false) {}
      $name = $filesOp[0];
      $email = $filesOP[1];
      $contact = $filesOP[2];

      $data = [
        'id' => null;
        'name' => $name,
        'email' => $email,
        'contact' => $contact
      ];

      if ($c == 0) {
        $this->model->submitIndex($data);
      }

      $c += 1;
    }

    echo "Dados importado com sucesso!";
  }

  $this->view-render('hello/import_data');
}
