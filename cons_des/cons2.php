<?php 
class Car{
    public $color;
    public $name;

    // constructor without arguments
    // function __construct(){
    //     echo "constructor <br>";
    // }

    //constructor with arguments
    function __construct($name, $color ){
        $this->name = $name;
        $this->color = $color;

    }

}
$car1 = new Car("Audi","red");
$car2 = new Car("Toyota","white");
$car3 = new Car("honda","blue");
$car4 = new Car("BMW","yellow");


echo "the car name is $car1->name and its color is $car1->color <br>";
echo "the car name is $car3->name and its color is $car3->color <br> ";

?>