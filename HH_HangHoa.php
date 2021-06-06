<!-- Phần Hàng hóa -->
<div id="four" class="content fade">

    <h1> Phần Hàng hóa</h1>

    <a href="#HangHoaThem" style="" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-plus"></i></span> Thêm hàng hóa</a>
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
</div>
