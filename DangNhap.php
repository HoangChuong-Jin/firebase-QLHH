<!-- Phần đăng nhập -->
<div id="LogIn" class="content fade">
    <h1> Phần Đăng nhập </h1>

    <div class="card mt-3">
        <h5 class="card-header">Thông tin nhập hàng hóa</h5>
        <div class="card-body">
            <form action="DangNhap_Xuly.php" method="post">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>

                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" class="pswrd" id="Password" name="Password" required />
                    <span class="show"></span>
                </div>
                
                <button type="submit" class="btn btn-primary"><i class=""></i> Login</button>
            </form>
        </div>
    </div>
    <script src="js/Login.js"></script>
</div>