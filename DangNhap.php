<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include "header.php"; ?>

</head>
<body>

    <div class="wrapper">
        <!-- Menu -->
        <div class="left-side">
            <div class="logo">
                    <img src="img/H2C.png" alt="" >
            </div>
            <div class="left-content">
                <ul>
                    <li role="presentation" class="active"><a href="DangNhap.php" ><span><i class="fa fa-home"></i></span>Đăng nhập</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p> <a href="">@Hằng </a> <a href="">@Hương </a> <a href="">@Chương</a>
            </div>
        </div>
        
        <div class="right-side">
            <div class="right-content">
<!-- Phần Home -->
<!-- Phần đăng nhập -->
                <div id="LogIn">
                    <h1> Phần Đăng nhập </h1>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin nhập hàng hóa</h5>
                        <div class="card-body">
                            <form action="DangNhap_Xuly.php" method="post">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required />
                                </div>

                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" class="form-control" class="pswrd" id="Password" name="Password" required />
                                    <span class="show"></span>
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><i class=""></i> Login</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    
</body>
</html>