<?php
    echo "<h2>JSON - JAVASCRIPT OBJECT NOTATION</h2>";

    $pessoas = array();

    // Incluindo dados no array após ter sido criado;

    array_push($pessoas, array(
        'nome' => 'Pedro',
        'idade' => 25,

    ));

    array_push($pessoas, array(
        'nome' => '`Paulo',
        'idade' => 30,

    ));


    echo "<br>";
    // echo json_encode($pessoas);

    echo "<br>";
    // $json = '[{"nome":"Pedro","idade":25},{"nome":"Paulo","idade":30}]';
    $json = json_encode($pessoas);
    $data = json_decode($json,true);
    var_dump($data);

    echo "<br>";


    print_r($data);
?>
