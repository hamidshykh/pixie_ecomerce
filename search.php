<?php include('Partial/header.php'); ?>

<div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1><?php echo $_GET['Result']?></h1>
            </div>
          </div>

<?php

if(isset($_GET['Result']))
      {
        $Result = $_GET['Result'];
        $select = "
        SELECT product.ID, product.DateAndTime,product.Product_title,product.ProductName,product.ProductDetails,product.InStock,product.image,product.Price ,category.Category 
        FROM `product` 
        INNER JOIN category ON product.Category=category.ID
        WHERE category.Category='$Result';
        ";
    
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
    
                ?>
    
                <div id="1" class="item new col-md-3">
                  <a href="single-product.php?ID=<?php echo $ID ?>">
                    <div class="featured-item">
                      <img src="<?php echo $url,$image ?>" height="200px">
                      
                      <h4><?php echo $Name ?></h4>
                      
                      <h4><?php echo $Title ?></h4>
                      
                      <h6>$15.00</h6>
                    </div>
                  </a>
                </div>                
              
    
                <?php
    
            }
        }
      }
      ?>
      </div>
        </div>
      </div>
    </div>
      <?php include('Partial/footer.php'); ?>