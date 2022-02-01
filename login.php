<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <style>
        body {
            font-family: 'Chakra Petch', sans-serif;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>ระบบจัดการสมาชิก</b></h1>
            </div>
            <div class="card-body">
                <p class="login-box-msg">กรุณาระบุชื่อผู้ใช้งานและรหัสผ่าน</p>

                <form action="index.php" method="post">
                    <div class="input-group mb-3">
                        <input type="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    จดจำชื่อผู้ใช้และรหัสผ่าน
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="social-auth-links text-center">
                        <button type="" class="btn btn-block btn-outline-warning">
                            <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button>
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="register.php" class="btn btn-block btn-outline-success">
                        <i class="fas fa-user-plus"></i> สร้างผู้ใช้ใหม่
                    </a>
                    <a href="#" class="btn btn-block btn-outline-primary">
                        <i class="fab fa-facebook mr-2"></i> เข้าสู่ระบบโดยใช้ Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-outline-danger">
                        <i class="fab fa-google-plus mr-2"></i> เข้าสู่ระบบโดยใช้ Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="#">ลืมรหัสผ่าน</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>