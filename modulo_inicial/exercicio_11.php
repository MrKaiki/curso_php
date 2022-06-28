<?php
    $professor1 = 10.80;
    $professor2 = 10.10;

    echo "informe sua quantidade de horas a aula";

    $horas = readline();

    $salario1 = ($professor1*$horas);
    $salario2 = ($professor2*$horas);

    echo $salario1, "este e o salario do professor 1 \n";
    echo $salario2, "este e o salario do professor 2 \n";

    if($salario1>$salario2)
    {
        echo $salario1,"este e o maior salario\n";
    }
    else
    {
        echo $salario2,"este e o mairo salario\n";
    }
?>