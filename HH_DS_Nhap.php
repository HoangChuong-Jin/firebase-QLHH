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
                    <h1> Danh sách nhập hàng </h1>

                    <a href="HH_DS_Xuat.php"><span><i class="fa fa-file"></i></span> Danh sách xuất hàng</a>

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
<?php include "Javascript.php"; ?>
     
    
</body>
</html>
