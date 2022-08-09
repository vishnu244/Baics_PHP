<?php

    $d = 0;
    $n=readline("Enter a number");
    
    for($i = 1; $i < ($n+1); $i++){
        $d += 1/$i;
        echo "1/$i + ";
    }
    echo "\n";
    echo "The Sum of $n Factors is : $d";

?>
