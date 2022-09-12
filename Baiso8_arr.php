<?php 
$arr = array(11,12,13,14,15,16);
foreach($arr as $value){
    echo $value."\n";
}

echo "\n";
$arrA = array("CC"=>"Ten la C","BB"=>"Ten la B","AA"=> "Ten la A");
foreach($arrA as $r => $r_value){
    echo "Key: $r and Value - $r_value\n";
}

echo "mang nhieu chieu\n";
$arrM = array(
    array("Name"=>"CC","Address"=>"590 CMT8","Tel"=>1234567),
    array("Name"=>"BB","Address"=>"5275 NVD","Tel"=>7654321),
    array("Name"=>"AA","Address"=>"204 NX","Tel"=>3456789)
);
echo "\n";
echo "Name of B is ". $arrM[1]["Name"]."\n";
echo "Address of C is ".$arrM[0]["Address"]."\n";
echo "Tel of A is ".$arrM[2]["Tel"]."\n";

?>