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
echo "<h4>Static Members-Class with constructor function</h4>";

class school{
    public static $role = "teacher";
    public static function print(){
        echo self::$role;
    }

    public function __construct($r)
    {
       self::$role = $r;
    }

}

$s1 = new school("admin");
$s1->print();

echo "<hr />";

class basic{
    public static $level = "beginer";
}
class derived extends basic{
    public static function show(){
        echo  parent::$level;
    }
}

$test = new derived();
$test->show();
 
?>