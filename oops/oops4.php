<?php 

class car{
       //properties
       public $name;
       public $model;
       public $speed;
       public $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}


$CAR1 = new car();
$CAR1->set_name("AUDI");
// $CAR2->set_name("HOnda");
echo $CAR1->get_name();
// echo $CAR2->get_name();


$CAR2 = new car();
$CAR2->set_name("HOnda");
// echo $CAR1->get_name();
echo $CAR2->get_name();
// $CAR1->set_model("S5");
// $CAR1->set_speed("200KMPH");
// $CAR1->set_color("RED");

?>
