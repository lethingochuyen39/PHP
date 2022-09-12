<html>
<body>
<?php
$fp = fopen('datum.txt', 'w');
//opening the file in write mode
fwrite($fp, 'hi');
fwrite($fp, 'sample file');
fclose($fp);
echo "File has been written.";

// delete file "datum"
unlink('datum.txt');
echo "File has been deleted.";

?>
</body>
</html>