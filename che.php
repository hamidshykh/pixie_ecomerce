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


                <button type="button" class="btn btn-success"><a href="pymentmethod.php" class="text-white"><span>Previous step</span></a></button>


                <!-- <button class="btn btn-success px-3">Pay Now</button> -->
                <input type="submit" class="btn btn-success px-3" name="submit" value="Pay Now">


                

            </div>

            </form>

</div>


</div>

<?php 

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

        function sendMail($Email)
        {
            //Load Composer's autoloader
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
            require 'PHPMailer/Exception.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(TRUE);           
            
        try {
            //Server settings            
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'abdullahkhanstft@gmail.com';           //SMTP username
            //Gmail account Password: (vdufjyyjwjdymzag)
            $mail->Password   = 'vdufjyyjwjdymzag';                     //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('abdullahkhanstft@gmail.com','Pixie');
            $mail->addAddress($Email);     //Add a recipient
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification from True Dreams Digtal Academy';
            $mail->Body    =  "<span style='font-size:large; font-family:Cursive; font-weight:400px; color:#427BCB;'>
                                Thanks for doing business with us from Pixie.com
                               </span>                              
                               ";
            $mail->send();
            return true;

            }
        catch (Exception $e) {
                  
                return false;

          }
        } 



    if(isset($_POST['submit']))
    {
        if(isset($_SESSION['cart']))
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

                $UName = $_POST['UName'];
                $Email = $_POST['Email'];
                $Phone = $_POST['Phone'];
                $CNumber = $_POST['CNumber'];
                $Expiry = $_POST['Expiry'];
                $CW = $_POST['CW'];
                $Street = $_POST['Street'];
                $City = $_POST['City'];
                $State = $_POST['State'];
                $ZipCode = $_POST['ZipCode'];

                $sql = "INSERT INTO `productorder`(`Name`, `Email`, `Phone`, `CNumber`, `Expiry`, `CW`, `Street`, `City`, `State`, `ZipCode`, `PTitle`, `PName`, `PDesc`, `Pimg`, `PCat`, `PQun`, `PPrice`, `TPrice`) VALUES ('$UName','$Email','$Phone','$CNumber','$Expiry','$CW','$Street','$City','$State','$ZipCode','$Title','$Name','$Desc','$image','$Cat','$Qun','$Price','$TPrice')";
                $res = mysqli_query($conn,$sql) && sendMail($_POST['Email']);

                  
       }
       
        echo "<script>
                alert('place Your Order')
                window.location.href='index.php';
            </script>";

        unset($_SESSION['cart']);

}

?>