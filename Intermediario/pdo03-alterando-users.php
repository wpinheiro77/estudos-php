<!-- PDO - ALTERANDO DADOS -->
<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "UPDATE users SET email = 'rato@trocado.com.br' WHERE email = 'abcd@trocado.com.br'";
    $sql = $pdo->query($sql);

    echo "Alterado com sucesso!";

} catch(PDOExcption $e){
  echo "Falhou: ".$e->getMessage();
}