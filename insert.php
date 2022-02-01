<?php
include("connection/config_db.php");

$fullname = $_POST['text_fullname'];
$username = $_POST['text_username'];
$password = $_POST['text_password'];
$repassword = $_POST['text_repassword'];

//echo $fullname."<br>";
//echo $username."<br>";
//echo $password."<br>";
//echo $repassword."<br>";

$sql = "INSERT INTO tbl_member (id, fullname, username, password, level) VALUE ('', '$fullname', '$username', '$password', 'member')";

if(mysqli_query($conn, $sql)){
    echo"Add Data Record Complete.";
}
else{
    echo"Error" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>