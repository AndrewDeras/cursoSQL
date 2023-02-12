<?php

  class Pessoa {

    function falar(){
      echo "Olá pessoal.";
    }
  }

  $andrew = new Pessoa();
  
  $andrew ->nome = "Andrew";

  echo $andrew->nome;
  echo "<br>";
  echo $andrew->falar();

