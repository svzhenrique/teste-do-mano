<?php
    /*
    estare4mos trabalhando com função
    */

    // 1º forma de declaração 'nomeada', sem argumento
    $numero01 = 10;
    $numero02 = 30;
    Adicao();

    function Adicao(){
        global $numero01, $numero02;
        $resultado = $numero01 + $numero02;
        echo "<br><br>Adição:" . $resultado;
    }

    // chamar a função
    Adicao();

    //                  10      30
    function Adicao_( $par01, $par2, $x ){
        //  40         10      30
        $resultado = $par01 + $par2 + $x;
        //                      40
        echo "<br><br>Adição:" . $resultado;
    }
    Adicao_(200, 1000, 1); // valor estatico
    //          10          30
    Adicao_($numero01, $numero02, 4);//dinamico que pode mudar na variavel

    // criar subtração, 4 argumentos
    // passar 3 possiveis valores
   
    function Subtracao( $arg01, $arg02, $arg03, $arg04){
       
        $resultado = $arg01 - $arg02 - $arg03 - $arg04;
         
        echo "<br><br>Subtração:" . $resultado;
    }
    $v = array(200,300,500,100);
    $n1 = 200;
    $n2 = 300;
    $n3 = 500;
    $n4 = 100;
    Subtracao(200, 1000, 3000, 200);
    Subtracao($v[0], $v[1], $v[2], $v[3]);
    
    Subtracao($n1, $n2, $n3, $n4);


    // função com argumento e palavra reservada

    //c = 2 x 3.14 x raio

    function Circuferencia($raio){
        $c = 2 * 3.14 * $raio;
        // variavel, array
        return $c;

    }

    $valor = Circuferencia(10);
    
    echo '<br><br>O Comprimento é: ' . $valor;
    $valor = 40;
    echo "<br><br>O Comprimento é: " . $valor;
    
     echo $valor = Circuferencia(60);

?>
