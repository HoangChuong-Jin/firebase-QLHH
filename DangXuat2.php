<div id="LogOn" class="content fade">
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

    <script>
        firebase.auth().signOut();
        location.href='index.php';

        firebase.auth().signOut();
        location.href='index.php';
    </script>
</div>

