<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    echo "File is uploaded(false) - " . $check["mime"] . ".";
    $uploadOk = 1;
}
?>