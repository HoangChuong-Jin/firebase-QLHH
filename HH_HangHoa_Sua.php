<!-- Phần nhập hàng hóa sửa -->
<div id="HangHoaSua" class="content fade">
    <h1> Phần Sửa hàng hóa </h1>

    <a href="#four" style="" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-gift"></i></span> Danh sách hàng hóa</a> <br></br>

    <div class="card mt-3">
        <h5 class="card-header">Thông tin nhập hàng hóa</h5>
        <div class="card-body">
            <form action="" method="post">

                <div class="form-group">
                    <label for="TenHangHoa">Tên hàng hóa</label>
                    <input type="text" class="form-control" id="TenHangHoa" name="TenHangHoa" required />
                </div>

                <div class="form-group">
                    <label for="Loai">Loại</label>
                    <input type="text" class="form-control" id="Loai" name="Loai" required />
                </div>

                <div class="form-group">
                    <label for="NhaSanXuat">Nhà sản xuất</label>
                    <input type="text" class="form-control" id="NhaSanXuat" name="NhaSanXuat" required />
                </div>

                <div class="form-group">
                    <label for="SoLuong">Số lượng</label>
                    <input type="text" class="form-control" id="SoLuong" name="SoLuong" required />
                </div>

                <div class="form-group">
                    <label for="GiaGoc">Giá gốc</label>
                    <input type="text" class="form-control" id="GiaGoc" name="GiaGoc" required />
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
            </form>
        </div>
    </div>
</div>