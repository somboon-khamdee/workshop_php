<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">

<style>
    body,h3 {
        font-family: 'Prompt', sans-serif;
    }
</style>

<?php
include("connection/config_db.php");

$fullname = $_POST['text_fullname'];
$username = $_POST['text_username'];
$password = $_POST['text_password'];
$repassword = $_POST['text_repassword'];

echo $fullname . "<br>";
echo $username . "<br>";
echo $password . "<br>";
echo $repassword . "<br>";

$sql = "INSERT INTO tbl_member (id, fullname, username, password, level)
VALUE ('', '$fullname', '$username', '$password', 'member')";

if (mysqli_query($conn, $sql)) {
    echo
    "<script>
            Swal.fire({
                icon: 'success',
                title: '<h3>ระบบทำการบันทึกข้อมูลสำเร็จ</h3>',
                type: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'login.php';
            });
    </script>";
    /*echo"Add Data Record Complete.";*/
} else {
    echo "Error!!!" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>