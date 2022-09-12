<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Validate</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
   

    <h2>Form trong PHP</h2>
    <p><span class="error">* required field</span></p>
    <form action="Form5_xuly.php" method="POST" >
        <table>
            <tr>
                <td>RollNumber:</td>
                <td><input type="text" name="rollnumber">
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" >
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" >
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">Female
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Male">Other
                    <span class="error">*</span>
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Language:</td>
                <td> <input type="checkbox" name="language1" value="English">English <br>
                    <input type="checkbox" name="language2" value="Other">Other
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    

</body>

</html>