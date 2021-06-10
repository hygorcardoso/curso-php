<?php

    // Diferença entre aspas simples e duplas.a
    $nome = 'Hygor';
    $nome2 = "HYGOR";

    var_dump($nome);

    echo "</br>";

    var_dump($nome2);

    echo "</br> $nome + $nome2";  // Aspas duplas permite interpolação de variáveis.

    echo '</br> $nome + $nome2'; // Aspas simples não permite interpolação de variável. 

    echo "</br></br> <hr> </br>";

    //FunçÕes

    echo strtoupper($nome . "</br>"); // Transforma em maiusculo.

    echo strtolower($nome2 . "</br>"); // Transforma em minusculo.

    echo ucwords($nome . "</br>"); // Converte apenas a primeira letra de cada palavra em maiusculo.

    //Alterar letras por números;

    $nome = 'Hcode';

    $nome = str_replace("o", "0", $nome);

    echo $nome . "</br>";

    $nome = str_replace("e", "3", $nome);

    echo $nome . "</br>";

    //Encontrar posição

    $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore et porro delectus nulla, modi eligendi. Nisi tempore inventore quibusdam, totam quam illo laudantium cum ut magnam, earum ducimus dicta voluptates.";

    $palavra = "dolor";
    $q = strpos($texto, $palavra);
    echo $q . "</br>";

    //Obter apenas parte do texto de


    $frase = substr($texto, 0, $q); //texto, posição inicial, posição da primeira letra da palavra


    echo $frase . "</br>";

    $frase = substr($texto, 0, $q + 5); //texto com a última palavra inteira.

    echo $frase . "</br>";

    //Obter frase da palavra X em diante.


    $frase = substr($texto, $q + strlen($palavra), strlen($texto));

    echo $frase . "</br>";

?>