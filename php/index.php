<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container">
    <a class="navbar-brand " href="#"><b><i class=" bi bi-apple"></i></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link px-5  " aria-current="page" href="#"><b>HOME</b></a>
        </li>
        <li class="nav-item active px-5">
          <a class="nav-link" href="./allpass.php"> <b>Total Login</b></a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>




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

  <div class="mb-3 mt-3 ">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input name="name_chack"
    type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">   
    <?php
          if( isset($_SESSION['back_error']['gmail_error'] ) ){
      ?>
          <span class="text-danger"><?= $_SESSION['back_error']['name-error']?> </span>
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

<!-- <div class="modal-dialog modal-sm ">secess</div> -->
<div class="toast <?= isset($_SESSION['pop']) ? "show" : "" ?>" style="position: absolute; top:50px; right:50px; " role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <h4>🎉</h4>
    <strong class="me-auto">Congratulations</strong>
    <small>30s ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
   <?=isset($_SESSION['pop']) ? $_SESSION['pop'] : ""?>
  </div>
</div>
<br><br>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>

<?php

session_unset();

?>
