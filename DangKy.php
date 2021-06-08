<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include "header.php"; ?>

</head>
<body>

    <div class="wrapper">
        <!-- Menu -->
        <?php include "Menu.php"; ?>
        
        <div class="right-side">
            <div class="right-content">
<!-- Phần Home -->
<!-- Phần đăng nhập -->
                <div id="LogIn">
                    <h1> Phần đăng ký </h1>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin đăng ký</h5>
                        <div class="card-body">
                            <form action="DangKy.php" method="post">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required />
                                </div>

                                <div class="form-group">
                                    <label for="Password">Mật khẩu</label>
                                    <input type="password" class="form-control" class="pswrd" id="Password" name="Password" required />
                                    <span class="show"></span>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class=""></i> Đăng ký</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    <script >
        var email='<?php echo $_POST['email']; ?>';
        var password='<?php echo $_POST['Password']; ?>';
        firebase.auth().createUserWithEmailAndPassword(email, password)
          .then((userCredential) => {
            // Signed in 
            var user = userCredential.user;
            // ...
            location.href='DangNhap.php';
          })
          .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            // ..
            window.alert("Lỗi: "+errorMessage );
      });

    </script>
    
</body>
</html>