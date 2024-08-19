<?php
echo "<h1>Static Members</h1>";

class People{
    public $name = "farah";

    public function show(){
        echo $this->name;
    }
}

$p1 = new People();
$p1->show();


?>