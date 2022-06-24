<?php

    echo "insira um valor";
    $numero01 = readline();
    echo "insira um segundo valor";
    $numero02 = readline();

    echo "1 para adição, dois para 2 subtração!";
    $escolha = readline();


    switch ($escolha) {
        case 1:
            echo $numero01+$numero02;
            break;
        case 2:
            echo $numero01-$numero02;
            break;
        case 3:
            echo $numero01*$numero02;
            break;
        case 4: {

            if($numero02==0)
            echo "nao valido";
            echo $numero01/$numero02; 
            
            break;
        }
        default:
            echo "nem uma operaçao definida";
            break;
    }


?>