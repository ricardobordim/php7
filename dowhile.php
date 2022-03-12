<?php
    echo "<h2>Do while </h2>";
    $total = 1000;
    $desconto = 0.9;

    do {
        $total *= $desconto;
    } while ($total > 100);
    echo "Total:= $total";

?>
