<?php
//  $x = 5;
// function Test(){
//    // $x = 5;
//     echo "<p>The x value of x is $x</p>";

// }

// Test();
// echo "<p>The value x outside funtion is: $x</p>";

function static_variable(){
    static $x = 10;//giu gia tri 
    $y = 5;
    $x++;
    $y++;

    echo "<p>The value of x is $x<p>";
    echo "<p>The value of y(non static) is $y</p>";

}
static_variable();
static_variable();
echo"********************";


function ret_value($value){
    $value = $value *20;
    return $value;

}
$result = ret_value(10);
echo "<p>The result is $result </p>";
echo"********************";

?>