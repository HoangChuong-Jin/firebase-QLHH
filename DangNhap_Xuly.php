<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include "header.php"; ?>

</head>
<body>
	<?php include "Javascript.php"; ?>
    <div class="wrapper">
        <!-- Menu -->
		<?php include "Menu.php"; ?>
        
        <div class="right-side">
            <div class="right-content">
<!-- Phần Dang nhap -->
	            <div class="card mt-3">
					<h5 class="card-header">Xử lý đăng nhập</h5>
					<div class="card-body">
						<div id="KetQua">
							<span class="card-text" id="card-text" >Đã có lỗi xảy ra</span>
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

<!-- Javascript -->
    <script>
		$('#KetQua').hide();
		$('#card-text').show();
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
				$('#KetQua').show();
				$('#ThongBao').html('Lỗi '+error.code+': '+error.message);
		});
	</script>
</body>
</html>
