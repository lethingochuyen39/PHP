<?php
session_start();


$username = $_SESSION['username'];
$id = $_SESSION['id'];

?>

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
    $_SESSION['id']= 456;
    echo "username: " . $username . "<br>";
    echo "id: " . $id . "<br>";
    ?>
</body>

</html>