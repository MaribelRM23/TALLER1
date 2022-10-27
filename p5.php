<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    if($n1>$n2){
        echo $n1. " Es mayor:";
    }
    else{
        echo $n2. " Es mayor";}
    
    echo "<br>";
    echo "<br>";

    $resta = $n1-$n2 ;
    echo "Diferencia de edad =" .$resta;
  
?>
