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
<!-- Phần Home -->
                <div id="one" class="content fade">
				    <img id="TieudeLG" src="img/H2C.png" alt="" >
				    <h1>QUẢN LÝ HÀNG HÓA</h1>
				    <p> Đây là phần thông tin trang web của tui mình OK !</p>

				    <p>Phần giới thiệu t định viết tử như thế này <a target="target" href="https://fastwork.vn/fastsale/">https://fastwork.vn/fastsale/</a></p>
				</div>
<!-- Phần Dang nhap -->
                <div id="LogIn" class="content fade active in">
			        <div class="card mt-3">
						<h5 class="card-header">Xử lý đăng nhập</h5>
						<div class="card-body">
							<div id="KetQua">
								<p class="card-text">Đang xử lý đăng nhập....</p>
								<div class="alert alert-danger alert-dismissible fade show mb-0" role ="alert">
									<span id="ThongBao"></span>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>	
								</div>
							</div>
						</div>
					</div>
				</div>
				
            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>

    <script>
		$('#KetQua').hide();
		var email='<?php echo $_POST['email']; ?>';
		var password='<?php echo $_POST['Password']; ?>';
		firebase.auth().signInWithEmailAndPassword(email,password)
			.then((userCredential)=>{
				var user = userCredential.user;
				$.ajax({
					type:'POST',
					url:'DangNhap_ajax.php',
					data: {
						uid: user.uid,
						email: user.email
					},
					dataType:'text',
					success: function(response) {
						location.href='index.php';
					}
				});
			})
			.catch((error)=>{
				$('.card-text').hide();
				$('#KetQua').show();
				$('#ThongBao').html('Lỗi '+error.code+': '+error.message);
		});
	</script>
</body>
</html>
