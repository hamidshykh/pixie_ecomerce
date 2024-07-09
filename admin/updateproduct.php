<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include('../partial/admin-header.php') ?>
      <!-- content start -->


<?php

    $ID = $_GET['ID'];

    $select = "SELECT * FROM `product` WHERE `ID`= $ID";

    $run = mysqli_query($conn,$select);

    $rowS = mysqli_num_rows($run);

    if($rowS)
    {
        while($row = mysqli_fetch_assoc($run))
        {
            $ID = $row['ID'];
            $Title  = $row['Product_title'];
            $Name = $row['ProductName'];
            $Desc = $row['ProductDetails'];
            $Stoct = $row['InStock'];
            $Date = $row['DateAndTime'];
            $Cat = $row['Category'];
            $image = $row['image'];
            $Price = $row['Price'];
?>

<br><br><br>

           
<div class="container mt-5 h-100 w-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-lg-12 col-xl-11">
      <div class="card text-black" style="border-radius: 25px;">
        <div class="card-body">



          <div class="row justify-content-center">            
            <div class="col-md-6 col-lg-5 order-2 order-lg-1" style="margin:auto;">

              <p class="h2 fw-bold col-12 mb-3 mx-1 mx-md-4"><b>Add Product</b></p>

              <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">
              
                <div class="d-flex flex-row align-items-center mb-4">
                  <div class="form-outline flex-fill mb-0">
                    <input type="text" id="form3Example1c" class="form-control" name="Title" placeholder="Product Title" value="<?php echo $Title ?>"/>
                    <label class="form-label" for="form3Example1c">Product Title</label>
                  </div>
                </div>                  

                <div class="d-flex flex-row align-items-center mb-4">
                  <div class="form-outline flex-fill mb-0">
                    <input type="text" id="form3Example1c" class="form-control" name="Name" placeholder="Product Name" value="<?php echo $Name ?>"/>
                    <label class="form-label" for="form3Example1c">Product Name</label>
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <div class="form-outline flex-fill mb-0">                      
                    <textarea name="Desc" id="Desc" class="form-control" placeholder="Product Description"><?php echo $Desc ?></textarea>
                    <label class="form-label" for="form3Example1c">Product Description</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                      <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                              <input type="number" id="form3Example1c" class="form-control" name="Stock" placeholder="Category" value="<?php echo $Stoct ?>"/>
                              <label class="form-label" for="form3Example1c">In Stock</label>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                  <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                              <input type="file" id="form3Example1c"  name="image"/>
                              <label class="form-label" for="form3Example1c">Choose</label>
                          </div>
                      </div>
                  </div>
                </div>    
                
                <div class="d-flex flex-row align-items-center mb-4">
                  <div class="form-outline flex-fill mb-0">
                    <input type="text" id="form3Example1c" class="form-control" name="Price" placeholder="Product Price" value="<?php echo $Price ?>"/>
                    <label class="form-label" for="form3Example1c">Product Price</label>
                  </div>
                </div>

                <div class="d-flex justify-content-center mb-3 mb-lg-4">
                  <input type="submit" class="btn btn-primary btn-lg text-white" name="sumbit" value="Update Product">
                </div>            

              </form>

            </div> 

            <div class="col-md-6 col-lg-5 order-2 order-lg-2" style="margin:auto;">
            <img src="<?php echo $url,$image ?>" class="col-12" height="100vh">
            </div>

          </div>                
        </div>
      </div>      
    </div>
  </div>
</div>
<!-- <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <img src="../assets/images/banner-bg.jpg" height="80px" width="100px">
                </div> -->


            <?php

        }
    }



?>

      <!-- content end -->
      
    <?php include('../partial/admin-footer.php') ?>    
  
</body>
</html>

<?php

            if(isset($_POST['sumbit']))
            {
                
                $Title = $_POST['Title'];
                $Name = $_POST['Name'];
                $Cat = $_POST['Cat'];
                $Desc = $_POST['Desc'];
                $Stock = $_POST['Stock'];
                $def = bin2hex(random_bytes(3));
                $D = date('d-m-y h:i:s');
                $Price = $_POST['Price'];
                
                if(empty($_POST['image']))
                {
                    $sql1 = mysqli_query($conn,"UPDATE `product` SET `Product_title`='$Title',`ProductName`='$Name',`ProductDetails`='$Desc',`InStock`='$Stock',`DateAndTime`='$D',`Price`='$Price' WHERE `ID` = $_GET[ID]");

                    if($sql1==TRUE)
                    {
                      echo "<script>
                          alert('Product update seccuesfully');
                          window.location.href='configproduct.php';
                      </script>";
                    }
                }   

                if(isset($_FILES['image']))
                {
                    $img_name = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);

                    $extention = ['png', 'jpg', 'jpeg'];
                      if(in_array($img_ext, $extention)===TRUE)
                      {
                          $time = time();
                          $new_img_name = $time.$img_name;

                          if(move_uploaded_file($tmp_name, "Upload/".$new_img_name))
                          {                              
                              $random_id = rand(time(), 10000000);

                              $sql = mysqli_query($conn,"UPDATE `product` SET `Product_title`='$Title',`ProductName`='$Name',`ProductDetails`='$Desc',`InStock`='$Stock',`DateAndTime`='$D',`image`='$new_img_name', `Price`='$Price' WHERE `ID` = $_GET[ID]");

                              if($sql==TRUE)
                              {
                                echo "<script>
                                    alert('Product update seccuesfully');
                                    window.location.href='configproduct.php';
                                </script>";
                              }
                              else
                              {
                                echo "<script>
                                    alert('Product not update');
                                    window.location.href='updateproduct.php';
                                </script>";
                              }

                          }                          
                      }                      
                      else{
                          echo "<script>
                              alert('Please select an image file jpg, jpeg, png');
                              window.location.href='updateproduct.php';
                          </script>";
                      }

                }                             
            }


?>