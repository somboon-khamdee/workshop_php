<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Chakra Petch', sans-serif;
    }
</style>

<?php
include("connection/config_db.php");
$row_id = $_GET['m_id'];
echo $row_id;
$sql = "DELETE FROM tbl_member WHERE id=$row_id";
$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "
    <script>
            Swal.fire({
                icon: 'success',
                title: '<h3>ระบบทำการบันทึกข้อมูลสำเร็จ</h3>',
                type: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'memberList.php';
            });
    </script>
    ";
} else {
    echo "
    <script>
            Swal.fire({
                icon: 'error',
                title: '<h3>เกิดข้อผิดพลาด!</h3>',
                type: 'error',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'memberList.php';
            });
    </script>
    ";
}
?>