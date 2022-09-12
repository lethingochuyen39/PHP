<?php

print "Nhap lop: ";
fscanf(STDIN, "%d", $lop);

switch ($lop) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Hoc sinh tieu hoc\n";
        break;
    case 6:
    case 7:
    case 8:
    case 9:
        echo "Hoc sinh THCS\n";
        break;
    case 10:
    case 11:
    case 12:
        echo "Hoc sinh THPT\n";
        break;
    default:
        echo "Nhap Sai lop";
        break;
}
?>

