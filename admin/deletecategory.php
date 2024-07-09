<?php

require('../config/constant.php');

    $ID = $_GET['ID'];

    $del = "DELETE FROM `category` WHERE `ID`='$ID'";

    $run = mysqli_query($conn,$del);

    if($run==TRUE)
    {
        echo "<script>
                alert('Category Deteled')
                window.location.href='configcategory.php';
            </script>";
    }
    else
    {
        echo "<script>
                alert('Category Not Detele')
                window.location.href='configcategory.php';
            </script>";
    }


?>