<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP 2</title>
</head>
<body>
    <?php
        // estarei misturando php com html
        $nome = "Luis";// atribuindo o texto a variavel
        $idade = 16;// tipo de daddos numéricos
        $salario = 50.0000;//float ou double
        $bloqueado = true; //tipo de dados boleano(true e false); 
        
        //tipo de saida
        echo "Nome: " . $nome;

    ?>
    <br>
    <?php
        print("<p>Idade: " . $idade . "</p>");
        echo("<p>Salario: " . $salario . "</p>");
        print_r("<p>bloqueado: " . $bloqueado . "</p>");
    ?>
</body>
</html>