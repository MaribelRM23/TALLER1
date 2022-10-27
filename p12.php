<?php
    $v = $_GET['v'];
    if($v<500){
        $v1= $v + ($v * 0.2);
        echo "Valor mensual con tasa de interes del 2% ";
        echo "<br>";
        echo "<br>";
        echo $v1;

    }elseif($v>=500 && $v<1500){
        $v2 = $v + ($v *0.45);
        echo "Valor mensual con tasa de interes del 4.5%" ;
        echo "<br>";
        echo "<br>";
        echo $v2;
    }
    else{
    $v4 = $v + ($v * 0.7);
    echo"Valor mensual con tasa de interes del 7%";
    echo "<br>";
    echo "<br>";
    echo $v4;
    }

?>
