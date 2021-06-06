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

                    <li role="presentation" class="active"><a href="HH_Xuat.php"><span><i class="fa fa-sign-out"></i></span>Xuất Hàng</a></li>

                    <li role="presentation" ><a href="HH_HangHoa.php"><span><i class="fa fa-gift"></i></span>Hàng Hóa</a></li>

                    <li role="presentation" ><a href="HH_Loai.php"><span><i class="fa fa-th"></i></span>Phân Loại</a></li>

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
<!-- Phần Xuất hàng -->
                <div id="three">

                    <h1> Phần Xuất Hàng </h1>
                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin xuất hàng hóa</h5>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="NgayXuat">Ngày Xuất</label>
                                    <input type="text" class="form-control" id="NgayXuat" name="NgayXuat" required />
                                </div>

                                <div class="form-group">
                                    <label for="TenHangHoa">Tên Hàng hóa</label>
                                    <input type="text" class="form-control" id="TenHangHoa" name="TenHangHoa" required />
                                </div>

                                <div class="form-group">
                                    <label for="Loai">Loại</label>
                                    <input type="text" class="form-control" id="Loai" name="Loai" required />
                                </div>

                                <div class="form-group">
                                    <label for="SoLuong">Số lượng</label>
                                    <input type="number" max= "1000" min = "0" class="form-control" id="SoLuong" name="SoLuong" required />
                                </div>

                                <div class="form-group">
                                    <label for="GiaBan">Giá bán</label>
                                    <input type="text" class="form-control" id="GiaBan" name="GiaBan" required />
                                </div>

                                <div class="form-group">
                                    <label for="ThanhTien">Thành tiền</label>
                                    <input type="text" class="form-control" id="ThanhTien" name="ThanhTien" required />
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><span><i class="fa fa-sign-out"></i></span>Xuất Hàng</button>
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

