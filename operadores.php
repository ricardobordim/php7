<?php
    echo "<h1>Operadores</h1> </br>";

//Operadores de Atribuição

$nome = "Fulano"; // Atribuição
$sobrenome = "de Tal";
echo $nome . " " . $sobrenome; //Concatenação

$nome .= " Junior"; // atribuição com concatenação
echo "</br>";
echo $nome;

$valorTotal = 0;
$valorTotal +=100;
$valorTotal +=25;
$valorTotal -=5;

echo "</br>";
echo $valorTotal;

$valorTotal *=2;
echo "</br>";
echo $valorTotal;


//Operadores Aritmético + - * / % **
$a =10;
$b =2;
echo "<br>";
echo $a+$b;
echo "<br>";
echo $a-$b;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $a/$b;
echo "<br>";
echo $a % $b; // Módulo ou Resto
echo "<br>";
echo $a ** $b; // Exponencial 2


//Operadores de Comparação

unset($a,$b);
echo "<br>";

$a=30;
$b=55;
var_dump($a>$b);
echo "<br>";
var_dump($a<$b);

echo "<br>";
var_dump($a==$b);
$a = 55;
echo "<br>" . "Testando apos serem valores iguais com mesmo tipo" ;
var_dump($a == $b);
echo "<br>";
$a = 55.0;
echo "<br>" . "Testando apos serem valores iguais com tipo diferente <br>" ;
var_dump($a == $b);
echo "<br>" . "Testando para saber se valores e tipos são identicos<br>" ;
var_dump($a===$b);
echo "<br>" . "Testando para saber se valores<br>";
var_dump($a != $b);
echo "<br>" . "Testando para saber se valores e tipo de dados<br>";
var_dump($a !== $b);

unset($a,$b);
//Operador Spaceship - PHP 7
$a = 50;
$b = 35;
echo "<br>";
var_dump($a <=> $b); // Se a > = 1; 0; se b > -1;

//Operador de Nulo (PHP 7)
unset($a, $b);

$a = NULL;
$b = NULL;
$c = 10;
echo $a ?? $b ?? $c;  //Mostra para mim a senão for nulo, senão b se não for nulo, senão C;

//Operadores de incremento e decremento

unset($a,$b);
echo "<br> <h2>Operadores de Incremento/Decremento </h2> <br>";
$a=10;

echo $a++;

echo "<br>" . " " . $a;

echo "<br>";

echo ++$a . " " . --$a . " " . --$a;

echo "<br> <h2>Precedência de Operadores </h2> ";
$resultado = 10 + 3 /2;
echo $resultado;

echo "<br> <h2>OPeradores Lógicos (&& e, || ou </h2> ";

$result = (10+3) /2 > 5 && 10 + 5 <3;
echo "<br>";
var_dump($result);

$result = (10 + 3) / 2 > 5 || 10 + 5 < 3;
echo "<br>";
var_dump($result);


?>
