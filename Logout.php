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