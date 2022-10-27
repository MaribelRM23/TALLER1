<?php
    $n = $_GET['n'];
    $a = $_GET['a'];
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];

    $ns1 = $n1 * 0.3;
    $ns2 = $n2 * 0.3;
    $ns3 = $n3 * 0.4;

    $suma = ($ns1 + $ns2 + $ns3)/3 ;



    if($suma>=4){
        echo "Aprobado";
    }
    if($suma<4){
        echo "Reprobado";
    }

    echo "<br>";
    echo "<br>";
    
    echo "Nota final =" .$suma;
  

?>