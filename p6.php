<?php
    $v = $_GET['v'];
    $p = $_GET['p'];
    $t = $_GET['t'];
    
    $m = $v * 2000;
    $m2 = $p * 5000;
    $m3 = $t * 500;
    $solucion = $m + $m2 + $m3;
    echo "Volante =" .$m;
    echo "<br>";
    echo "<br>";
    echo "Poster =" .$m2;
    echo "<br>";
    echo "<br>";
    echo "Tarjeta de presentación=" .$m3;
    echo "<br>";
    echo "<br>";
    echo "Pago total =" .$solucion;
?>
