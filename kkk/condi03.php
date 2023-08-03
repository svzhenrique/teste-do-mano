<?php
    $numero01 = 10;
    $numero02 = 30;
    $resultado = "";
    $operador = "+";
    switch($operador){
        case "+":
            $resultado = $numero01 + $numero02;
            break;
        case "-":
                $resultado = $numero01 - $numero02;
            break;
        case "*":
           $resultado = $numero01 * $numero02;
            break;
        case "/":
            $resultado = $numero01 / $numero02;
            break;
        default:
            echo"Somente os op. básico";
        break;
        
    }
    echo $resultado;
?>