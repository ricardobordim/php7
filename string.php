<?php
echo "<h2>Strings</h2>";

$nome = "Fulano";
$sobrenome = 'de Tal';

var_dump($nome,$sobrenome);
echo "<br>";

//Interpolação de variáveis

echo "Olá $nome $sobrenome";
echo "<br>";

echo 'Ola $nome';
echo "<br>";
$nomeCompleto = $nome . ' ' .$sobrenome;
echo strtoupper($nomeCompleto);
echo "<br>";
echo strtolower($nomeCompleto);
echo "<br>";
echo ucwords($nomeCompleto);
echo "<br>";
echo ucfirst($nomeCompleto);

echo "<br>";
$nomeCompleto = str_replace("Fulano","Beltrano",$nomeCompleto );
echo $nomeCompleto;

echo "<br>";
$frase = "A Repetição é a mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, $palavra);
$texto = substr($frase,0,$q);
echo $texto;
echo "<br>";
echo "Qual a posicão $q ";
$texto = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>  $texto";

?>
