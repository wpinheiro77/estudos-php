<?php
  if(isset($_POST["nome"])){

    $nome = $_POST["nome"];
    file_put_contents("teste.txt", $nome."\n", FILE_APPEND);

    header("Location: index01.php"); //anti F5
  }
?>

<form action="" method="post">
  Digite um nome: <br><br>
  <input type="text" name="nome" id="">
  <input type="submit" value="Enviar">
</form>