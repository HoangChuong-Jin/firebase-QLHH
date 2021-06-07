<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include "header.php"; ?>

</head>
<body>

    <div class="wrapper">
        <!-- Menu -->
        <?php include "Menu.php"; ?> 
        
    </div>
    <div class="right-content">
        <div class="card mt-3">

            <h5 class="card-header">Xử lý đăng xuất</h5>
            <div class="card-body">             
                <p class="card-text">Đang xử lý đăng xuất....</p>
                <?php
                    //Xoá SESSTION
                    unset($_SESSION['uid']);
                    unset($_SESSION['email']);
                ?>
                
            </div>

        </div>
    </div>
    <?php include "Javascript.php"; ?>
    <script>
        firebase.auth().signOut();
        location.href='index.php';
    </script>

</body>
</html>
