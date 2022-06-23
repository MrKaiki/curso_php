<?php


    echo "Exercicio 07\n";

    echo "Digite sua nota > ";
    $nota1 = readline();

    echo "Digite sua nota > ";
    $nota2 = readline();

    echo "Digite sua nota > ";
    $nota3 = readline();

    echo "Digite sua nota > ";
    $nota4 = readline();

    $media;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media >= 7){
        echo "Você foi aprovado, tirou $media !";
    } else {


        echo "Você foi reprovado, tirou $media, você tem mais uma chance! \n";

        echo "Digite o valor da sua nova nota:> ";
        $novanota = readline();

        $novamedia;

        $novamedia = ($novanota + $media) / 2;

        if($novamedia >= 5){
            echo "Você foi aprovado, tirou $novamedia !";
        } else {
            echo "Você foi reprovado, tirou $novamedia !";
        }

    }
    


?>