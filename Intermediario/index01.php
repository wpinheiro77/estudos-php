<?php require 'conecta.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Controle de usuários</title>
</head>
<body>
  <br>
  <a class="adiciona" href="adiciona.php">Inserir Novo Usuário</a>
  <br><br>
  <table class="user-tbl">
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    <?php
      $sql = "SELECT * FROM users";
      $sql = $pdo->query($sql);
      if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario){

          echo'<tr>';
          echo'<td >'.$usuario['nome'].'</td>';
          echo'<td >'.$usuario['email'].'</td>';
          echo'<td class="btn"><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Exluir</a></td>';
          echo'</tr>';

        }
      }
    ?>
  </table>
</body>
</html>