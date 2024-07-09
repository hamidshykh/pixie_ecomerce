<?php include('Partial/header.php') ?>


    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Single Product</h1>
            </div>
          </div>

<?php

$ID = $_GET['ID'];

$select = "
SELECT product.ID,product.Product_title,product.ProductName,product.ProductDetails,product.InStock,product.DateAndTime,product.ProductUniqueCode,product.image,product.Price,category.Category 
FROM `product` 
INNER JOIN category ON product.Category=category.ID
WHERE product.ID = $ID;
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
        $Price = $row['Price'];


        ?>
        <div class="row">
            <div class="col-5">
              <div class="product-slider">
                  <div id="slider" class="flexslider">                
                      <img src="<?php echo $url,$image ?>" height="300px" width="400px"/>                
                  </div>              
              </div>
            </div>

            <div class="col-7">

            <div class="right-content">
              <h4><?php echo $Name ?></h4>
              <h6><?php echo $Price ?></h6>
              <p><?php echo $Desc ?></p>
              <span><?php echo $Stoct ?> left on stock</span>
              <form action="" method="POST">
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">

                            <input type="hidden" name="Title" value="<?php echo $Title ?>">
                            <input type="hidden" name="Name" value="<?php echo $Name ?>">
                            <input type="hidden" name="Desc" value="<?php echo $Desc ?>">
                            <input type="hidden" name="ID" value="<?php echo $ID ?>">
                            <input type="hidden" name="image" value="<?php echo $image ?>">
                            <input type="hidden" name="Cat" value="<?php echo $Cat ?>">
                            <input type="hidden" name="Price" value="<?php echo $Price ?>">                            

                <input type="submit" class="button" name="AddToCart" value="Add To Cart">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><?php echo $Cat ?></span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>




         

        </div>        
        
        <?php

    }
}
?>

                

          









    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>You May Also Like</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-01.jpg" alt="Item 1">
                  <h4>Proin vel ligula</h4>
                  <h6>$15.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-02.jpg" alt="Item 2">
                  <h4>Erat odio rhoncus</h4>
                  <h6>$25.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-03.jpg" alt="Item 3">
                  <h4>Integer vel turpis</h4>
                  <h6>$35.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-04.jpg" alt="Item 4">
                  <h4>Sed purus quam</h4>
                  <h6>$45.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-05.jpg" alt="Item 5">
                  <h4>Morbi aliquet</h4>
                  <h6>$55.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-06.jpg" alt="Item 6">
                  <h4>Urna ac diam</h4>
                  <h6>$65.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-04.jpg" alt="Item 7">
                  <h4>Proin eget imperdiet</h4>
                  <h6>$75.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-05.jpg" alt="Item 8">
                  <h4>Nullam risus nisl</h4>
                  <h6>$85.00</h6>
                </div>
              </a>
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/item-06.jpg" alt="Item 9">
                  <h4>Cras tempus</h4>
                  <h6>$95.00</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Similar Ends Here -->


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

            if(isset($_POST['AddToCart']))
            {
              $_SESSION['cart'][] = array(
                'ID' => rand(100,10000),
                'Title' => $_POST['Title'],
                'Name' => $_POST['Name'],
                'Desc' => $_POST['Desc'],
                'image' => $_POST['image'],
                'Cat' => $_POST['Cat'],
                'Price' => $_POST['Price'],
                'quantity' => $_POST['quantity'],
              );
              echo "<script>window.location.href='products.php';</script>";
            }


?>