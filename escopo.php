<?php

    echo " <h1> Escopo</h1> </br>";

    //Escopo Local
    $nome = "Fulano";

    function teste(){
        //Não existe devido ao escopo
        //paga ouvir globalmente o $nome
        global $nome;
        echo $nome;
    }
    function teste2(){
        $nome = "joao";
        echo $nome .  " Agorao no teste 2";

    }
    teste();
    echo "</br>";
    teste2();
    echo "</br>";
    
    
    function setMessage(){

        global $message;
        $message = "Ola Mundo";
    }
    setMessage();
    echo $message;


?>
