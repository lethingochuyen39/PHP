<?php

declare(strict_types =1);

function addNum(int $a, int $b):int
{
    return $a + $b;

}$result = addNum(15,10);
echo $result."<br>";

function name_Argument(int $value1 = 10 ,int $value2= 15 ){
    echo "The result of ".$value1. " + " .$value2. "= ".($value1+$value2)."<br>";

}
name_Argument(value2 :17,value1 :14);
name_Argument(value1 :17,value2 :14);

function Test(){
    echo "The value of test is 100";
}
$fun_obj = "Test";
$fun_obj();


function Dates(){
    $homnay = date("d/m/Y h:i:sa");
    $homnay1 =date("y-M-D H:I:s");
    echo "<br>".$homnay;
    echo "<br>".$homnay1;
}
Dates();

$currentTimeinSeconds = time();
echo "<br>".$currentTimeinSeconds;

echo "<br>the time is ".date("h:i:sa");

?>