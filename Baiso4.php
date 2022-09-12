<?php
// $x = 1234;
// echo "<p>The $x is integer </p>";
// var_dump(is_int($x));


// $x = 123.45;
// echo "<p>The $x is integer </p>";
// var_dump(is_int($x));
// // var_dump(($x)); 

// $x = 999999999;

// echo "<p>The $x is integer </p>";
// var_dump(is_int($x));

// var_dump(is_double(1234567.67));

$x = 10;
$y = 5;
function add(){
    // global $x, $y; su dung bien ben ngoai ham 
    $x = 3;
    $y =6;
    $x++;
    $y--;
    echo "<p>The value of x (in function) is $x";
    echo "<p>The value of y (in function) is $y";
}
add();
echo "<p>The value of x (out function) is $x";
echo "<p>The value of y (out function) is $y";



?>