<!-- PDO - BIBLIOTECA DE CONEXÃO A BANCO DE DADOS -->
<?php

// INTENS PARA SE CONECTAR AO BANCO DE DADOS:
// TIPO DE BANCO; // NOME DO BANCO; // IP DO BANCO;
$dsn = "mysql:dbname=blog;host=localhost";

// USER, E PASSWORD DO BANCO
$dbuser = "root";
$dbpass = "";

// FAZ CONEXÃO E TRATA ERRO
try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  // BUSCA NA TABELA USERS, JOGA ISSO NA VARIÁVEL $sql
  $sql = "SELECT * FROM users";
  $sql = $pdo->query($sql); // O $sql RECEBE A VARIAVEL $pdo QUE RECEBE A QUERY ACIMA

  if($sql->rowCount() > 0){ //rowCount VERIFICA SE EXISTE UMA LINHA OU MAIS NO BD

    foreach ($sql->fetchAll() as $usuario) {
      //fetchALL PEGA TODOS OS RESULTADOS DA CONSULTA E TRANSFORMA ELES EM UM ARRAY NA VARIÁVEL $usuario

      echo "Nome: ".$usuario["nome"]. "<br>Email: " .$usuario["email"]."<br><br>";
      // .$usuario["nome"] RETORNA OS DADOS DA TABELA nome
      // .$usuario["email"] RETORNA OS DADOS DA TABELA email
    }

  } else {
    echo "Não há usuários cadastrados";
    //CASO NÃO ENCONTRE NENHUM RESULTADO EXIBE ESTA MENSAGEM
  }

} catch(PDOExcption $e){

  echo "Falhou: ".$e->getMessage();
  //CASO DE ERRO COM CONEXÃO DE BANCO DE DADOS, EXIBE O ERRO NA TELA

}



