<?php

session_start();
$_SESSION['username'] = "ABC";
$_SESSION['id'] = "123";

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

<p>
    session is set <br>
    <a href="next.php">Click to next page</a>
</p>
    
</body>
</html>