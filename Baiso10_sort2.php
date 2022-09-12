<?php 
$arrA = array("CC"=>"Ten la C","BB"=>"Ten la B","AA"=> "Ten la A","DD"=> "Ten la D");
//xs theo tt
ksort($arrA);
echo "\nAscending\n";
$count = count($arrA);
foreach($arrA as $r => $r_value){
    echo "key is $r and Value is $r_value\n";
}

echo "\nDescending\n";
krsort($arrA);
foreach($arrA as $r => $r_value){
    echo "key is $r and Value is $r_value\n";
}

?>