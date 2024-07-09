<?php include('config/constant.php'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">    

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>Pixie </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>
  <style>
    #login,#signup{
      margin-left:15px;
      text-decoration:none;
      color : white;
    } 
    body,
    html {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .searchbar {

        margin: auto;
        height: 53px;
        width: auto;
        /* background-image: linear-gradient(to left, #c0c0c0 0%, #3a8bcd 100%); */
        border-radius: 30px;
        padding: 6px 9px 0px 6px;
    }

    .search_input {
        color: #3a8bcd;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        /* border-radius: 0px; */
        caret-color: transparent;
        /* border-bottom: 1px solid black; */
        line-height: 40px;
        transition: width 0.4s linear;
    }

    .searchbar:hover>.search_input {
        padding: 0 10px;
        width: 200px;
        caret-color: red;
        transition: width 0.4s linear;
    }

    .searchbar:hover>.search_icon {
        background: #3a8bcd;
        color:white;
        background-image: linear-gradient(to left, #3a8bcd 0%, #c0c0c0 100%);
    }

    .search_icon {
        height: 40px;
        width: 40px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color: #3a8bcd;
        text-decoration: none;
        border:none;
    }   
  </style>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Suspendisse laoreet magna vel diam lobortis imperdiet</span>          
          </div>
        </div>        
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light" style="color:#eee; font-weight:bold;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><b>PIXIE</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 m-auto">                  
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    
                </ul>
                <?php

                    if(isset($_SESSION['cart']))
                    {
              ?>
                          <a href="pymentmethod.php" style="text-decoration:none; color:black;">

                            Here Your Products<i style='font-size:24px' class='fas'>
                        <span id="con" style="color: black; font-size: 20px; position: absolute; top: 5px; padding: 1px; margin: 9px; ">
                          <?php echo count($_SESSION['cart']); ?>
                        </span>
                            &#xf218;
                          </i>
                        </a>
          <?php
                      
                    }

          ?>
                    <form class="d-flex" action="search.php" method="GET">
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <div class="searchbar">
                                    <input class="search_input" type="text" name="Result" placeholder="Search..." required>

                                    <!-- <input type="submit" class="search_icon" name="submit" > -->

                                    <button type="submit" class="search_icon">
                                        <i class="fas fa-search"></i></button>

                                    <!-- <a href="#" class="search_icon" ><i class="fas fa-search"></i></a> -->

                                </div>
                            </div>
                        </div>
                    </form>            
            </div>
        </div>
    </nav>

          
    <!-- Page Content -->


    