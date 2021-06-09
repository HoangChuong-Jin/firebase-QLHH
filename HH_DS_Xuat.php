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
<!-- Phần Phân loại-->
                <div id="six">
                    <a href="HH_DS_Nhap.php"><span><i class="fa fa-file"></i></span> Danh sách nhập hàng</a>
                    <a href="HH_DS_Xuat.php"><span> &nbsp <i class="fa fa-file"></i></span> Danh sách xuất hàng</a>

                    <hr>

                    <h1> Danh sách xuất hàng </h1>

                    <br></br>
                    <div>Thông tin loại</div>
                    <table class="table table-bordered table-hover table-sm mb-0">
                        <thead>
                            <tr>
                                <th width="5%">STT</th>
                                <th width="20%">Ngày xuất</th>
                                <th width="20%">Tên Hàng Hóa</th>
                                <th width="10%">Loại</th>
                                <th width="10%">Số lượng</th>
                                <th width="10%">Giá bán/ 1SP</th>
                                <th width="10%">Thành tiền</th>

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
<?php include "Javascript.php"; ?>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <?php include "Javascript.php"; ?>
    <script>
        db.collection("xuat").get().then((querySnapshot) => {
                var stt=1;
                var output= "";
                querySnapshot.forEach((doc) => {
                    output += '<tr>';
                        output += '<td>'+stt+'</td>';
                        output += '<td>'+doc.data().ngayxuat+'</td>';
                        output += '<td>'+doc.data().tenhang+'</td>';
                        output += '<td>'+doc.data().loai+'</td>';
                        output += '<td>'+doc.data().soluong+'</td>';
                        output += '<td>'+doc.data().giaban+'</td>';
                        output += '<td>'+doc.data().thanhtien+'</td>';
                        output+='<td><a href="HH_Xuat_Sua.php?id='+doc.id+'"><i class="fa fa-edit"></i></a></td>';
                        output+='<td><a onclick="return confirm(\'Bạn có muốn xóa đơn xuất ngày: '+doc.data().ngayxuat+' không ???\')" href="HH_Xuat_Xoa.php?id='+doc.id+'"><i class="fa fa-trash"></a></td>';
                    output += '</tr>'; 
                    stt++;

            });
            //console.log(output);
            $('#HienThi').html(output);
        });
    </script> 
    
</body>
</html>
