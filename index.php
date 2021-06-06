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
                    
                    <li role="presentation"class="active"><a><span><i class="fa fa-home"></i></span>Home</a></li>
                    
                <?php 
                    session_start();
                    if(!isset($_SESSION['uid']))
                    {
                ?>
                    <li role="presentation"><a href="DangNhap.php"><span><i class="fa fa-home"></i></span>Đăng nhập</a></li>
                <?php
                    }
                    else
                    {
                ?>
                    
                    <li role="presentation" ><a href="HH_Nhap.php"><span><i class="fa fa-sign-in"></i></span>Nhập Hàng</a></li>

                    <li role="presentation" ><a href="HH_Xuat.php"><span><i class="fa fa-sign-out"></i></span>Xuất Hàng</a></li>

                    <li role="presentation"><a href="HH_HangHoa.php"><span><i class="fa fa-gift"></i></span>Hàng Hóa</a></li>

                    <li role="presentation" ><a href="HH_Loai.php"><span><i class="fa fa-th"></i></span>Phân Loại</a></li>

                    <li role="presentation" ><a href="HH_Support.php"><span><i class="fa fa-support"></i></span>Supports</a></li>

                    <li role="presentation" ><a href="#LogOn" onclick=""><span><i class="fa fa-power-off"></i></span><?php echo $_SESSION['email'] ?> [Đăng xuất]</a></li>
                <?php
                }
                ?>
                </ul>
            </div>
            <div class="copyright">
                <p> <a href="">@Hằng </a> <a href="">@Hương </a> <a href="">@Chương</a>
            </div>
        </div>
        
        <div class="right-side">
            <div class="right-content">
<!-- Phần Home -->
                <?php include "HH_Home.php"; ?>

            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    
</body>
</html>
