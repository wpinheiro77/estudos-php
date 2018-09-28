<!-- PDO - BIBLIOTECA DE CONEXÃO A BANCO DE DADOS -->
<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);


} catch(PDOExcption $e){
  echo "Falhou: ".$e->getMessage();
}