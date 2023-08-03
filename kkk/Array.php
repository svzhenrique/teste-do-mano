<?php
// Array/ Vetor/ Matriz/ Lista
/*
existe dois tipos de localização de elementos de valores no array, atraves de indece(posição numerica)
e associativo (posição por texto)
*/
$nome = "Luis";
        //          0               1                2         3
$nomes = array("Luís Henrique", "Esther Biscaino", "Luís", "Esther");

echo "<ol>";
        echo "<li>" . $nomes[0] . "</li>";
        echo "<li>" . $nomes[1] . "</li>";
        echo "<li>" . $nomes[2] . "</li>";
        echo "<li>" . $nomes[3] . "</li>";
echo "</ol>";

$nomes[4] = "Paulo";
echo "<ul>";
    echo "<li>" . $nomes[0] . "</li>";
    echo "<li>" . $nomes[1] . "</li>";
    echo "<li>" . $nomes[2] . "</li>";
    echo "<li>" . $nomes[3] . "</li>";
    echo "<li>" . $nomes[4] . "</li>";
echo "</ul>";

echo "<hr>";
echo "<p> saber quantos elemnetos tem array nomes:" . count($nomes) . "</p>";

echo "<hr>";
for($indice = 0; $indice <= count($nomes)-1; $indice++){
    echo "<p>" . $nomes[$indice] . "</p>";
}
echo"<hr>";
$indice = 0;
while($indice <= count($nomes) - 1 ){
    echo "<p>" . $nomes[$indice] . "</p>";
    $indice++;
}

foreach ($nomes as $key => $value) {
    echo "<p>" . $key . "</p>";
}
?>