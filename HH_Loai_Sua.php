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
<!-- Phần Sửa Thêm-->
                <div id="LoaiThem">
                    <h1> Phần Sửa loại hàng </h1>

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

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
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
    <script>
        var docRef = db.collection("phanloai").doc("<?php echo $_GET['id'];?>");
        docRef.get().then((doc) => {
            if (doc.exists) {
                //console.log("Document data:", doc.data
                $('#id').val(doc.id);
                $('#tenloai').val(doc.data().tenloai);
                $('#ghichu').val(doc.data().ghichu);  
            } else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        }).catch((error) => {
            console.log("Error getting document:", error);
        });
    </script>
    <?php
        if(isset($_POST['tenloai'])){
    ?>
            <script>
                var docRef = db.collection("phanloai").doc("<?php echo $_POST['id'];?>");
                
                    docRef.update({
                    tenloai: "<?php echo $_POST['tenloai'];?>",
                    ghichu: "<?php echo $_POST['ghichu'];?>" 
                })
                .then(() => {
                    //console.log("Document successfully updated!");
                    location.href="HH_Loai.php";
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