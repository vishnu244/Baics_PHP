<?php

    $X=readline("Enter the Year : ");

    if ((($X % 4 == 0) && ($X % 100 != 0)) || ($X % 400 == 0))
    {
        echo $X." is a Leap Year";
    }
    else
    {
        echo $X. " is not a leap year";
    }
      
?>
