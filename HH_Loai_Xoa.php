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

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    
        <script>
            db.collection("phanloai").doc("<?php echo $_GET['id'];?>").delete().then(() => {
            //console.log("Document successfully deleted!");
                location.href="HH_Loai.php";
            }).catch((error) => {
                console.error("Error removing document: ", error);
            });

        </script>
    
</body>
</html>