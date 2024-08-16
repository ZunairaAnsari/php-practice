<?php

interface Admin {
    public function leaves($days, $attendance);
}

interface Employee {
    public function salary($days, $pda);
}

class Company implements Admin, Employee {

    public function __construct() {
        // Optional: Initialization code
    }

    public function leaves($days, $attendance) {
        echo "Leaves remaining: " . ($days - $attendance) . "<br />";
    }

    public function salary($days, $pda) {
        echo "Salary: " . ($days * $pda) . "<br />";
    }

    public function info() {
        echo "Company information.\n";
    }
}

$company = new Company();
$company->leaves(30, 5);   // Output: Leaves remaining: 25
$company->salary(20, 150); // Output: Salary: 3000




interface A {
    public function cal($a, $b);
}

interface B {
    public function sum($c, $d);
}

class ChildClass implements A, B {
    public function cal($a, $b) {
        echo "This is the result of interface A: " . ($a - $b) . "<br />";
    }
    
    public function sum($c, $d) {
        echo "This is the result of interface B: " . ($c * $d) . "<br />";
    }
}


$child = new ChildClass();
$child->cal(20, 20); 
$child->sum(20, 20);

?>
