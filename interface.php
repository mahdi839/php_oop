<?php 

 interface Mehedi{
    function myName($name);
    function myAge($age);
 }
 interface Moon{
    function moonName($name);
    function moonAge($age);
 };

 class allName implements Mehedi,Moon {
   
    function myName ($name){
        echo $name;
    }
    function myAge ($name){
        echo $name;
    }
    
    function moonName ($name){
        echo $name;
    }
    function moonAge ($name){
        echo $name;
    }
    
 };

 $getNames = new allName();
 echo $getNames->myName('mehedi'. " ");
 echo $getNames->myAge('20');
 echo "<br>";
 echo $getNames->moonName('moon'. " ");
 echo $getNames->moonAge('30');