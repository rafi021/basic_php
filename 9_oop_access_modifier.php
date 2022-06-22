<?php 
/*
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class
*/


class Cars {

    /*properties */
    public $name;
    public $color;
    private $sceret_engine;

     /*constructor */
     function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    /*methods -- getter & setter */
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }

    private function set_engine($engine){
        $this->sceret_engine = $engine;
    }

}

$new_car_object = new Cars("Toyota", "Blue");
// $new_car_object->name = "BMW";
// $new_car_object->color = "Red";
// $new_car_object->sceret_engine = "BM426534";

// print_r($new_car_object);

$new_car_object->set_name("Toyota");
$new_car_object->set_color("Red");
$new_car_object->set_engine("TY8792faa78");

print_r($new_car_object);