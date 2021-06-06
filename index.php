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
                <?php include "HH_Home.php"; ?>
<!-- Phần Home -->
                <?php include "DangNhap.php"; ?>
<!-- Phần nhập hàng -->
                <?php include "HH_Nhap.php"; ?>
<!-- Phần Xuất hàng -->
                <?php include "HH_Xuat.php"; ?>
<!-- Phần Hàng hóa -->
                <?php include "HH_HangHoa.php"; ?>
    <!-- Phần Hàng hóa Sửa -->
                <?php include "HH_HangHoa_Them.php"; ?>
    <!-- Phần Hàng hóa Sửa -->
                <?php include "HH_HangHoa_Sua.php"; ?>
<!-- Phần Loại -->
                <?php include "HH_Loai.php"; ?>
    <!-- Phần Loại Thêm -->
                    <?php include "HH_Loai_Them.php"; ?>
    <!-- Phần Loại Sua -->
                    <?php include "HH_Loai_Sua.php"; ?>
<!-- Phần Hỗ trợ-->
                <?php include "HH_Support.php"; ?>
<!-- Phần Đăng xuất-->
                <?php include "DangXuat2.php"; ?>
            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    
</body>
</html>
