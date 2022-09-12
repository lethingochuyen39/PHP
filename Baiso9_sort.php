<?php 
$arr = array("muoi ba","muoi mot","muoi hai","muoi sau","muoi mot");

//tang dan
sort($arr);
$dem = count($arr);
echo "Ascending\n";

for($i =0;$i <$dem;$i++){
    echo $arr[$i]."\n";
}

//giam dan
rsort($arr);
echo "Descending\n";
for($i =0;$i <$dem;$i++){
    echo $arr[$i]."\n";
}
?>