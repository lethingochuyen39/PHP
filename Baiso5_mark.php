<?php 
print "Nhap diem: ";
fscanf(STDIN,"%d",$diem);

if($diem<0 || $diem >100){
    printf("Diem khong hop le!\n");
}
elseif($diem<40){
    echo "You are failed!!!\n";
}
elseif($diem<65){
    echo"You are passed!!!\n";
}elseif($diem<80){
    echo "You are good!!!\n";
}else{
    echo "You are excellent!!!";
}


?>