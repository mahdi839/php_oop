<?php 

// class Car {
//     public $name;
//     public $price;

//     function __construct($name){
//         $this->name = $name;
//     }
//     function getName (){
//         return $this->name;
//     }
// }

// $car = new Car('BMW');
// echo 'Car Name Is: '.$car->getName();

class Computer{
    public $barnd;
    public $color;

    function __construct($barnd,$color){
        $this->brand= $barnd;
        $this->color= $color;
    }
    function getBrand(){
        return $this->brand;
    }
    function getColor(){
        return $this->color;
    }
};

$car = new Computer("HP Computer","yellow");
echo $car->getBrand();
echo "<br>";
echo $car->getColor();


?>