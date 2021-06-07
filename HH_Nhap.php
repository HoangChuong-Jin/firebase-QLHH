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
<!-- Phần nhập hàng -->
                <div id="two">
                    <h1> Phần Nhập Hàng </h1>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin nhập hàng hóa</h5>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="NgayNhap">Ngày Nhập</label>
                                    <input type="text" class="form-control" id="NgayNhap" name="NgayNhap" required />
                                </div>

                                <div class="form-group">
                                    <label for="TenHangHoa">Tên hàng hóa</label>
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
                                    <label for="GiaGoc">Giá gốc</label>
                                    <input type="text" class="form-control" id="GiaGoc" name="GiaGoc" required />
                                </div>
                                
                                <div class="form-group">
                                    <label for="ThanhTien">Thành tiền</label>
                                    <input type="text" class="form-control" id="ThanhTien" name="ThanhTien" required />
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





