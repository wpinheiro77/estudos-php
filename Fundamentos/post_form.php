<!-- FORMULÁRIO SIMPLES DE ENVIO COM POTS EM PÁGINA EXTERNA -->

<?php
  require_once "recebe.php";
?>

<hr>

<form method="POST" action="recebe.php">
  E-mail: <br>
  <input type="email" name="email" id=""><br><br>

  Senha: <br>
  <input type="password" name="senha" id=""><br><br>

  <input type="submit" value="Enviar Dados">
</form>
