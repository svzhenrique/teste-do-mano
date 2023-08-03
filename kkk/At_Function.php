<?php
/*
    Cria uma Função com nome AumentoSalario em que tem dois argumentos em que
    e dado a porcentagem de aumento, tipo de cargo, segue a lista dos salario
    base dos cragos: 
    -> Desenvolvedor Front-End: R$ 3.500,00
    -> Desenvolvedor Back-End: R$ 6.000,00
    -> Gerenciador de Projeto: R$ 10.000,00
    -> CEO R$ 15.000,00
    -> Estagiario R$ 699,00

    OBS: A FUNÇÂO TEM QUE USAR RETURN

*/


    function AumentoSalario($porc, $cargo,){
        //salario  ((salario * porcentagem)/100)
        
        if($cargo == "Desenvolvedor Front-End"){
            $salario = ((3500 * $porc)/100);
            $salariototal = $salario + 3500;
            echo"Seu salário de Front com aumento é: " . $salariototal;

        }else if($cargo == "Desenvolvedor Back-End"){
            $salario = ((6000 * $porc)/100);
            $salariototal = $salario + 6000;
            echo"Seu salário de Back com aumento é: " . $salariototaltoal;

        }else if($cargo == "Gerenciador de Projeto"){
            $salario = ((10000 * $porc)/100);
            $salariototal = $salario + 10000;
            echo"Seu salário de Gerenciador com aumento é: " . $salariototal;

        }else if($cargo == "CEO"){
            $salario = ((15000 * $porc)/100);
            $salariototal = $salario + 15000;
            echo"Seu salário de CEO com aumento é: " . $salariototal;

        }else{
            $salario = ((699 * $porc)/100);
            $salariototal = $salario + 699;
            echo"Seu salário de Estagiario com aumento é: " . $salariototal;
        }

        return $salario;
    }
    AumentoSalario(20, "CEO");


?>