<?php 

trait test {
    public function names (){
        echo "mango","banana","jam";
    }
    public function color (){
        echo "red","yalow","cyan";
    }
};

trait test2 {
    public function teachers (){
        echo "mehedi","suma","tuntu";
    }

};

class Base {
    use test,test2;
}

$obj = new Base;
$obj->names();
$obj->color();
$obj->teachers();

