<?php 

setcookie('product','san pham1');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
    
    if(isset($_COOKIE['product'])){
        echo "Cookie is enabled <br>";

    }else{
        echo "Cookie is disabled <br>";
    }
    ?>
</body>
</html>