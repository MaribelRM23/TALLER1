<?php
    $name = $_GET['name'];
    $asignatura = $_GET['asignatura'];
    $r1 = $_GET['r1'];
    $r2 = $_GET['r2'];
    $r3 = $_GET['r3'];
    $promedio = ($r1 + $r2 + $r3)/3 ;
    echo "Estudiante:" .$name;
    echo "<br>";
    echo "<br>";
    echo "Asignatura:" .$asignatura;
    echo "<br>";
    echo "<br>";
    echo "El promedio es =" .$promedio;
   


?>