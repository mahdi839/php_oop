<?php
class City{
    public $name;
    public $school;
    public function __construct($name, $school){
        $this->name = $name;
        $this->school= $school;
    }

    public function getName (){
        echo "the city name is {$this->name}. and the school name is {$this->school}";
    }
}

class Detailed extends City{
    public function message(){
        echo "I am mahdi"."<br>";
}
    }

    $detailed = new Detailed($name, $school);
    $detailed->message();
    $detailed->getName();
      




