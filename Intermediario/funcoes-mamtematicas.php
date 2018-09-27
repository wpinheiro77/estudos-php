<!-- FUNÇÕES MATEMÁTICAS -->
<?php

echo "Absolute<br>";
echo abs(10)."<br>";
echo abs(-10)."<br>";
echo "================<br>";

echo "Round<br>";

// ROUND ARRENDODA PARA O PRÓPRIO NÚMERO
echo round(1.02)."<br>";

// CEIL ARREDONDA PARA CIMA
echo ceil(1.2)."<br>";

// FLOOR ARRENDODA PARA BAIXO
echo floor(9.9999)."<br>";
echo "================<br>";

echo "RAND<br>";
// RAND GERA NÚMERO ALEATÓRIO
echo rand()."<br>";

// RAND(x, y) GERA UM NÚMERO ALEATÓRIO EM UM INTERVALO
echo rand(1,10)."<br>";
echo "================<br>";

// EXEMPLO DE SORTEIO
$lista = array("William", "Adriano", "Bete", "Karol", "Júnior");

$sorteado = rand(0,4);

echo "O sorteado foi: ". $lista[$sorteado];


