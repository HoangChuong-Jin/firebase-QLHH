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
                    <h1> Phần sửa đơn xuất </h1>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin xuất hàng hóa</h5>
                        <div class="card-body">
                            <form action="HH_Xuat_Sua.php" method="post">
                                <input type="text" id="id" name="id" hidden >
                                <div class="form-group">
                                    <label for="NgayXuat">Ngày xuất</label>
                                    <input type="text" class="form-control" id="NgayXuat" name="NgayXuat" required />
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
                                    <label for="GiaBan">Giá bán</label>
                                    <input type="text" class="form-control" id="GiaBan" name="GiaBan" required />
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
        var docRef = db.collection("xuat").doc("<?php echo $_GET['id'];?>");
        docRef.get().then((doc) => {
            if (doc.exists) {
                //console.log("Document data:", doc.data
                $('#id').val(doc.id);
                 $('#NgayXuat').val(doc.data().ngayxuat);
                $('#TenHangHoa').val(doc.data().tenhang);
                $('#Loai').val(doc.data().loai);  
                $('#SoLuong').val(doc.data().soluong);
                $('#GiaBan').val(doc.data().giaban); 
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
        if(isset($_POST['NgayXuat'])){
    ?>
            <script>
                var docRef = db.collection("xuat").doc("<?php echo $_POST['id'];?>");
                
                    docRef.update({
                    ngayxuat: "<?php echo $_POST['NgayXuat'];?>",
                    tenhang: "<?php echo $_POST['TenHangHoa'];?>",
                    loai: "<?php echo $_POST['Loai'];?>",
                    soluong: "<?php echo $_POST['SoLuong'];?>",
                    giaban: "<?php echo $_POST['GiaBan'];?>",
                    thanhtien: "<?php echo $_POST['ThanhTien'];?>",  
                })
                .then(() => {
                    //console.log("Document successfully updated!");
                    location.href="HH_DS_Xuat.php";
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