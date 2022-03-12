<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type ="text" name="nome">
        <input type ="date" name="nascimento">
        <input type ="submit" value="ok">
    </form>
    
    <!--  Foreach é muito usado em arrays ou coleções ($_GET)  -->
    
    <?php
        if (isset($_GET))
        {
            foreach ($_GET as $key => $value) {
                echo "Nome do Campo: " . $key . "<br>";
                echo "Valor do Campo: " . $value;
                echo "<hr>";
            }    


        }
    ?>
    
</body>
</html>
