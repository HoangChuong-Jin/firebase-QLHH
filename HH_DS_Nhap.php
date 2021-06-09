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
                    
                    <a href="HH_DS_Xuat.php"><span> &nbsp <i class="fa fa-file"></i></span> Danh sách xuất hàng</a>

                    <hr>

                    <h1> Danh sách nhập hàng </h1>

                    <br></br>
                    <div>Thông tin nhập</div>
                    <table class="table table-bordered table-hover table-sm mb-0">
                        <thead>
                            <tr>
                                <th width="5%">STT</th>
                                <th width="20%">Ngày nhập</th>
                                <th width="20%">Tên Hàng Hóa</th>
                                <th width="10%">Loại</th>
                                <th width="10%">Số lượng</th>
                                <th width="10%">Giá gốc/ 1SP</th>
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
    <script>
        db.collection("nhap").get().then((querySnapshot) => {
                var stt=1;
                var output= "";
                querySnapshot.forEach((doc) => {
                    output += '<tr>';
                        output += '<td>'+stt+'</td>';
                        output += '<td>'+doc.data().ngaynhap+'</td>';
                        output += '<td>'+doc.data().tenhang+'</td>';
                        output += '<td>'+doc.data().loai+'</td>';
                        output += '<td>'+doc.data().soluong+'</td>';
                        output += '<td>'+doc.data().giagoc+'</td>';
                        output += '<td>'+doc.data().thanhtien+'</td>';
                        output+='<td><a href="HH_Nhap_Sua.php?id='+doc.id+'"><i class="fa fa-edit"></i></a></td>';
                        output+='<td><a onclick="return confirm(\'Bạn có muốn xóa đơn nhập: '+doc.data().ngaynhap+' không ???\')" href="HH_Nhap_Xoa.php?id='+doc.id+'"><i class="fa fa-trash"></a></td>';
                    output += '</tr>'; 
                    stt++;

            });
            //console.log(output);
            $('#HienThi').html(output);
        });
    </script>     
    
</body>
</html>
