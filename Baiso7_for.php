<?php
print "Nhap ten: ";
fscanf(STDIN, "%s", $name);


$dem = 0;
echo "While loop\n";
while ($dem < 5) {
    echo "name is $name\n";
    $dem++;
}
echo "\n";
$dem = 0;
echo "Do While loop\n";
do {
    echo "name is $name\n";
    $dem++;
} while ($dem < 5);

echo "\n";
echo "For loop\n";
for ($dem = 0; $dem < 5; $dem++) {
    echo "name is $name\n";
}

//break
echo "\nbreak";
for($dem =0;$dem <5;$dem++){
if($dem ==3){
    break;
}
echo "Gia tri cua bien dem la: $dem\n";
}

//continue
echo "\ncontinue";
for($dem =0;$dem <5;$dem++){
    if($dem ==3){
       continue;
    }
    echo "Gia tri cua bien dem la: $dem\n";
    }

?>