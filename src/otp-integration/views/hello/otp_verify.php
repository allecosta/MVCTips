<form action="<?php echo URL; ?>hello/verification" method="POST" onsubmit="return confirmation("Deseja realmente enviar o formulário?");">
  <center>
    <input class="" name="otp" id="name" placeholder="Insira OTP"><br><br>
    <button type="submit" class="btn-info" value="submit" name="save">Enviar</button>
    <button type="submit" class="btn-info" value="submit" name="reenviar">Reenviar</button>
  </center>
</form>
