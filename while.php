<?php
    echo "<h2>While</h2>";
    $condicao = true;
    while ($condicao) {
        $numero = rand(1,10);
        if ($numero ==3){
            echo "Três  ";
            $condicao=false;
        }
        echo "$numero <br>";
    }

?>
