<?php 
    $nome = "Fulano";
    
    $numero = 1234;
    $flutuante = 1234.50;
    echo $nome;
    echo "<h2>$numero</h2>";
    echo"<br> $flutuante";
    //  var_dump($nome);
    $anoNascimento = 1990;

    //CamelCase;
    //Variável com número no nome

    /* Comentário que pode ser para bloco */
 
    $nome2 = "Tal";

    /* Um monte de 
       comentários
       */
      echo "<br/>";

    //Concatenando variáveis utiliza o Ponto " . "
   $nomecompleto = $nome . " " . $nome2;
   echo $nomecompleto;


    //Tipos de Dados = São 8 Tipos

    //Básicos Numero, String, Ponto Flutuante, Boleano

   $nome3 = "hcode" ;
   $site = 'www.hcode.com.br';
   $ano = 1990;
   $salario = 2550.50;

   $bloqueado = false;

   //Tipos Compostos Array e Objeto
   $frutas = array("abacaxi", "laranja", "manga");
   echo "<br/>";
   echo $frutas[0] . " " . $frutas[2];
   
   $nascimento = new DateTime();

   echo "<br/>";
   //var_dump($nascimento);

   //Tipos de Dados Especiais : Resource / Null
   
   $arquivo = fopen("3variaveis.php","r");
   echo "<br/>";

   var_dump($arquivo);
   
   echo "<br/>";

   $nulo = null;  //Não existe
   $vazio = "";   //Está vazio





    //Para usar finalizar o programa e parar a execução
    //exit;

    //Limpar variáveis ou destruir a variável na memória
    unset($nome1, $nome2);

    
    //Verifica se a variável existe
    if (isset($nome1)){
        echo $nome1;
    }


    //Variváveis pre-definidas ou arrays super-globais = são acessíveis de qualquer ponto do PHP
    echo "</br>";


    $nome = $_GET["a"];
    
    /*
        Para executar esse teste : http: //localhost/php7/3variaveis.php?a=123

    */
    var_dump($nome);
    echo "</br>";
    echo $nome;

    //Vou converter para inteiro.
    
    echo "</br>";

    $nome = (int) $_GET["a"];
    var_dump($nome);

    //Para mandar mais de uma informação via GET use o &
    /*
        Para executar esse teste : http: //localhost/php7/3variaveis.php?a=123&b=456

    Dentro da URL = Protocolo + domínio + path (caminho ou rota) + Query String( Parâmetros ) + hash (Talvez)
        */
    echo "</br>";

    $nome2 = $_GET["b"];
    var_dump($nome2);

    //Pegando o IP, mas o $_SERVER pega variáveis do ambiente (servidor ou cliente)

    $ip = $_SERVER["REMOTE_ADDR"];
    
    echo "</br>" . " " .  $ip;
    $scp = $_SERVER["SCRIPT_NAME"];
    echo "</br>" . " " .  $scp;

?>
