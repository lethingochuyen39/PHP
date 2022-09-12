<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    error_reporting(0);
    if ($_REQUEST["name"] || $_REQUEST["weight"]) {
        echo "welcome " . $_REQUEST['name'] . "<br>";
        echo "You are " . $_REQUEST['weight'] . "kgs .";
        // exit(); kq hien qua trang moi 
    }
    ?>

    <form action="<?php $_PHP_SELF ?> " method="POST">
        Name: <input type="text" name="name" id=""> <br><br>
        weight: <input type="text" name="weight" id=""> <br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>