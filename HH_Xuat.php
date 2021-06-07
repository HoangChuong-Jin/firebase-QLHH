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
<!-- Phần Xuất hàng -->
                <div id="three">

                    <h1> Phần Xuất Hàng </h1>
                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin xuất hàng hóa</h5>
                        <div class="card-body">
                            <form action="HH_Xuat.php" method="post">
                                <div class="form-group">
                                    <label for="NgayXuat">Ngày Xuất</label>
                                    <input type="date" class="form-control" id="NgayXuat" name="NgayXuat" required />
                                </div>

                                <div class="form-group">
                                    <label for="TenHangHoa">Tên Hàng hóa</label>
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
                                    <input type="number" max= "1000" min = "0" class="form-control" id="SoLuong" name="SoLuong" 
                                    onchange="tinh()" required />
                                </div>

                                <div class="form-group">
                                    <label for="GiaBan">Giá bán</label>
                                    <input type="text" class="form-control" id="GiaBan" name="GiaBan" onchange="tinh()" required />
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
    <script>
        function tinh(){
            let tong
            var x = document.querySelector('#SoLuong').value;
            var y = document.getElementById("GiaBan").value;

            x = parseFloat(x); 
            y = parseFloat(y);
            tong = x * y ;
            document.getElementById("ThanhTien").value = tong;
        } 

    </script>
    <script>
       let output
       db.collection("phanloai").get().then((querySnapshot) => {
            querySnapshot.forEach((doc) => {
            output+='<option value="'+doc.data().tenloai+'">'+doc.data().tenloai+'</option>';
        });
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
            db.collection("xuat").add({
                ngayxuat: "<?php echo $_POST['NgayXuat'];?>",
                tenhang: "<?php echo $_POST['TenHangHoa'];?>",
                loai: "<?php echo $_POST['Loai'];?>",
                soluong: "<?php echo $_POST['SoLuong'];?>",
                giaban: "<?php echo $_POST['GiaBan'];?>",
                thanhtien: "<?php echo $_POST['ThanhTien'];?>" 
            })
            .then((docRef) => {
                //console.log("Document written with ID: ", docRef.id);
                location.href="HH_DS_Xuat.php";
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

