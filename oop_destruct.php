<?php

class School{
    public $school;
    
    function __construct ($school){

        $this->school = $school;

    }

    function __destruct(){
        echo "the school is {$this->school}";
    }


      

}

$school = new School("jib nogor school");





?>