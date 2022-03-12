<?php
    echo "<h2>For Each</h2>";

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio",
                   "Junho","Julho", "Agosto", "Setembro", "Outubro",
                   "Novembro", "Dezembro");
foreach ($meses as $mes ) {
    echo "<br> o Mês é $mes";
}

foreach ($meses as $index =>$mes) {
    echo "<br>Indice $index <br>";
    echo "o Mês é $mes <br>";
}

?>
