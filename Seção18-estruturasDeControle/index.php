<?php

  //if (condition) {
    # code...}

  if (5>2) {
    echo "deu certo entrou no if <br>";
  }

  // operador logico

  if(10 === 10 && 9 > 5){
    echo "deu certo entrou no if 2 <br>";
  }

  // utilizando variaveis

  $a = 5;
  $b = 6;
  $c = "deu certo entrou no if 3 <br>";

  if ($a < $b) {
    echo $c;
  }

  // else

  if (5 === 2) {
    echo "Dentro do if <br>";
  } else{
    echo "Dentro do else <br>";
  }

  // if aninhado

  if (10 > 2) {
    echo 'entrou no primeiro if <br>';
    if ('teste' == 'teste') {
      echo 'entrou no segundo if <br>';
    }
  }

  // else if 

  if (10 < 5) {
    echo 'entrou no if <br>';
  } else if (10 > 4){
    echo 'entrou no else if <br>';
  }

  //switch
  $x = 210;

  switch ($x) {
    case 0:
      echo 'x é igual a 0 <br>';
      break;
    case 1:
      echo 'x é igual a 1 <br>';
      break;
    default:
      echo 'x não é igual a nenhum dos valores mencionados <br>';
  }