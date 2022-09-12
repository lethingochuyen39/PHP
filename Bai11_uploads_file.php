<?php
$target_dir = "/uploads"; //Your system directory location
$target_file = $target_dir .
    basename($_FILES['image']['name']);
if (isset($_FILES['image'])) {
    $errors = array();
    $file_type = $_FILES['image']['type'];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $extension = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($extension));
    $extensions = array("jpeg", "png", "jpg", "gif");
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "This file extension is not allowed";
    }
    // Verify if image file is a fake image or an actual image
    $check = getimagesize($file_tmp);
    if ($check !== false) {
        echo "The file is an image - " . $check["mime"] . ".";
    } else {
        $errors[] = "The file is not an image.";
    }
    //Verify whether file size is valid or not
    if ($file_size > 2097152) {
        $errors[] = 'File size must be exactly 2 MB';
    }
    //Verify whether file size exists already or not
    if (file_exists($target_file)) {
        $errors[] = "Hey, the file exists already.";
    } //Verify whether file size is valid or not
    if ($file_size > 500000) {
        $errors[] = "File too large to be uploaded!.";
    }
    // Inspect whether the upload was successful or not
    if (empty($errors) == true) {
        if (move_uploaded_file($file_tmp, "/uploads" . $file_name)) {
            echo "The file " . $file_name . " has been uploaded successfully!.";
            echo "<ul>";
            echo " <li>Sent file: " . $_FILES['image']['name'];
            echo " <li>File size: " . $_FILES['image']['size'];
            echo " <li>File type: " . $_FILES['image']['type'];
            echo "</ul>";
        }
    } else {
        print_r($errors);
    }
}
?>
<html>

<body>
    <form action="" method="POST" enctype="multipart/formdata">
        <input type="file" name="image" />
        <input type="submit" />
    </form>
</body>

</html>