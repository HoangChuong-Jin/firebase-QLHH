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
                <?php include "Menu.php"; ?> 
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
                                    <label for="tenloai">Tên Loại</label>
                                    <input type="text" class="form-control" id="tenloai" name="tenloai" required />
                                </div>

                                <div class="form-group">
                                    <label for="ghichu">Ghi chú</label>
                                    <input type="text" class="form-control" id="ghichu" name="ghichu" required />
                                </div>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Thêm mới</button>
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