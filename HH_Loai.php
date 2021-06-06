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
                    
                    <li role="presentation" ><a href="index.php"><span><i class="fa fa-home"></i></span>Home</a></li>
                    
                    <li role="presentation" ><a href="HH_Nhap.php"><span><i class="fa fa-sign-in"></i></span>Nhập Hàng</a></li>

                    <li role="presentation" ><a href="HH_Xuat.php"><span><i class="fa fa-sign-out"></i></span>Xuất Hàng</a></li>

                    <li role="presentation" ><a href="HH_HangHoa.php"><span><i class="fa fa-gift"></i></span>Hàng Hóa</a></li>

                    <li role="presentation" class="active"><a href="HH_Loai.php"><span><i class="fa fa-th"></i></span>Phân Loại</a></li>

                    <li role="presentation" ><a href="HH_Support.php"><span><i class="fa fa-support"></i></span>Supports</a></li>

                    <li role="presentation" ><a href="#LogOn" onclick=""><span><i class="fa fa-power-off"></i></span>Đăng xuất</a></li>

                </ul>
            </div>
            <div class="copyright">
                <p> <a href="">@Hằng </a> <a href="">@Hương </a> <a href="">@Chương</a>
            </div>
        </div>
        
        <div class="right-side">
            <div class="right-content">
<!-- Phần Phân loại-->
                <div id="six">
                    <h1> Loại hàng hóa </h1>

                    <a href="HH_Loai_Them.php"><span><i class="fa fa-plus"></i></span> Thêm loại</a>

                    <br></br>
                    <div>Thông tin loại</div>
                    <table class="table table-bordered table-hover table-sm mb-0">
                        <thead>
                            <tr>
                                <th width="10%">STT</th>
                                <th width="35%">Tên loại</th>
                                <th width="35%">Ghi chú</th>

                                <th width="10%">Sửa</th>
                                <th width="10%">Xóa</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Thời trang nam</td>
                            <td>Mẫu 2010</td>

                            <td><a href="HH_Loai_Sua.php"><i class="fa fa-edit"></i></a></td>
                            <td><a href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    
</body>
</html>
