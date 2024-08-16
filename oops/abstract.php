<?php

/* abstract classes works as a blueprint whenever a developer needs to add something in a project 
 he can use the abstract class by making its child
 class or extended class, we can not instantiate a abstract class.*/
abstract class master{
    public $name;
    abstract protected function cal($a, $b);
}

class subClass extends master{
    public function cal($a, $b){
        echo $a * $b;
    }
}

$calculation = new subClass();
$calculation->cal(9, 9);
?>