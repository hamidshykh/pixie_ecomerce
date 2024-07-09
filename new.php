<?php

include('config/constant.php');

foreach($_SESSION['cart'] as $k => $row)
{
    
    $_SESSION['ID'];
    $_SESSION['Title'];
    $_SESSION['Name'];
    $_SESSION['Desc'];
    $_SESSION['image'];
    $_SESSION['Cat'];
    $_SESSION['Qun'];
    $_SESSION['Price'];
    $_SESSION['TPrice'];

    $_SESSION['UName'];
    $_SESSION['Email'];
    $_SESSION['Phone'];
    $_SESSION['CNumber'];
    $_SESSION['Expiry'];
    $_SESSION['CW'];
    $_SESSION['Street'];
    $_SESSION['City'];
    $_SESSION['State'];
    $_SESSION['ZipCode'];
   echo"<br>";

    // $sql = "INSERT INTO `productorder`(`Name`, `Email`, `Phone`, `CNumber`, `Expiry`, `CW`, `Street`, `City`, `State`, `ZipCode`, `PTitle`, `PName`, `PDesc`, `Pimg`, `PCat`, `PQun`, `PPrice`, `TPrice`) VALUES ('$UName','$Email','$Phone','$CNumber','$Expiry','$CW','$Street','$City','$State','$ZipCode','$Title','$Name','$Desc','$image','$Cat','$Qun','$Price','$TPrice')";
    // $res = mysqli_query($conn,$sql) && sendMail($_POST['Email']);

      
}

?>