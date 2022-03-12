<?php

echo "<h2>Estruturas Condicionais</h2>";
$qualASuaIdade = 15;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor){
    echo "Adulto";
} else {
    echo "Melhor Idade";
}
echo "<br>";

//Operador Ternário

echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade" : "Maior de Idade";


?>
