<?php
  require 'header.php';

  if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);

    $sql = "DELETE FROM users WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: index01.php");

  } else {
    header("Location: index01.php");
  }
?>

