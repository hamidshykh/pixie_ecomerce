<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-5 col-4">
    <form action="" method="POST">
    <div class="form-outline mb-4">
    <img src="assets/images/banner-bg.jpg" class="col-12">
    </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="Username"/>
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="Name"/>
    <label class="form-label" for="form2Example1">Name</label>
  </div>


  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="Email"/>
    <label class="form-label" for="form2Example1">Email</label>
  </div>


  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="Password"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <!-- <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button> -->

  <input type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Register">

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
    </div>

</body>
</html>


<?php

    include('config/constant.php');

    if(isset($_POST['submit']))
    {

        $Usermame = $_POST['Username'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Role = 'User';
        $V_code = bin2hex(random_bytes(3));

        $select = "SELECT * FROM `user` WHERE `UserName`='$_POST[Username]' OR `Email`='$_POST[Email]'";
        $run = mysqli_query($conn,$select);
        $runI = mysqli_num_rows($run);

        if($runI>0)
        {
            while($row = mysqli_fetch_assoc($run))
			{
				$Username = $row['UserName']==$_POST['Username'];
				$Email = $row['Email']==$_POST['Email'];

				if($Username==TRUE)
				{
					echo "<script>
							alert('This username already taken')
							window.location.href='register.php';
				  		  </script>";
				}
				if($Email==TRUE)
				{
					echo "<script>
							alert('This Email is already taken')
							window.location.href='register.php';
						</script>";
				}
			}	            
        }
        else
        {
            $sql = "INSERT INTO `user`(`UserName`, `Name`, `Email`, `RoleType`, `V_Code`, `pPassword`) VALUES ('$Usermame','$Name','$Email','$Role','$V_code','$Password')";
            $res = mysqli_query($conn,$sql);        
    
            if($res==TRUE)
            {
                echo "<script>
                    alert('User Register secuessfully')
                    window.location.href='index.php';
                </script>";
                
            }
            else
            {
                echo "<script>
                    alert('User Not Register')
                    window.location.href='login.php';
                </script>";
            }
    
        }
        
}

?>
