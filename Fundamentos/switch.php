<!-- FUNCIONAMENTO BÁSICO DE UM SWITCH -->

<?php

$x = 3;

switch ($x) {
  case 0:
    echo "O X é Zero";
    break;

  case 1:
    echo "o X é Um";
    break;

  case 2:
    echo "o X é Dois";
    break;


  case 3:
  case 4:
  case 5:
    echo "O X é 3, 4, ou 5.";
    break;

  default:
    echo "O X não é nada";
    break;
}
