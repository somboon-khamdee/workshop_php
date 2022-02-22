<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">

<?php
include("connection/config_db.php");
$row_id = $_GET['m_id'];
echo $row_id;
$sql = "DELETE FROM tbl_member WHERE id=$row_id";
$objQuery = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo
    "<script>
            Swal.fire({
                icon: 'success',
                title: '<h3>ระบบทำการลบข้อมูลสำเร็จ</h3>',
                type: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'memberList.php';
            });
    </script>";
    /*echo"Add Data Record Complete.";*/
}
else {
    echo "Error!!!" . $sql . "<br>" . $conn->error;
}
?>