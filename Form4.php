<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error {
        color: #f00;
    }
</style>

<body>
    <?php
    $name = $pass = $company = $comm = $gender = "";
    $nameErr = $passErr = $genderErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["txtname"])) {
            $nameErr = "Name must be required!!";
        } else {
            $name = valid($_POST["txtname"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Name must only letter, hyphen, single quotes ";
            }
        }
        if (empty($_POST["txtpass"])) {
            $passErr = "Pass must be required!!";
        } else {
            $pass = valid($_POST["txtpass"]);
            if (strlen($pass) < 5) {
                $passErr .= " Password is too short";
            }
            if (strlen($pass) > 20) {
                $passErr .= " Password is too long";
            }
            if (!preg_match("#[0-9]+#", $pass)) //"@[0-9]@"//it nhat 1 chu so
            {
                $passErr .= " Password must includes at least one digit";
            }
            if (!preg_match("#[a-z]+#", $pass)) //"@[a-z]@"// it nhat 1 ktu chu thuong
            {
                $passErr .= " Password must includes at least one lower letter";
            }
            if (!preg_match("#[A-Z]+#", $pass)) //"@[A-Z]@"//it nhat 1 ktu chu hoa
            {
                $passErr .= " Password must includes at least one upper letter";
            }
            if (!preg_match("#[^\w]+#", $pass)) //all a-z A-Z 0-9// it nhat 1 kt dac biet
            {
                $passErr .= " Password must includes at least one special symbol";
            }
        }
        if (empty($_POST["txtcompany"])) {
            $company = "";
        } else {
            $company = valid($_POST["txtcompany"]);
        }
        if (empty($_POST["txtcomment"])) {
            $comm = "";
        } else {
            $comm = valid($_POST["txtcomment"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender must be required!!";
        } else {
            $gender = valid($_POST["gender"]);
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
    <p class="error">* indicates required field</p>
    <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        Name: <input type="text" name="txtname"><span class="error">*<?php echo $nameErr ?></span><br><br>
        Password: <input type="password" name="txtpass"><span class="error">*<?php echo $passErr ?></span><br><br>
        Company: <input type="text" name="txtcompany"><br><br>
        Comment: <textarea rows="5" collumn="30" name="txtcomment"></textarea><br><br>
        Gender: <br> <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other<span class="error">*<?php echo $genderErr ?></span><br><br>
        <input type="submit" value="submit">
    </form>
    <?php
    echo $name . "<br>";
    echo $pass . "<br>";
    echo $company . "<br>";
    echo $comm . "<br>";
    echo $gender . "<br>";
    ?>
</body>

</html>