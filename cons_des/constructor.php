<?php 
class Employee{
    public $name;
    public $salary;

    // constructor without arguments
    // function __construct(){
    //     echo "constructor";
    // }

    //constructor with arguments
    function __construct($name, $salary ){
        $this->name = $name;
        $this->salary = $salary;
        // echo "the Employee name is $emp1->name and his salary is $emp1->salary ";

    }
    


    function __destruct(){
        echo "Destroy $this->name <br>";
        echo "Employee name is {$this->name} <br>";
        
    }
}

$emp1 = new Employee("vishnu",10000);
$emp2 = new Employee("krishna",10000);
$emp3 = new Employee("vardhan",16000);
$emp4 = new Employee("vamsy",10000);

echo "the Employee name is $emp1->name and his salary is $emp1->salary <br>";
echo "the Employee name is $emp3->name and his salary is $emp3->salary <br> ";

?>