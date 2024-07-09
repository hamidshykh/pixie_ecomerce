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


      <br><br><br>

           
  <div class="container mt-5 h-100 w-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-5 order-2 order-lg-1" style="padding-top:50px;">

                <p class="h2 fw-bold col-12 mb-3 mx-1 mx-md-4"><b>Add Product</b></p>

                <form class="mx-1 mx-md-4" action="" Method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Title" placeholder="Product Title" required/>
                      <label class="form-label" for="form3Example1c">Product Title</label>
                    </div>
                  </div>                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="Name" placeholder="Product Name" required/>
                      <label class="form-label" for="form3Example1c">Product Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Category</label>
                      <select name="Cat" class="form-control">

                      <?php
                          // get data from database 

                          $sql = "SELECT * FROM `category`";

                          // excuting query 

                          $res = mysqli_query($conn, $sql);

                          // count the rows in database

                          $rows = mysqli_num_rows($res);

                          // if count is grater than zero

                          if($rows>0)
                          {
                              ?>

                                  <option value="0">Select</option>

                              <?php
                              while($rows=mysqli_fetch_assoc($res))
                              {
                                $ID = $rows['ID'];
                                $Category = $rows['Category'];

                                ?>
                                    <option value="<?php echo $ID; ?>"><?php echo $Category; ?></option>          
                                <?php
                              }
                          }
                          else
                          {
                              ?>
                                    <option value="0">No Category</option>
                              <?php
                          }                          
                      ?>
                      </select>                                            

                    </div>
                  </div>                  

                  <div class="row">
                    <div class="col">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <input type="number" id="form3Example1c" class="form-control" name="Stock" placeholder="Category" required/>
                                <label class="form-label" for="form3Example1c">In Stock</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <input type="file" id="form3Example1c"  name="image"required/>
                                <label class="form-label" for="form3Example1c">Choose</label>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">                      
                    <input type="text" id="form3Example1c" class="form-control" name="Price" placeholder="Product Price" required/>
                      <label class="form-label" for="form3Example1c">Product Price</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">                      
                      <textarea name="Desc" id="Desc" class="form-control" placeholder="Product Description"></textarea>
                      <label class="form-label" for="form3Example1c">Product Description</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg text-white" name="sumbit" value="Upload Product">
                  </div>

                </form>

              </div>
       
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



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
                              $status = "Active Now";
                              $random_id = rand(time(), 10000000);

                              $sql = mysqli_query($conn,"INSERT INTO `product`(`Product_title`, `ProductName`, `ProductDetails`, `InStock`, `DateAndTime`, `ProductUniqueCode`, `image`, `Category`, `Price`) VALUES ('$Title','$Name','$Desc','$Stock','$D','$def','$new_img_name','$Cat','$Price')");

                              if($sql==TRUE)
                              {
                                echo "<script>
                                    alert('Product uploaded seccuesfully');
                                    window.location.href='configproduct.php';
                                </script>";
                              }
                              else
                              {
                                echo "<script>
                                    alert('Product not upload');
                                    window.location.href='add-product.php';
                                </script>";
                              }

                          }
                      }
                      else{
                          echo "<script>
                              alert('Please select an image file jpg, jpeg, png');
                              window.location.href='add-product.php';
                          </script>";
                      }

                }
                else{
                  echo "<script>
                      alert('Please select an image');
                      window.location.href='add-product.php';
                  </script>";
              }
            }


?>