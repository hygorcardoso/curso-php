<?php

    // Recomendado utilizar primeira letra minuscula, e as primeiras letra do resto da palavra maiuscula
    $anoNascimento = '1999'; 
    $nomeCompleto = 'Hygor Cardoso';

    // Números no nome de variável somente no meio ou no fim

    $nome1 = "João";

    //Caracteres especiais somente o underline;

    $nome_completo = '</br>Hygor';

    echo $nome_completo;

    //limpar váriaveis

    // unset($nome_completo, $nome1);

    //Concatenação

    $sobrenome = 'Cardoso';

    echo($nome_completo . ' ' . $sobrenome);

    //Tipos de dados simples

    // String

    $nome = "Hygor"; // Pode ser utilizado aspas simples no lugar da dupla;

    //Inteiro

    $ano = 1999;

    //Float

    $salario = 5500.99;

    //bool

    $bloqueado = false;

    echo ("</br></br></br>");

    //Tipos compostos

    //array

    $frutas = array("Abacaxi", "Laranja", "Manga");

    echo $frutas[2] . "</br>";

    //Objeto -> sempre utiliza a palavra new junto.

    $nascimento = new DateTime();

    // var_dump($nascimento);

    //Tipos especiais

    $arquivo = fopen("exercicio_02.php", "r");

    var_dump($arquivo);

    //nulo 

    $nulo = NULL; 

?>
