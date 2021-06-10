<?php

    // include "include/teste.php"; //Tenta incluir, caso não consiga, ele apresenta um aviso e continua a execução.
    require "include/teste.php"; //Obriga a inclusão do arquivo, caso o mesmo não exista, ele apresenta um erro falta, e para a execução.
    require_once "include/teste.php"; //Mesma função do require, porém caso seja feito 2 chamadas, ele ignora a segunda.

    $resultado = somar(10, 20);

    echo $resultado;
?>