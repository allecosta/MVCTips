<form action="<?php echo URL; ?>hello/verification" method="POST" onsubmit="return confirm("Deseja realmente enviar o formulário?");">
  <center>
    <input name="name" id="name" placeholder="Insira o nome"><br><br>
    <input type="email" name"email" id="email" placeholder="Insira o email"><br><br>
    <input type="text" name="contact" id="contact" placeholder="Insira o contato"><br><br>
    <button type="submit" class="btn-info" value="submit" name="submit">Enviar</button>
  </center>
</form>
