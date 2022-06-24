<?php


    echo "Exercicio 09\n";
 
    echo "Digite um numero inteiro";
    $numero01 = readline();

    echo "Digite um numero inteiro";
    $numero02 = readline();

    echo "Digite um numero inteiro";
    $numero03 = readline();


    if($numero01 > $numero02 && $numero01 > $numero03)
    {
       echo "O maior valor é $numero1";
    } elseif($numero02 > $numero01 && $numero02 > $numero03) {
       echo "O maior valor é $numero02";
    } elseif($numero03 > $numero01 && $numero03 > $numero02){
       echo "O maior valor é $numero03";
    } else {
        echo "Os numeros são iguais";
    }
    

?>