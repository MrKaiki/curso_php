<?php

    echo "Exercicio 08\n";


    echo "Informe ano de nascimento>: ";
    $anonascimento = readline();

    $idade;
    $ano = 2022;

    $idade = ($ano - $anonascimento);

    echo "Sua idade é $idade anos!\n";

    if($idade >= 16)
    {
        echo "Você ja pode votar\n";
    } else {
        echo "Você não pode votar";
    }

    if($idade >= 18)
    {
        echo "Você ja pode tirar sua habilitação";
    } else {
        echo "Você não tem idade para tirar sua habilitação";
    }




?>