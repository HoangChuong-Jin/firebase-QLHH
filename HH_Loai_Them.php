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
<!-- Phần Loại Thêm-->
                <div id="LoaiThem">
                    <h1> Phần Thêm loại hàng </h1>

                    <a href="HH_Loai.php"><span><i class="fa fa-th"></i></span> Danh sách loại hàng</a> <br></br>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin loại hàng</h5>
                        <div class="card-body">
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="MaLoai">Tên Loại</label>
                                    <input type="text" class="form-control" id="MaLoai" name="MaLoai" required />
                                </div>

                                <div class="form-group">
                                    <label for="TenLoai">Ghi chú</label>
                                    <input type="text" class="form-control" id="TenLoai" name="TenLoai" required />
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Thêm vào CSDL</button>
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