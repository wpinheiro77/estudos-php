<?php
  if(isset($_POST['nome'] && !empty($_POST['nome'])))
?>
<form method="post">
  Nome: <br>
  <input type="text" name="nome"><br><br>

  E-mail: <br>
  <input type="email" name="email"><br><br>

  Senha: <br>
  <input type="password" name="senha"><br><br>

  <input type="submit" value="Cadastrar">
</form>