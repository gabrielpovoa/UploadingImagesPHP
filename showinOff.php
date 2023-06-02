<?php
$allowedFiles = array('image/jpeg', 'image/jpg', 'image/png');

$image_name = md5(time().rand(0,1000)). 'jpg';
if(isset($_FILES['files']) && in_array($_FILES['files']['type'], $allowedFiles)) {
    move_uploaded_file($_FILES['files']['tmp_name'], 'assets/'.$image_name);
    header('Location: sendFile.php');
    exit();
}
