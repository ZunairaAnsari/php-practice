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
echo "<br />";
// static-member

class Fruits {
    public static function countQuantity(){
        return 10;
    }
}
class Vege extends Fruits{
    public $quantity;
    public function __construct()
    {
      $this->quantity = parent::countQuantity();
    }       
}
$veg = new Vege();
echo $veg->quantity;

?>