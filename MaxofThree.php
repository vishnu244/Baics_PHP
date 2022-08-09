<?php

    $Number1=readline("Enter a Value 1 : ");
    $Number2=readline("Enter a Value 2 : ");
    $Number3=readline("Enter a Value 3 : ");
    if($Number1>$Number2 && $Number1>$Number3){
        echo  "$Number1 is the Largest Value";
    }
    elseif($Number2>$Number1 && $Number2>$Number3){
        echo  "$Number2 is the Largest Value";
    }
    else
        echo  "$Number3 is the Largest Value";

?>
