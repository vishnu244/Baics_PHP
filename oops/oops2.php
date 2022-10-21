<?php 
class CAR{
    //properties
    public $name;
    public $model;
    public $speed;
    public $color = "white";


    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_model($model){
        $this->model = $model;
    }

    function get_model(){
        return $this->model;
    }

    function set_speed($speed){
        $this->speed = $speed;
    }

    function get_speed(){
        return $this->speed;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }

    
}
    $CAR1 = new CAR();
    $CAR1->set_name("AUDI");
    $CAR1->set_model("S5");
    $CAR1->set_speed("200KMPH");
    $CAR1->set_color("RED");
    

    echo $CAR1->get_name();
    echo $CAR1->get_model();
    echo $CAR1->get_speed();
    echo $CAR1->get_color()."<br>";

    $CAR2 = new CAR();
    $CAR2->set_name("AUDI");
    $CAR2->set_model("S5");
    $CAR2->set_speed("200KMPH");
    // $CAR2->set_color("RED");

    echo $CAR2->get_name();
    echo $CAR2->get_model();
    echo $CAR2->get_speed();
    echo $CAR2->get_color();

   
?>
