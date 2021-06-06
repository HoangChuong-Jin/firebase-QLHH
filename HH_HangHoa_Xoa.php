<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include "header.php"; ?>

</head>
<body>

    <div class="wrapper">
        <!-- Menu -->
        <div class="left-side">
            <div class="logo">
                    <img src="img/H2C.png" alt="" >
            </div>
            <div class="left-content">
                <?php include "Menu.php"; ?> 
            </div>
            <div class="copyright">
                <p> <a href="">@Hằng </a> <a href="">@Hương </a> <a href="">@Chương</a>
            </div>
        </div>
        
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    <?php include "javascript.php"; ?>
        <script>
            db.collection("hanghoa").doc("<?php echo $_GET['id'];?>").delete().then(() => {
            //console.log("Document successfully deleted!");
                location.href="HH_HangHoa.php";
            }).catch((error) => {
                console.error("Error removing document: ", error);
            });

        </script>
    
</body>
</html>