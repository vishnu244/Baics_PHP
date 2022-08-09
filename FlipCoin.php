<?php
$Heads = 0;
$Tails = 0 ;
$Flip = 0;
$input = readline("Enter how many times you want to flip the coin: ");

    for ($i=0; $i < $input ; $i++) 
    { 
        if (rand(0,1) < 0.5)
        {
            $Tails++; 
        }
        else
        {
            $Heads++;
        }
        $Flip++;
    }
    //Calculating heads and tails percentage 
    $HeadPercentage = ($Heads * 100)/$Flip;
    $TailPercentage = 100 - $HeadPercentage;

    echo "Number of Heads are: ".$Heads."\n";
    echo "Number of Tails are: ".$Tails."\n";
    echo "Head percentage is: ".$HeadPercentage."\n";
    echo "Tail percentage is: ".$TailPercentage
?>

