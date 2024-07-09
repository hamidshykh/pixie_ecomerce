<?php include('Partial/header.php') ?>
<br><br><br>
<div class="container">

        <div class="btn">
            <button class="btn btn-danger"><a href="pymentmethod.php?empty=1" class="text-white" style="text-decoration:none;">Empty</a></button>
        </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">T-Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php

    if(isset($_SESSION['cart']))
    {
        foreach($_SESSION['cart'] as $k => $row)
        {
            ?>
            <tr>
              <th scope="row"><?php echo $row['ID'] ?></th>
              <td><?php echo $row['Title'] ?></td>
              <td><?php echo $row['Name'] ?></td>
              <td><?php echo $row['Desc'] ?></td>
              <td><?php echo $row['image'] ?></td>
              <td><?php echo $row['Cat'] ?></td>
              <td><?php echo $row['quantity'] ?></td>
              <td><?php echo $row['Price'] ?></td>
              <td><?php echo $row['quantity'] * $row['Price']?></td>
              <td>
              <button class="btn btn-danger"><a href="pymentmethod.php?remove=<?php echo $row['ID'] ?>" class="text-white" style="text-decoration:none;">Cancel</a></button>
              </td>
            </tr>
          <?php
        }
    }

  ?>

    
    
 
  </tbody>
</table>


<?php

    if(isset($_SESSION['cart']))
    {
        ?>
            <form action="" method="POST">
            <div class="justify-content-end">
                <input type="submit" class="btn btn-success" name="Checkout" value="Checkout">                
            </div>
            </form>
        <?php
    }

?>

</div>


<?php include('Partial/footer.php') ?>

<?php

    if(isset($_GET['empty']))
    {
        unset($_SESSION['cart']);
        echo "<script>window.location.href='pymentmethod.php';</script>";
    }

    if(isset($_GET['remove']))
    {
        $ID = $_GET['remove'];

        foreach($_SESSION['cart'] as $k => $part)
        {
            if($ID==$part['ID'])
            {
                unset($_SESSION['cart'][$k]);                
            }
            // echo "<script>
            //         alert('You canceled product')
            //         window.location.href='pymentmethod.php';
            //       </script>";
        }        
    }

    if(isset($_POST['Checkout']))
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
              
        }
    }

        echo "<script>window.location.href='checkout.php';</script>";
    }
?>