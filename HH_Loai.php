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
                    <h1> Loại hàng hóa </h1>

                    <a href="HH_Loai_Them.php"><span><i class="fa fa-plus"></i></span> Thêm loại</a>

                    <br></br>
                    <div>Thông tin loại</div>
                    <table class="table table-bordered table-hover table-sm mb-0">
                        <thead>
                            <tr>
                                <th width="10%">STT</th>
                                <th width="35%">Tên loại</th>
                                <th width="35%">Ghi chú</th>

                                <th width="10%">Sửa</th>
                                <th width="10%">Xóa</th>
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
    <?php include "Javascript.php"; ?>
    <script>
        db.collection("phanloai").get().then((querySnapshot) => {
                var stt=1;
                var output= "";
                querySnapshot.forEach((doc) => {
                    output += '<tr>';
                        output += '<td>'+stt+'</td>';
                        output += '<td>'+doc.data().tenloai+'</td>';
                        output += '<td>'+doc.data().ghichu+'</td>';
                        output+='<td><a href="HH_Loai_Sua.php?id='+doc.id+'"><i class="fa fa-edit"></i></a></td>';
                        output+='<td><a onclick="return confirm(\'Bạn có muốn xóa loại '+doc.data().tenloai+' không ???\')" href="HH_Loai_Xoa.php?id='+doc.id+'"><i class="fa fa-trash"></a></td>';
                    output += '</tr>'; 
                    stt++;

            });
            //console.log(output);
            $('#HienThi').html(output);
        });
    </script> 
    
</body>
</html>
