<?php
    $name = $_GET['name'];
    $a = $_GET['a'];
    $n1 = $_GET['n1'];
    

    echo "Nombre aprendiz =" .$name;
    echo "<br>";
    echo "<br>";
    echo "Asignatura =" .$a;
    echo "<br>";
    echo "<br>";
    
    if($n1>7){
        echo "Aprobado";
    }
    if($n1<7){
        echo "Reprobado";
    }


  
?>
