<?php 

session_start();
// echo "Welcome".$_SESSION['username']."<br>";
// echo "your favourite color is ".$_SESSION['favcolor']."<br>";
// echo "your favourite food is ".$_SESSION['favfood']."<br>";
if(isset($_SESSION['username']))
{
    echo "Welcome".$_SESSION['username']."<br>";
echo "your favourite color is ".$_SESSION['favcolor']."<br>";
echo "your favourite food is ".$_SESSION['favfood']."<br>";
}
else{
    echo "You have Logged out, Please login to continue";
}
?>