
<?php include('Partial/header.php'); ?>



<div class="container mt-5 px-5">

<div class="row">

<div class="col-md-8 m-auto">

<div class="mb-4">

    <h2>Confirm order and pay</h2>
<span>please make the payment, after that you can enjoy all the features and benefits.</span>
    
</div>
    
<form action="" method="POST">
    <div class="card p-3">

        <h6 class="text-uppercase">Payment details</h6>
        <div class="inputbox mt-3">
            <input type="text" name="UName" class="form-control" required="required"> <span>Name on card</span>
        </div>

        <div class="row">
            <div class="col-7">
                <div class="inputbox mt-3">
                    <input type="text" name="Email" class="form-control" required="required"> <span>Email Address</span>
                </div>
            </div>
            <div class="col-5">
                <div class="inputbox mt-3">
                    <input type="text" name="Phone" class="form-control" required="required"> <span>Mobile no Valid</span>
                </div>
            </div>
        </div>        


        <div class="row">
            <div class="col-md-6">
                <div class="inputbox mt-3 mr-2">
                    <input type="text" name="CNumber" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 
                </div>                
            </div>

            <div class="col-md-6">
                 <div class="d-flex flex-row">
                    <div class="inputbox mt-3 mr-2">
                        <input type="text" name="Expiry" class="form-control" required="required"> <span>Expiry</span> 
                    </div>

                  <div class="inputbox mt-3 mr-2">
                    <input type="text" name="CW" class="form-control" required="required"> <span>CVV</span>
                  </div>
                     

                 </div>
                

            </div>
            

        </div>



        <div class="mt-4 mb-4">

            <h6 class="text-uppercase">Billing Address</h6>


            <div class="row mt-3">

                <div class="col-md-6">

                    <div class="inputbox mt-3 mr-2">
                        <input type="text" name="Street" class="form-control" required="required"> <span>Street Address</span>
                    </div>
                    

                </div>


                 <div class="col-md-6">

                    <div class="inputbox mt-3 mr-2">
                        <input type="text" name="City" class="form-control" required="required"> <span>City</span>
                    </div>
                    

                </div>


                

            </div>


            <div class="row mt-2">

                <div class="col-md-6">

                    <div class="inputbox mt-3 mr-2">
                        <input type="text" name="State" class="form-control" required="required"> <span>State/Province</span>
                    </div>
                    

                </div>


                 <div class="col-md-6">

                    <div class="inputbox mt-3 mr-2">
                        <input type="text" name="ZipCode" class="form-control" required="required"> <span>Zip code</span>
                    </div>
                    

                </div>


                

            </div>

        </div>

    </div>

    <div class="mt-4 mb-4 d-flex justify-content-between">


                <button type="button" class="btn btn-success"><a href="pymentmethod.php" id="back"><span>Previous step</span></a></button>


                <!-- <button class="btn btn-success px-3">Pay Now</button> -->
                <input type="submit" class="btn btn-success px-3" name="submit" value="Pay Now">


                

            </div>

            </form>

</div>


</div>

<?php 

    if(isset($_POST['submit']))
    {
        if(isset($_SESSION['cart']))
        {
            foreach($_SESSION['cart'] as $k => $row)
            {
                
                $ID = $row['ID'];
                $Title = $row['Title'];
                $Name = $row['Name'];
                $Desc = $row['Desc'];
                $image = $row['image'];
                $Cat = $row['Cat'];
                $Qun = $row['quantity'];
                $Price = $row['Price'];
                $TPrice = $row['quantity'] * $row['Price'];

                $UName = $_POST['Name'];
                $Email = $_POST['Email'];
                $Phone = $_POST['Phone'];
                $CNumber = $_POST['CNumber'];
                $Expiry = $_POST['Expiry'];
                $CW = $_POST['CW'];
                $Street = $_POST['Street'];
                $City = $_POST['City'];
                $State = $_POST['State'];
                $ZipCode = $_POST['ZipCode'];

                $sql = "INSERT INTO `productorder`(`Name`, `Email`, `Phone`, `CNumber`, `Expiry`, `CW`, `Street`, `City`, `State`, `ZipCode`, `PTitle`, `PName`, `PDesc`, `Pimg`, `PCat`, `PQun`, `PPrice`, `TPrice`) VALUES ('$Name','$Email','$Phone','$CNumber','$Expiry','$CW','$Street','$City','$State','$ZipCode','$Title','$Name','$Desc','$image','$Cat','$Qun','$Price','$TPrice')";
                $res = mysqli_query($conn,$sql);

                  
       }
       
       echo "<script>
                alert('place Your Order')
                window.location.href='index.php';
            </script>";


    }

}

?>