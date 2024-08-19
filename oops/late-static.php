<?php
class main{
    protected static $name = "Ali";

    public function show(){
        echo static::$name;
    }
}

class child extends main{
    protected static $name = "Haider";
}

$obj = new child();
$obj->show();



?>