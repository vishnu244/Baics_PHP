<?php 

//$students = array("Vishnu","vardhan","krishna","kanha");

// $students =array( 'hello', 42, array(1, 'two'), 'apple'); 

// $students = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// $serialize_data = serialize($students);
// echo "serialized data is : " . $serialize_data;

// $unserialize_data = unserialize($serialize_data);
// echo "<br><br>";
// echo "Un serialized data is : ";
// print_r ($unserialize_data);


class student 
{
    public $fname  = "Vishnu";

    function display()
    {
        echo $this->fname;
    }
}
$obj = new student();

echo $obj->display();

$output_str = serialize($obj);
echo "serialized object is : ".$output_str;

// echo "<br><br>";
// echo $output_str;

// $obj1 = unserialize($output_str);
// echo "<br><br>";
// echo "Un serialized object is : ";
// $obj1->display();

// $file = fopen("demo.txt", "w");
// fwrite($file, $output_str);
// fclose($file);

// $file = fopen("demo.txt", "r");
// $outputdata = fread($file, filesize("demo.txt"));
// $obj1 = unserialize($outputdata);
// $obj1->display();
?>