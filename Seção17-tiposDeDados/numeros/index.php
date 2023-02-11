<?php

if (is_int(5)){
  echo "É um número inteiro.<br>";
}

if (is_int("Não é um inteiro.")){
  echo "É um número inteiro.<br>";
}

$a = 10;

if (is_int($a)){
  echo "é um inteiro <br> ";
}

// float

//echo 2 + 2.2;
$decimal = 2.3;

if(is_float($decimal)){
  echo "é um número decimal <br>";
}