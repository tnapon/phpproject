<?php
    include "Calculator.php";

    $cal = new Calculator();
   
   echo "4*1 = ".$cal->multiply(4,1)."</br>";
   echo "4+1 = ".$cal->add(4,1)."</br>";
   echo "4-1 = ".$cal->subtract(4,1)."</br>";
    
?>