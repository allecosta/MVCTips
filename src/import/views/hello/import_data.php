<form action="<?php echo URL; ?>hello/verification" method="POST" onsubmit="return confirm(Tem certeza que deseja enviar o formulário?);">
  <center>
    <input class="" name="otp" id="name" placeholder="Entre OTP"><br><br>
    <button type="submit" class="btn-info" value="submit" name="save">Enviar</button>
    <button type="submit" class="btn-info" value="submit" name="resend">Reenviar</button>
  </center>
</form>
