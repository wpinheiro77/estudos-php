<!-- PDO - INSERINDO NOVOS USUÁRIOS -->
<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $nome = "Kaos";
  $email = "kaos@lol.com";
  $senha = md5("123456");

  $sql = "INSERT INTO users SET nome = '$nome', email = '$email', senha = '$senha' ";
  $sql = $pdo->query($sql);

  echo "usuário inserido: ".$pdo->lastInsertId();


} catch(PDOExcption $e){
  echo "Falhou: ".$e->getMessage();
}