<?php
echo "<h1>Static Members</h1>";

class People
{
    public $name = "farah";

    public function show()
    {
        echo $this->name .  "</br >";
    }
}

$p1 = new People();
$p1->show();

/* when we use static members in php we use the keyword "static" with all the properties and methods within
 a class, to call a function or a variable we use the word "self" with it and $this-> will be skipped, as it reffered an object
 and in static members we dont need to make an objec.*/
 echo "<h4>Static Members-Emp Class</h4>";

 class Emp
 {
     public static $name = "atrooba";
 
     public static function show()
     {
           echo self::$name . "</br >";
     }
 }

 Emp::show();
echo "<h4>Static Members-Base Class</h4>";
 class Base{
    public static $salary;
    public static $days;
    public static $total;
    
    public static function count($s, $d){
        echo  self::$total = $s * $d;
        
    }
 }

 Base::count(1000, 25);
 
?>