<?php
    //Escopo de variável
    $nome = "Hygor";

    // function teste() { Não funciona, pois esta dentro deste escopo;
    //     echo $nome;
    // }

    function teste2() {
        global $nome; //Faz com que a variável anterior seja utilizada dentro desta função.
        echo("Meu nome é " . $nome);
    }

    // teste();

    teste2();
?>