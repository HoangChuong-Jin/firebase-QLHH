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
                    <li role="presentation"><a href="DangNhap.php" role="nav-link" data-toggle="nav-link" onclick="myFunction1()"><span><i class="fa fa-home"></i></span>Đăng nhập</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p> <a href="">@Hằng </a> <a href="">@Hương </a> <a href="">@Chương</a>
            </div>
        </div>
        
    </div>
    <div class="right-content">
        <div class="card mt-3">

            <h5 class="card-header">Xử lý đăng xuất</h5>
            <div class="card-body">             
                <p class="card-text">Đang xử lý đăng xuất....</p>
                <?php
                    //Xoá SESSTION
                    unset($_SESSION['uid']);
                    unset($_SESSION['email']);
                ?>
            </div>

        </div>
    </div>
    <script>
        firebase.auth().signOut();
        location.href='index.php';

        firebase.auth().signOut();
        location.href='index.php';
    </script>

</body>
</html>
