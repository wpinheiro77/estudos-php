<!-- FUNÇÕES -->
<?php

function somarNumero($x, $y){
  $soma = $x + $y;
  return $soma;
}

// AS VARIÁVEIS CRIADAS DENTRO DA FUNCTION, NÃO FUNCIONA FORA DE FUNCTION
// SOMENTE O RETURN PODERÁ SER USADO FORA DE FUNCTION
// O RESULTADO DA VARIÁVEL $soma SERÁ ENVIADO PARA: somarNumero();
// ISSO NÃO FUNCIONA: echo "A soma é ".$soma;


$resultado = somarNumero(10,5);

echo "O resultado será: ". $resultado;

?>