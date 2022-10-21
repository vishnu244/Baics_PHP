<?php 
$regex = "/[a-z\d][@][a-z][\.][a-z]{2,3}[\.][a-z]{2}/";
//9812345678
//(XXX)123-1234
//vishnu123@gmail.co.in
if(isset($_POST['submit'])){
    if(preg_match($regex,$_POST['text'])){
        $output = "<span style = 'color:green'>ok</span>";
    }else{
        $output = "<span style = 'color:red'>not ok</span>";
    }
}
?>

<form method = "POST">
<input type = "text" name='text' 

autofocus/>
<input type = "SUBMIT" name = "submit"/>
<?php if(isset($output)) {echo $output;} ?>
