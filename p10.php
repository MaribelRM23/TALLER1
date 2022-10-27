<?php
    $p = $_GET['p'];
    if($p>20000){
        $s= $p - ($p * 0.20);
        echo "Tu valor de compra es de:".$p;
        echo "<br>" ;
        echo "<br>" ;
        echo "Tienes un descuento del 20%";
        echo "<br>" ;
        echo "<br>" ;
        echo "Valor final:".$s;

    }else{$p<20000;
    
    echo" Tu valor de compra es:".$p;
    echo "<br>" ;
    echo "<br>" ;

    echo"No tienes descuento";
}

?>
