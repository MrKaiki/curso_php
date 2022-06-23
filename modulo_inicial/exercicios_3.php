<?php 

    echo "Exercicio 2\n";

    echo "Digite seu sexo:> ";
    $sexo = readline();
    echo "Digite seu nome:> ";
    $nome = readline();


    if($sexo == "Masculino"){
        echo "Ilmo sr.";
    } elseif($sexo == "Feminino"){
        echo "Ilma sra.";
    } 

    echo "seu nome é $nome";
    

    

?>