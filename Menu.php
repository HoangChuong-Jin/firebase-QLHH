<div class="left-side">
    <div class="logo">
			<img src="img/H2C.png" alt="" >
    </div>
    <div class="left-content">
        <ul role="tablist">
            
            <li role="presentation" class="active"><a href="#one" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-home"></i></span>Home</a></li>
            
        <?php 
            session_start();
            if(!isset($_SESSION['uid']))
            {
        ?>
            <li role="presentation"><a href="#LogIn" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-home"></i></span>Đăng nhập</a></li>
        <?php
            }
            else
            {
        ?>

            <li role="presentation" ><a href="#two" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-sign-in"></i></span>Nhập Hàng</a></li>

            <li role="presentation" ><a href="#three" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-sign-out"></i></span>Xuất Hàng</a></li>

            <li role="presentation" ><a href="#four" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-gift"></i></span>Hàng Hóa</a></li>

            <li role="presentation" ><a href="#six" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-th"></i></span>Phân Loại</a></li>

            <li role="presentation" ><a href="#support" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-support"></i></span>Supports</a></li>

            <li role="presentation" ><a href="#LogOn" aria-controls="home" role="tab" data-toggle="tab" onclick="myFunction()"><span><i class="fa fa-power-off"></i></span><?php echo $_SESSION['email'] ?> [Đăng xuất]</a></li>
        <?php
        }
        ?>
        </ul>
    </div>
    <div class="copyright">
        <p> <a href="">@Hằng </a> <a href="">@Hương </a> <a href="">@Chương</a>
    </div>
</div>

<script>
    function myFunction() {
        <?php
            //Xoá SESSTION
            unset($_SESSION['uid']);
            unset($_SESSION['email']);
        ?>

        firebase.auth().signOut();
        location.href='index.php';
    }
</script>