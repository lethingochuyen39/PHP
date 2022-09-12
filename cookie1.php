<?php 
setcookie("user","ABC",time()+1800,"/");
setcookie("id","123",time()+86400,"/");
setcookie("user","EFG",time()+86400,"/");
setcookie("user","",time()-30,"/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
   <?php  if(!isset($_COOKIE['user'])){
        echo "Cannot found this cookie";
    }else{
        $user = $_COOKIE['user'];
        $id = $_COOKIE['id'];
        echo "user: ".$user."<br>";
        echo "id: ".$id."<br>";
    }

    ?>
    
</body>
</html>