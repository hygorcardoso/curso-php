<?php

    //Variável superglobal

    $nome = (int)$_GET["a"]; // Obter o valor passado explicitamente na URL.

    var_dump($nome);

    echo("</br>");

    //Obter ip do usuário

    $ip = $_SERVER["REMOTE_ADDR"];

     echo $ip;

     echo("</br>");

     //Obter o nome do arquivo;

     $arquivo = $_SERVER["SCRIPT_NAME"];

     echo $arquivo;

?>