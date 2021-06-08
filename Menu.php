<div class="left-side">
    <div class="logo">
			<img src="img/TW.png" alt="" width="50%">
    </div>
    <div class="left-content">
        <ul id="menu">          
            <li role="presentation" class="hover"><a href="index.php"><span><i class="fa fa-home"></i></span>Home</a></li>

        <?php 
            session_start();
            if(!isset($_SESSION['uid']))
            {
        ?>
            <li role="presentation" ><a href="DangNhap.php" role="nav-link" data-toggle="nav-link"><span><i class="fa fa-user"></i></span>Đăng nhập</a></li>
        <?php
            }
            else
            {
        ?>     
            <li role="presentation" class="hover"><a href="HH_Nhap.php"><span><i class="fa fa-sign-in"></i></span>Nhập Hàng</a></li>

            <li role="presentation" class="hover"><a href="HH_Xuat.php"><span><i class="fa fa-sign-out"></i></span>Xuất Hàng</a></li>

            <li role="presentation" class="hover"><a href="HH_HangHoa.php"><span><i class="fa fa-gift"></i></span>Hàng Hóa</a></li>

            <li role="presentation" class="hover"><a href="HH_Loai.php"><span><i class="fa fa-th"></i></span>Phân Loại</a></li>

            <li role="presentation" class="hover"><a href="HH_DS_Nhap.php"><span><i class="fa fa-tasks"></i></span>Danh sách nhập</a></li>
            <li role="presentation" class="hover"><a href="HH_DS_Xuat.php"><span><i class="fa fa-tasks"></i></span>Danh sách xuất</a></li>

            <li role="presentation" class="hover"><a href="HH_Support.php"><span><i class="fa fa-support"></i></span>Supports</a></li>        
            <li role="presentation" ><a href="DangXuat.php"><span><i class="fa fa-power-off"></i></span><?php echo $_SESSION['email']?> [Đăng xuất]</a></li>
        <?php
        }
        ?>
        </ul>
    </div>
    <div class="copyright">
        <p>CopyRight © Code of TW</p>
        <p> <a href="http://ltdtagu12mem.atwebpages.com/info/Hang.html">@Hằng </a> <a href="http://ltdtagu12mem.atwebpages.com/info/Huong.html">@Hương </a> <a href="http://ltdtagu12mem.atwebpages.com/info/Chuong.html">@Chương</a>
    </div>
</div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>

<script>
    $("#menu li a").click( function() {
    $(this).parent().parent().find("li").removeClass("active").removeClass("hover").addClass("hover");
    $(this).parent().removeClass("hover").addClass("active");
});
</script>