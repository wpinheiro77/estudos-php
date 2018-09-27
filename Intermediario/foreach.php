<!-- FOREACH - TRÊS EXEMPLOS -->
<?php
// ARRAY SIMPLES
$nomes = array("William", "Adriano", "Júnior", "Bete", "Karol");


foreach ($nomes as $aluno) {
  echo "Aluno: ".$aluno."<br>";
  // EXIBE ALUNO: + VALOR DE CADA VALOR DE CADA CHAVE DO ARRAY
}

echo "<br>";
echo "===========================<br><br>";


// ARRAY DENTRO DE ARRAY
$nomes2 = array(
  array("nomes2" => "William", "Idade2" => 41),
  array("nomes2" => "Adriano", "Idade2" => 37),
  array("nomes2" => "Júnior", "Idade2" => 39)
);

foreach ($nomes2 as $aluno2) {
  echo "Aluno: ".$aluno2["nomes2"]." - Idade: ".$aluno2["Idade2"]."<br>";
  // EXIBE ALUNO: VALOR DA CHAVE nomes2 - IDADE: VALOR DA CHAVE Idade2
}

echo "<br>";
echo "===========================<br><br>";


// ARRAY SIMPLES COM EXIBIÇÃO DE CHAVE A VLOR DA CHAVE
$aluno1 = array(
  "Nome"=>"William",
  "Idade"=>41,
  "Estado"=>"SP",
  "Cidade"=>"Cerquilho",
  "Pais"=>"Brasil"
);

foreach ($aluno1 as $chave => $dado) {
  echo $chave." = ".$dado."<br>";
  // EXIBE A CHAVE SEGUIDA DO SEU VALOR
}