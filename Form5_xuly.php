<?php

$name = $email = $gender = $address = $rollnumber = $language1 = $language2 = "";
$nameErr = $emailErr = $genderErr = $rollnumberErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["rollnumber"])) {
        $rollnumberErr = "RollNumber must be required!!";
    } else {
        $rollnumber = valid($_POST["rollnumber"]);
        if (!preg_match("/^([A-Z]{3})([0-9]{4})*$/", $rollnumber)) {
            $rollnumberErr = "Roll Number must be 3 uppercase letters and 4 numbers";
        }
    }

    if (empty($_POST["name"])) {
        $nameErr = "Name must be required!!";
    } else {
        $name = valid($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email must be required!!";
    } else {
        $email = valid($_POST["email"]);
        if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+(com)$/", $email)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender must be required!!";
    } else {
        $gender = valid($_POST["gender"]);
    }
    if (empty($_POST["address"])) {
        $address = "";
    } else {
        $address = valid($_POST["address"]);
    }
    if (empty($_POST["language1"])) {
        $language1 = "";
    } else {
        $language1 =valid($_POST["language1"]);
    }
    if (empty($_POST["language2"])) {
        $language2 = "";
    } else {
        $language2 =valid( $_POST["language2"]);
    }
}

function valid($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data =  htmlspecialchars($data, ENT_QUOTES);
    return $data;
}

?>
 <?php echo $rollnumberErr . "<br>";
    echo $nameErr . "<br>";
    echo $emailErr . "<br>";
    echo $genderErr . "<br>";
?>
<?php
echo "<h2>Thông tin bạn đã nhập:</h2>";
echo "RollNumber: ".$rollnumber . "<br>";
echo "Name: ".$name . "<br>";
echo "E-mail: ".$email . "<br>";
echo "Gender: ".$gender . "<br>";
echo "Address: ".$address . "<br>";
echo "language: ".$language1 . ", ";
echo $language2 . "<br>";

?>
   