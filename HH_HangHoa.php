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
<!-- Phần Hàng hóa -->
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
                                <th width="10%">Đơn vị tính</th>
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
<!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
                        output += '<td>'+doc.data().donvitinh+'</td>';
                        output += '<td>'+doc.data().soluong+'</td>';
                        output += '<td>'+doc.data().giagoc+'</td>';
                        output+='<td><a href="HH_HangHoa_Sua.php?id='+doc.id+'"><i class="fa fa-edit"></i></a></td>';
                        output+='<td><a onclick="return confirm(\'Bạn có muốn xóa hàng hóa '+doc.data().tenhang+' không ???\')" href="HH_HangHoa_Xoa.php?id='+doc.id+'"><i class="fa fa-trash"></a></td>';
                    output += '</tr>'; 
                    stt++;

            });
            //console.log(output);
            $('#HienThi').html(output);
        });
    </script> 
</body>
</html>
