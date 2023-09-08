<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<h5 class=" col-lg-5 mx-auto mt-5">Facebook Login:-</h5>

<form class=" col-lg-5 mx-auto " action="./gmail.php" method="post">

  <div class="mb-3 mt-5 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="gmail_chack"
    type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">   
    <?php
          if( isset($_SESSION['back_error']['gmail_error'] ) ){
      ?>
          <span class="text-danger"><?= $_SESSION['back_error']['gmail_error']?> </span>
    <?php
      }
      ?>
   
  
  </div>
  <div class="mb-3  ">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password_chack" method="post" type="password"  class="form-control" id="exampleInputPassword1">
    <?php
          if( isset($_SESSION['back_error']['password_error'] ) ){
      ?>
          <span class="text-danger"><?= $_SESSION['back_error']['password_error']?> </span>
    <?php
      }
      ?>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br><br>


</body>
</html>

<?php

session_unset();

?>