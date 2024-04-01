<?php 

class Fruit {
    public $name;
    public $color;

    function setName($name){
        $this->name = $name;
    }

    function setColor ($color){
        $this->color = $color;
    }

    function getName (){
       return $this->name;
    }

    function getColor (){
        return $this->color;
    }
}

$fruit = new Fruit;
$fruit->setName('jam');
echo 'fruit name is: '.$fruit->getName();
echo "<br>";
$fruit-> setColor('yellow');
echo 'Fruit Color Is: '.$fruit->getColor()


?>