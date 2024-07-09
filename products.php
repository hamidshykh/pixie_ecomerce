<?php include('Partial/header.php') ?>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Products</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary" data-filter="*">All Products</button>
              <!-- <button class="btn btn-primary" data-filter=".new">Newest</button>
              <button class="btn btn-primary" data-filter=".low">Low Price</button>
              <button class="btn btn-primary" data-filter=".high">Hight Price</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">

<?php

    $select = "
    SELECT product.ID, product.DateAndTime,product.Product_title,product.ProductName,product.ProductDetails,product.InStock,product.image,product.Price ,category.Category 
    FROM `product` 
    INNER JOIN category ON product.Category=category.ID;
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
                <div class="featured-item" style="border:1px solid #3A8BCD; box-shadow : silver">
                  <img src="<?php echo $url,$image ?>" >
                  
                  <h4><?php echo $Name ?></h4>
                  
                  <h4><?php echo $Title ?></h4>
                  
                  <h6>$15.00</h6>
                </div>
              </a>
            </div>

            <?php

        }
    }
            
?>

        </div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Page Ends Here -->


    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe on PIXIE now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Godard four dollar toast prism, authentic heirloom raw denim messenger bag gochujang put a bird on it celiac readymade vice.</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Your Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->

    <?php include('Partial/footer.php') ?>

    <?php

      
              
    ?>
      

   