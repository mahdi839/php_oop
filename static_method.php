<?php 
class school {
    public static $name = 'mehedi osmania';
   
};

class drivedClass extends school {
    public static function describeName(){
        echo parent::$name;
    }
}


 $obj = new drivedClass();
 $obj->describeName();