<?php

function odd_number()
{
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 0) {
            echo " $i " . "<br>";
        }
    }
}
odd_number();
echo "<br>";

function addThreeNumber($num1, $num2, $num3)
{
    $num = $num1 + $num2 + $num3;
    echo "The sum of $num1 +$num2 +$num3 = " . $num . "<br>";
}
addThreeNumber(22, 23, 24);
echo "<br>";

function addThreeNumbers($var1, $var2, $var3){
    return $var1+ $var2+ $var3;

}$rs = addThreeNumbers(22, 23, 24);
echo $rs ."<br>";

function addTwoNumbers(int $num4_default = 100)
{
    echo "The $num4_default" . "<br>";
}

echo "<br>";
addTwoNumbers(200) . "<br>";
addTwoNumbers() . "<br>";
addTwoNumbers(135) . "<br>";

echo "<br>";
function addRef(&$num)
{
    $num += 15;
    echo "$num"." out function";
}
$num1 = 12;
addRef($num1) . "<br>";
echo $num1;

echo "<br>";