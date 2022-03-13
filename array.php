<?php

    echo "<h2>Arrays</h2>";
    // Array Uma Dimensão ou Vetor
    $frutas = array("maça", "laranja", "Uva");
    echo $frutas[2];
    echo "<br>";
    
    // Exibe um array e sua estrutura;
    print_r($frutas);


    // Array bidimensional
    $carros[0][0] = "GM";
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";    

    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Eco Sport";

    echo "<br>";
    print_r($carros[0][3]);

    echo "<br>";
    echo end($carros[1]);

    $pessoas = array();

    // Incluindo dados no array após ter sido criado;

    array_push($pessoas,array(
            'nome' => 'Pedro',
            'idade' => 25

    ));

   array_push($pessoas,array(
            'nome' => 'Paulo',
            'idade' => 30

    ));

    echo "<br>";
    print_r($pessoas);
    print_r($pessoas[0]);    
    print_r($pessoas[0]['nome']);      
    
    
    $caes = array();

    // Incluindo dados no array após ter sido criado;

    array_push($caes,array('Cadela Preta',25));

   array_push($caes,array('Cachorrinho',30 ));

    echo "<br>";
    print_r($caes);
    print_r($caes[0]);    
    print_r($caes[0][0]);          

?>
