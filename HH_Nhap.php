<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include "header.php"; ?>

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <?php include "Javascript.php"; ?>
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
                            <form action="HH_Nhap.php" method="post">
                                <div class="form-group">
                                    <label for="NgayNhap">Ngày Nhập</label>
                                    <input type="date" class="form-control" id="NgayNhap" name="NgayNhap" required />
                                </div>

                                <div class="form-group">
                                    <label for="TenHangHoa">Tên hàng hóa</label>
                                    <select type="text" class="form-control" id="TenHangHoa" name="TenHangHoa" required >  
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Loai">Loại</label>
                                    <select type="text" class="form-control" id="Loai" name="Loai" required >  
                                    </select>
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

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Nhập Hàng</button>
                            </form>
                        </div>
                    </div>
                </div> 

            </div>
        </div>
    </div>

<!-- Javascript -->   
    <script>
       let output
       db.collection("phanloai").get().then((querySnapshot) => {
            querySnapshot.forEach((doc) => {
            output+='<option value="'+doc.data().tenloai+'">'+doc.data().tenloai+'</option>';
        })
            document.getElementById("Loai").innerHTML = output
        }); 
    </script>
    <script>
       let output2
       db.collection("hanghoa").get().then((querySnapshot) => {
            querySnapshot.forEach((doc) => {
            output2+='<option value="'+doc.data().tenhang+'">'+doc.data().tenhang+'</option>';
        });
            console.log(output2);
            document.getElementById("TenHangHoa").innerHTML = output2
        }); 
    </script>
    <?php
    if(isset($_POST['TenHangHoa'])){
    ?>
        <script>
            db.collection("nhap").add({
                ngaynhap: "<?php echo $_POST['NgayNhap'];?>",
                tenhang: "<?php echo $_POST['TenHangHoa'];?>",
                loai: "<?php echo $_POST['Loai'];?>",
                soluong: "<?php echo $_POST['SoLuong'];?>",
                giagoc: "<?php echo $_POST['GiaGoc'];?>",
                thanhtien: "<?php echo $_POST['ThanhTien'];?>" 
            })
            .then((docRef) => {
                //console.log("Document written with ID: ", docRef.id);
                location.href="HH_DS_Nhap.php";
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





