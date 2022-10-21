<?php 
class player{
    //properties
    public $name;
    public $speed = 5;
    public $running = false;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function startrun(){
        $this->running = true;
    }
}
    $player1 = new player();
    //when we are accessing methods of an object we have to use arrow function
    $player1->set_name("Vishnu");
    echo $player1->get_name();
    echo " speed".$player1->speed ."<br>";
    echo $player1->running;

    $player2 = new player();
    //when we are accessing methods of an object we have to use arrow function
    $player2->set_name("Vardhan");
    echo $player2->get_name();
?>
