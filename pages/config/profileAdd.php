<?php

session_start();
include "dbcon.php";

$image = $_FILES['image']['name'];
$imag = $_SESSION['imag'];
$id = $_SESSION['id'];




/*
$sql1 = "INSERT INTO tb_profile (img)
VALUES ('$image')";

if ($conn->query($sql1) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/


$path = "../../assets/img/cms-image/profile/$imag";


if(!unlink($path)){
  
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitProfile"])) {
    $uploadDir = '../../assets/img/cms-image/profile/'; // Create a folder named 'uploads' in the same directory as this script

    // Check if the folder exists, create it if not
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $targetFile = $uploadDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">File is not an image.</div>';
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">Sorry, the file already exists.</div>'
        
        ;
        $uploadOk = 0;
    }

    // Check file size (you can adjust the size as needed)
    if ($_FILES["image"]["size"] > 5000000) {
        $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">Sorry, your file is too large.</div>'
    
    ;
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can customize the allowed types)
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedTypes)) {
        $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">Sorry, only JPG, JPEG, PNG, and GIF files are allowed.</div>'
    
    ;
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">Sorry, your file was not uploaded.</div>';
    } else {
        
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
            THE LOGO HAS SUCCESSFULLY UPDATED</div>';
        } else {
            $_SESSION['alert'] = '<div class="alert alert-success" role="alert">Sorry, there was an error uploading your file.</div>';
        }
    }
    header("Location: ../dashboardcontent/ManageElem.php");

} else {
    // Redirect to the form if accessed directly without submitting
    header("Location: index.html");
    exit();
}
?>
