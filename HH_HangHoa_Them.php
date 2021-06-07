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
<!-- Phần nhập hàng hóa thêm -->
                <div id="HangHoaThem">
                    <h1> Phần Thêm hàng hóa </h1>

                    <a href="HH_HangHoa.php"><span><i class="fa fa-gift"></i></span> Danh sách hàng hóa</a> <br></br>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin nhập hàng hóa</h5>
                        <div class="card-body">
                            <form action="HH_HangHoa_Them.php" method="post">

                                <div class="form-group">
                                    <label for="TenHangHoa">Tên hàng hóa</label>
                                    <input type="text" class="form-control" id="TenHangHoa" name="TenHangHoa" required />
                                </div>

                                <div class="form-group">
                                    <label for="Loai">Loại</label>
                                    <input type="text" class="form-control" id="Loai" name="Loai" required />
                                </div>

                                <div class="form-group">
                                    <label for="NhaSanXuat">Nhà sản xuất</label>
                                    <input type="text" class="form-control" id="NhaSanXuat" name="NhaSanXuat" required />
                                </div>

                                <div class="form-group">
                                    <label for="Donvitinh">Đơn vị tính</label>
                                    <select type="text" class="form-control" id="Donvitinh" name="Donvitinh" required >
                                        <option value="">Vui lòng chọn</option>
                                        <option value="Chai">Chai</option>
                                        <option value="Lon">Lon</option>
                                        <option value="Cai">Cái</option>
                                        <option value="Ly">Ly</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="SoLuong">Số lượng</label>
                                    <input type="number" max= "1000" min ="0" class="form-control" id="SoLuong" name="SoLuong" required />
                                </div>

                                <div class="form-group">
                                    <label for="GiaGoc">Giá gốc</label>
                                    <input type="text" class="form-control" id="GiaGoc" name="GiaGoc" required />
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <?php include "Javascript.php"; ?>
    
    <?php
    if(isset($_POST['TenHangHoa'])){
    ?>
        <script>
            db.collection("hanghoa").add({
                tenhang: "<?php echo $_POST['TenHangHoa'];?>",
                loai: "<?php echo $_POST['Loai'];?>",
                nhasanxuat: "<?php echo $_POST['NhaSanXuat'];?>",
                donvitinh: "<?php echo $_POST['Donvitinh'];?>",
                soluong: "<?php echo $_POST['SoLuong'];?>",
                giagoc: "<?php echo $_POST['GiaGoc'];?>" 
            })
            .then((docRef) => {
                //console.log("Document written with ID: ", docRef.id);
                location.href="HH_HangHoa.php";
            })
            .catch((error) => {
                console.error("Error adding document: ", error);
            });

        </script>
    <?php
    }
    ?>
    
</body>
</html>