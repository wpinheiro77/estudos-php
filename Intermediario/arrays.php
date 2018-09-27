<!-- MANIPULANDO ARRAYS -->
<?php

$array = array(
  "nome" => "William",
  "idade" => 41,
  "cidade" => "Cerquilho",
  "pais" => "Brasil"
);

// LISTA SOMENTE AS CHAVES
$array2 = array_keys($array);
// LISTA SOMENTE PS VALORES DAS CHAVES
$array3 = array_values($array);

echo "Arrays mostrando só chaves e depois só valores.<br><br>";
print_r($array2);
echo "<br><br>";
print_r($array3);
echo "<br><br>";
echo "=============================<br><br>";

//COLOCA OS VALORES EM OPRDEM ALFABÉTICA
asort($array);
echo "Coloca os valores em ordem alfabética<br>";
print_r($array);
echo "<br><br>";

arsort($array);
echo "Coloca os valores em ordem decrescente<br>";
print_r($array);
echo "<br><br>";
echo "=============================<br><br>";

//CONTA A QUANTIDADE DE REGISTROS
echo "Exibe a quantidade de registros<br>";
echo "Total de registros: ".count($array);
echo "<br><br>";
echo "=============================<br><br>";

//EXIBE SE VALOR EXISTE NO SEU ARRAY
echo "Exibe se o valor existe no seu registro<br>";
if(in_array("William", $array)) {
  echo "O valor existe!";
}
echo "<br><br>";
echo "=============================<br><br>";


// REMOVE O ULTIMO REGISTRO
array_pop($array);
echo "Remove o ultimo registro<br>";
print_r($array);
echo "<br><br>";

// REMOVE O PRIMEIRO REGISTRO
array_shift($array);
echo "Remove o primeiro registro<br>";
print_r($array);
echo "<br><br>";
echo "=============================<br><br>";




