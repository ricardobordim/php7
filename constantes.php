<?php

    echo "<h2>Constantes</h2>";

    // Geralmente são todas maiusculas e podem ser case sensitive ou não.
    //São criadas com a função define
    define("SERVIDOR","127.0.0.1");
    echo SERVIDOR;
    echo "<br>";
    //PHP 7- ARRAY DE CONSTANTES
    // Constante de array - exemplo, servidor, user, senha, banco
    define("BANCO_DE_DADOS",['127.0.0.1','root','password','test']);
    print_r(BANCO_DE_DADOS);

    // Constantes Default;
    echo "<br>";

    echo PHP_VERSION;
    echo "<br>";
    
    echo DIRECTORY_SEPARATOR;
   echo "<br>";
    
    echo PHP_OS;    
?>

