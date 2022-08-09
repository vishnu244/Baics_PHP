<?php

$A = readline("Enter a Value of A : ");
$B = readline("Enter a Value of B : ");

echo "Before swapping :\n A = ".$A." and B = " .$B."\n" ;

$A = $A+$B; 
$B = $A-$B;   
$A = $A-$B;  

echo "After swapping :\n A = ".$A." and B = " .$B;

?>
