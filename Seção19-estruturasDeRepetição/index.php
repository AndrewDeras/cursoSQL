<?php

  $count = 0;

  while ($count <= 10) {
    echo "$count <br>";
    if ($count === 5){
      echo 'terminando o loop <br>';
      break;
    }
    $count = $count + 1;
  }

  // loop aninhado

  echo "<h1>Loop aninhado</h1>";
  $i = 1;

  while ($i <= 6) {
    echo "Loop externo $i <br>";

    // loop interno
    $j = 1;
    while ($j <= 3) {
      echo "Loop interno $j <br>";
      $j ++;
    }
    $i ++;
  }

  //utilizando o continue
  echo "<h1>utilizando o continue</h1>";

  $q = 10;
  while ($q > 0) {

    if($q == 5 || $q == 7){
      echo "Pulou o loop nº $q <br>";
      $q --;
      continue;
    }

    echo "Loop n° $q <br>";
    
    $q --;
  }

  // for

  echo "<h1>FOR</h1>";

  for ($i=0; $i < 5; $i++) { 
    echo "$i  <br>";
  }

  //foreach
  echo "<h1>For Each</h1>";

  $nomes = ['Andrew', 'Lindsay', 'Jeff'];

  foreach ($nomes as $nome) {
    echo "O nome do indice atual é $nome <br>";
  }