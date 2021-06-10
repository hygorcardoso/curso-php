<?php 
    //Operadores no PHP.

    //Operador de atribuição

    $nome = "Hygor";

    echo $nome . " Cardoso </br>";

    $nome .= " Cardoso </br>"; //Aqui o . irá atribuir ao final da variável o texto a variável.
    echo $nome;

    //Operadores atribuição com cálculos.

    $valor = 0;

    $valor+= 25;

    $valor+= 100;

    echo $valor . "</br> </br>";

    echo "<hr></br>";

    //Para subtração, multiplicação e divisão substituição o sinal "+", pelo devido sinal da operação.
    
    //Operadores aritmeticos.

    $a = 10;
    $b = 2;

    echo($a + $b . "</br>");

    echo($a - $b . "</br>");

    echo($a / $b . "</br>");

    echo($a % $b . "</br>"); // Modulo

    echo($a ** $b . "</br>"); // Exponenciação

    // Operadores de comparação

    echo"</br> <hr> </br>";

    //Maior

    var_dump($a > $b);

    echo "</br>";

    var_dump($a < $b);

    echo "</br></br> <hr> </br>";

    var_dump($a == $b); // Para comparação de valores, é necessário 2 iguais.

    echo "</br> <hr> </br>";

    $a = 55.00;
    $b = 55;

    var_dump($a == $b);
    echo "</br>";
    var_dump($a === $b); // Comparação de identidade;

    echo "</br></br> <hr> </br>";
    
    var_dump($a != $b);
    echo "</br>";
    var_dump($a !== $b); // Comparação de identidade;

    //spaceship

    $a = 50;
    $b = 35;

    var_dump($a <=> $b); // Presenta 1/-1, caso A seja maior/menos que B, caso contrário, retorna 0;

    echo "</br></br> <hr> </br>";
    //coalese

    $a = NULL;
    $b = NULL;
    $c = 10;

    echo $a ?? $b ?? $c;

    echo "</br></br> <hr> </br>";

    //Operadores incrementais e descrementais;

    $a = 10;

    echo $a . "</br>";

    $a++;
    
    echo $a . "</br>";

    $a--;

    echo $a . "</br>";

    echo "</br> <hr> </br>";
    
?>