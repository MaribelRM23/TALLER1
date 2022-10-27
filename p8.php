<?php
    $s = $_GET['s'];
    $e = $_GET['e'];
  
    if($s=="M" or $s=="m" or $s=="masculino"){
        if($e>=63){
            echo "usted se puede jubilar";
        }else{
            echo "usted no se puede jubilar";
        }
    }elseif($s=="F" or $s=="f" or $s=="femenino"){
        if($e>54){
            echo "usted se puede jubilar";
        }else{
            echo "usted no se puede jubilar";
        }
    }

?>
