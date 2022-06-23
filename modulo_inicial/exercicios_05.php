<?php 

  echo "Exercicio 05\n";

  echo "Digite sua altura:> ";
  $altura = readline();

  echo "Digite seu sexo:> ";
  $sexo = readline();

  $alturapeso = 0.0;


  if($sexo == "Masculino"){
    $alturapeso += 72.7*$altura-58;
    echo "Seu peso ideal é $alturapeso";
  } elseif($sexo == "Feminino"){
    $alturapeso = 62.1*$altura-44.7;
    echo "Seu peso ideal é $alturapeso";
  } 

?>