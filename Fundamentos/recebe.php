<!-- PÁGINA QUEE RECEBE DADOS DE UM FORMULÁRIO EXTERNO -->

<?php
if(isset($_POST["email"]) && !empty($_POST["email"])){
{
  if(isset($_POST["senha"]) && !empty($_POST["senha"]))

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  echo "O email enviado é: " . $email . "<br>";
  echo "A senha enviada é: ". $senha . "<br><br>";
  }
}
?>

