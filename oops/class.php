<?php

class calculation{
    public $a, $b, $c;

    function multiply(){
        $this->c = $this->a * $this->b;
        return $this->c;

    }
};

$product = new calculation();

$product->a = 10;
$product->b = 2;

echo "The product of 10 and 2 is =  " . $product->multiply() ."<br />:";

class fruit{
    public $name, $colour;

    function set_properties($name, $colour){
        $this->name = $name; 
        $this->colour = $colour; 
    }

    function get_properties(){
        return array( 'name' => $this->name, 'colour' => $this->colour);
    }

}

$apple = new fruit();

$apple->name = "apple";
$apple->colour = "green";


$properties = $apple->get_properties();
echo 'Name: ' . $properties['name'] . ', Colour: ' . $properties['colour'];

?>