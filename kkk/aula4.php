<?php
// trabalhar com operadores de comparação
/*
    == igual
    != diferente
    <> = diferente
    < menor
    > maior
    <= menor igual 
    >= maior igual
    === identico
*/

$numero01 = 10;
$numero02 = "10";
$logico = null;
 // igual
    echo "Comp. Igual"; 
    $logico = $numero01 == $numero02;
    echo "<p>". (int) $logico."<p>";
    echo "***************";

 // diferente
    echo "Comp. Diferente"; 
    $logico = $numero01 != $numero02;
    echo "<p>". (int) $logico."<p>";
    echo "***************";
 
 // identico
 echo "Comp. Identico"; 
 $logico = $numero01 === $numero02;
 echo "<p>". (int) $logico."<p>";
 echo "***************";

 // maior 
 echo "Comp. Maior "; 
 $logico = $numero01 > $numero02;
 echo "<p>". (int) $logico."<p>";
 echo "***************";



?>