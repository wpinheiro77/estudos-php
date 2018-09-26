<!-- TESTE SIMPLES DE ARRAYS NO PHP -->

<?php
  $user = array("William", "Pinheiro", 41, "masculino"
  );

  print_r($user);

  echo "<br/>";

  $produtos = array(
    0 => array(
      "nome" => "1",
      "quantidade" => "",
      "informacoes" => ""
    ),

    1 => array(
      "nome" => "2",
      "quantidade" => "",
      "informacoes" => ""
    )
);

    $produtos [] = array(
        "nome" => "3",
        "quantidade" => "",
        "informacoes" => ""
);

  print_r($produtos);

?>