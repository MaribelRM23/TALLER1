<?php
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    $p3 = $_GET['p3'];
    $m = $p1 * 3;
    $m2 = $p2 * 0;
    $m3 = $p3 * 1;
    $solucion = $m + $m2 + $m3;
    echo "Total de puntos es =" .$solucion;

?>