<!-- Phần Xuất hàng -->
<div id="three" class="content fade">

    <h1> Phần Xuất Hàng </h1>
    <div class="card mt-3">
        <h5 class="card-header">Thông tin xuất hàng hóa</h5>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="NgayXuat">Ngày Xuất</label>
                    <input type="text" class="form-control" id="NgayXuat" name="NgayXuat" required />
                </div>

                <div class="form-group">
                    <label for="TenHangHoa">Tên Hàng hóa</label>
                    <input type="text" class="form-control" id="TenHangHoa" name="TenHangHoa" required />
                </div>

                <div class="form-group">
                    <label for="Loai">Loại</label>
                    <input type="text" class="form-control" id="Loai" name="Loai" required />
                </div>

                <div class="form-group">
                    <label for="SoLuong">Số lượng</label>
                    <input type="number" max= "1000" min = "0" class="form-control" id="SoLuong" name="SoLuong" required />
                </div>

                <div class="form-group">
                    <label for="GiaBan">Giá bán</label>
                    <input type="text" class="form-control" id="GiaBan" name="GiaBan" required />
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