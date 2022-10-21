<?php 
session_start();

if(isset($_SESSION['username'])){
    echo "welcome".$_SESSION['username'];
echo "I LIKE ".$_SESSION['favcolor'];
echo "I LIKE".$_SESSION['favanimal'];
echo "I LIKE".$_SESSION['favmusic'];
}
else{
    echo "user is not logged in";
}



?>