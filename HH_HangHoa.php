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

                    <li role="presentation" ><a href="HH_Xuat.php"><span><i class="fa fa-sign-out"></i></span>Xuất Hàng</a></li>

                    <li role="presentation" class="active"><a href="HH_HangHoa.php"><span><i class="fa fa-gift"></i></span>Hàng Hóa</a></li>

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
<!-- Phần Hàng hóa -->
                <div id="four">

                    <h1> Phần Hàng hóa</h1>

                    <a href="HH_HangHoa_Them.php"><span><i class="fa fa-plus"></i></span> Thêm hàng hóa</a>
                    <br></br>

                    <div>Thông tin hàng hóa.</div>
                    <table class="table table-bordered table-hover table-sm mb-0">
                        <thead>
                            <tr>
                                <th width="5%">STT</th>
                                <th width="20%">Tên Hàng Hóa</th>
                                <th width="10%">Loại</th>
                                <th width="10%">Nhà sản xuất</th>
                                <th width="10%">Số lượng</th>
                                <th width="10%">Giá gốc/ 1SP</th>

                                <th width="5%">Sửa</th>
                                <th width="5%">Xóa</th>
                            </tr>
                        </thead>
                        <tbody id= "HienThi" >
                        </tbody>   
                    </table>
                    
                </div>

            </div>
        </div>
    </div>
<!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "Javascript.php"; ?>
    <script>
        db.collection("hanghoa").get().then((querySnapshot) => {
                var stt=1;
                var output= "";
                querySnapshot.forEach((doc) => {
                    output += '<tr>';
                        output += '<td>'+stt+'</td>';
                        output += '<td>'+doc.data().tenhang+'</td>';
                        output += '<td>'+doc.data().loai+'</td>';
                        output += '<td>'+doc.data().nhasanxuat+'</td>';
                        output += '<td>'+doc.data().soluong+'</td>';
                        output += '<td>'+doc.data().giagoc+'</td>';
                    output += '</tr>'; 
                    stt++;

            });
            //console.log(output);
            $('#HienThi').html(output);
        });
    </script> 
</body>
</html>
