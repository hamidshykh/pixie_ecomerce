

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogger Spot | Watch Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php include('../Partial/admin-header.php'); ?>
<br>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Categries table</h4>
                  <p class="card-description">
                    This table only admin Can  <code>Watch </code>                    
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table bg-black">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Product Title</th>
                          <th>Product Name</th>
                          <th>Product Description</th>
                          <th>In Stock</th>
                          <th>Uploaded Date</th>
                          <th>Product Category</th>
                          <th>Product Price</th>
                          <th>Product</th>                          
                          <th class="text-center">Action</th>
                        </tr>                        
                      </thead>
                      
                      <tbody>
                        <?php

                          $select = "                            
                            SELECT product.ID,product.Product_title,product.ProductName,product.ProductDetails,product.InStock,product.DateAndTime,product.ProductUniqueCode,product.image,product.Price,category.Category 
                            FROM `product` 
                            INNER JOIN category ON product.Category=category.ID;
                          ";  

                            $res = mysqli_query($conn,$select);

                            $IntToArr = mysqli_num_rows($res);

                            $No = 1;                    

                            if($IntToArr==TRUE)
                            {
                                while($row = mysqli_fetch_assoc($res))
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

                                            <tr>
                                                <td><?php echo $No++ ?></td>
                                                <td><?php echo $Title ?></td>
                                                <td><?php echo $Name?></td>
                                                <td><?php echo $Desc ?></td>
                                                <td><?php echo $Stoct ?></td>
                                                <td><?php echo $Date ?></td>
                                                <td><?php echo $Cat ?></td>
                                                <td><?php echo $Price ?></td>
                                                <td>
                                                <img src="<?php echo $url,$image; ?>" height="80px" width="100px">
                                                </td>                                                
                                                <td class="text-center">
                                                  <button class="btn btn-success"><a href="updateproduct.php?ID=<?php echo $ID ?>" class="text-white" style="text-decoration:none;">Update</a></button>
                                                  <br><br>
                                                  <button class="btn btn-danger"><a href="deleteproduct.php?ID=<?php echo $ID ?>" class="text-white" style="text-decoration:none;">Delete</a></button>
                                                </td>
                                            </tr>

                                    <?php
                                }
                            }
                        ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <?php include('../Partial/admin-footer.php'); ?>

</body>
</html>

