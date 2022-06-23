<?php 


    echo "Exercicio 06\n";

    echo "Digite sua nota > ";
    $nota1 = readline();

    echo "Digite sua nota > ";
    $nota2 = readline();

    echo "Digite sua nota > ";
    $nota3 = readline();

    echo "Digite sua nota > ";
    $nota4 = readline();

    $media;

    $media = $nota1 + $nota2 + $nota3 + $nota4;

    if($media >= 5){
        echo "Você foi aprovado, tirou $media";
    } else {
        echo "Você foi reprovado, tirou $media";
    }



?>