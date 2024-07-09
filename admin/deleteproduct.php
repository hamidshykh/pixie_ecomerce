<?php

require('../config/constant.php');

    $ID = $_GET['ID'];

    $del = "DELETE FROM `product` WHERE `ID`='$ID'";

    $run = mysqli_query($conn,$del);

    if($run==TRUE)
    {
        echo "<script>
                alert('Product Deteled')
                window.location.href='configproduct.php';
            </script>";
    }
    else
    {
        echo "<script>
                alert('Product Not Detele')
                window.location.href='configproduct.php';
            </script>";
    }


?>