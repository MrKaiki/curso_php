<?php 

  echo "Exercicio 05\n";

  echo "Digite sua altura";
  $altura = readline();

  echo "Digite seu sexo";
  $sexo = readline();

  $alturaxpeso = 0.0;


  if($sexo == "Masculino"){
    $alturaxpeso += ((72.7*$altura)-58);
    echo "Seu peso ideal é $alturaxpeso";
  } elseif($sexo == "Feminino"){
    $alturaxpeso = ((62.1*$altura)-44.7);
    echo "Seu peso ideal é $alturaxpeso";
  } 

?>