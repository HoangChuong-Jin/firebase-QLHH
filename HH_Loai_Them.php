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
<!-- Phần Loại Thêm-->
                <div id="LoaiThem">
                    <h1> Phần thêm loại hàng </h1>

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <?php include "Javascript.php"; ?>
    
    <?php
    if(isset($_POST['tenloai'])){
    ?>
        <script>
            db.collection("phanloai").add({
                tenloai: "<?php echo $_POST['tenloai'];?>",
                ghichu: "<?php echo $_POST['ghichu'];?>"
            })
            .then((docRef) => {
                //console.log("Document written with ID: ", docRef.id);
                location.href="HH_Loai.php";
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