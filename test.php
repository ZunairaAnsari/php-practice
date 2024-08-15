<?php

$a =5;
for ($i=0; $i < $a; $i++) { 
    for ($j=0; $j < 5 ; $j++) { 
        echo " * ";
    }

    echo " <br/ >";
}

echo "<hr />";


for ($i=1; $i <= 5 ; $i++) { 
    for ($j=5; $j >= $i ; $j--) { 
        echo " * ";
    }


    echo "<br />";
}

echo "<hr />";
// write  code which generates the following order using if else and for loop

for( $i = 0; $i <= 5 ; $i++){
    if($i === 1){
        echo "******" . "<br/>";
    }
    elseif($i === 2){
        echo "**". "<br/>";
    }
    elseif($i === 3){
        echo "****". "<br/>";
    }
    elseif($i === 4){
        echo "**". "<br/>";
    }
    elseif($i === 5){
        echo "*". "<br/>";
    }
}

echo "<hr />";

$dayscount = 5;


for ($i = 0; $i < $dayscount; $i++) {

    if ($i % 3 == 0) {
        echo "day" . "<br />";
    } elseif ($i % 3 == 1) {
        echo "night". "<br />";
    } elseif ($i % 3 == 2) {
        echo "day and night". "<br />";
    }
}

echo "<hr/>";

// write  code which generates the following order using if else and for loop

$a = "day";
$b= "night";

for ($i=0; $i <=5 ; $i++) { 
    if($i === 1 || $i === 4){
        echo $a . "<br/>";
    }
    elseif($i === 2|| $i === 5){
        echo $b . "<br/>";
    }
    elseif($i === 3){
        echo $a . " and " . $b . "<br/>";
    }
}

echo "<hr/>";

$arr = [7,8,5,9,3,4,2,1];

sort($arr);

$arrlength = count($arr);

for ($i=0; $i < $arrlength; $i++) {
    echo $arr[$i];
 }
    
echo "<hr/>";

$myarr = array("bisma","neha","noreen","atrooba");

for ($i=0; $i < count($myarr) ; $i++) { 
    echo $myarr[$i] . "<br />";
}


echo "<hr />";

// let a = 10 and b = 20 try to   swap  variable values without  using  any 3rd variable

$a = 10;
$b = 20;

$b = $b - $a;
echo $b;

echo "<br />";

$a = $a + $b;
echo $a;

echo "<hr/>";


$arr= [6,3,5,9,2,4,7,1];

$a = $arr[0];
$b = $arr[0];

for ($i=1; $i < count($arr); $i++) { 
    if( $arr[$i] > $a){
        $b = $a;
        $a = $arr[$i];
    }
    elseif ($arr[$i] > $b && $arr[$i] != $a) {
        $b = $arr[$i]; 
        echo $b;
    }
}
echo "<hr/>";
 
for($i = 0; $i < count($arr); $i++ ) {
     for($j = 0; $j < count($arr)-1; $j++) {
         if($arr[$j+1] < $arr[$j]){
             $t = $arr[$j+1];
             $arr[$j+1] = $arr[$j]; 
             $arr[$j] = $t; 
            }
        }
    }
 print_r($arr);

?>
