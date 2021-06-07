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
<!-- Phần nhập hàng hóa sửa -->
                    <h1> Phần sửa đơn nhập </h1>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin nhập hàng hóa</h5>
                        <div class="card-body">
                            <form action="HH_Nhap_Sua.php" method="post">
                                <input type="text" id="id" name="id" hidden >
                                <div class="form-group">
                                    <label for="NgayNhap">Ngày nhập</label>
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
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <?php include "Javascript.php"; ?>        
    <script>
        var docRef = db.collection("nhap").doc("<?php echo $_GET['id'];?>");
        docRef.get().then((doc) => {
            if (doc.exists) {
                //console.log("Document data:", doc.data
                $('#id').val(doc.id);
                 $('#NgayNhap').val(doc.data().ngaynhap);
                $('#TenHangHoa').val(doc.data().tenhang);
                $('#Loai').val(doc.data().loai);  
                $('#SoLuong').val(doc.data().soluong);
                $('#GiaGoc').val(doc.data().giagoc); 
                $('#ThanhTien').val(doc.data().thanhtien);   
            } else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        }).catch((error) => {
            console.log("Error getting document:", error);
        });
    </script>
    <?php
        if(isset($_POST['NgayNhap'])){
    ?>
            <script>
                var docRef = db.collection("nhap").doc("<?php echo $_POST['id'];?>");
                
                    docRef.update({
                    ngaynhap: "<?php echo $_POST['NgayNhap'];?>",
                    tenhang: "<?php echo $_POST['TenHangHoa'];?>",
                    loai: "<?php echo $_POST['Loai'];?>",
                    soluong: "<?php echo $_POST['SoLuong'];?>",
                    giagoc: "<?php echo $_POST['GiaGoc'];?>",
                    thanhtien: "<?php echo $_POST['ThanhTien'];?>",  
                })
                .then(() => {
                    //console.log("Document successfully updated!");
                    location.href="HH_DS_Nhap.php";
                })
                .catch((error) => {
                    // The document probably doesn't exist.
                    console.error("Error updating document: ", error);
                }); 

            </script>
    <?php
    }
    ?>
</body>
</html>