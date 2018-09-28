<!-- PDO - DELETANDO DADOS -->
<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "DELETE FROM users WHERE id = 3";
    $sql = $pdo->query($sql);

    echo "Deletado com sucesso!";

} catch(PDOExcption $e){
  echo "Falhou: ".$e->getMessage();
}