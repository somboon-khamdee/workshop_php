<?php
ob_start();
session_start();
include("connection/config_db.php");
$txt_username = $_POST['text_username'];
$txt_password = $_POST['text_password'];

/*echo $txt_username."<br>";
echo $txt_password;*/

$sql = "SELECT * FROM tbl_member WHERE username = '$txt_username'";
$objQuery = mysqli_query($conn, $sql);
$objResult = mysqli_fetch_array($objQuery);

if($objResult){
    $_SESSION["sess_username"] = $objResult["username"];
    $_SESSION["sess_fullname"] = $objResult["fullname"];
    header('location: index.php');
}
else{
    header('location: login.php');
}
?>