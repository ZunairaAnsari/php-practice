<?php
class bank
{
    public $user, $balance;

    function __construct($u, $b)
    {
        $this->user = $u;
        $this->balance = $b;
    }

    function output()
    {
        echo "The user name and balance are " . $this->user . "<br />" . $this->balance . "<br />";
    }
}

$response = new bank("bisma", 20000);
$response->output();


class report
{
    public $student;
    public $grade;

    function __construct($s, $g)
    {
        $this->student = $s;
        $this->grade = $g;
    }
}

$result1 = new report("atrooba", "A");
echo "the student name and grade is " . $result1->student . "<br />" . $result1->grade . "<br />";

//  For this exercise, add an object initialization method inside of the Product class.
//  (hint: function __construct())

// With that construct function get as parameter the name
// , description and price and assign them to instance attributes of the
//  same name (hint: The current instance is reference by '$this' keyword)

// After that create two object (product1 and product2).
//  When you will initialize the object ex.
//  $product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99)
//  you pass the three parameters (name, description and price)

class product{
    public $name;
    public $price;
    public $description;

    function __construct($name, $description, $price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    function show2(){
        echo $this->name . $this->description . $this->price . "<br />";
    }

}

$product1 = new product('iPhone 12....', 'This is a great iPhone ', 799.99);
$product2 = new product('iPhone 10.....', 'This is also a great iPhone ', 599.99);
$product1->show2();
$product2->show2();
