<?php
require('db.inc.php');
if(isset($_SESSION['username'])){
}

if(isset($_POST['login'])){
    $role= mysqli_real_escape_string($con, $_POST['role']);
    $username= mysqli_real_escape_string($con, $_POST['username']);
    $password= mysqli_real_escape_string($con,$_POST['password']);

    $data = mysqli_query($con, "SELECT * FROM tbl_account WHERE role = '$role' AND username = '$username' AND password = '$password'");
    $result = mysqli_fetch_assoc($data);
    
      if($role == "IT Head" AND $_POST['username'] == $result['username'] AND   $_POST['password'] == $result['password']){
        ?>
        <script type="text/javascript"> alert("You are now login successfully to the contact tracing system")
        window.location="HOME_PAGE_IT_HEAD.php"</script>
        <?php
      }else if($role == "Information Officer" AND $_POST['username'] == $result['username'] AND $_POST['password'] == $result['password']){
        ?>
        <script type="text/javascript">alert("You are now login successfully to the contact tracing system")
        window.location="HOME_PAGE_INFORMATION_OFFICER.php"</script>
        <?php
      }
      else  ?> <script type="text/javascript">
      alert("Your role, username or password is not correct!");
      window.location = "login_page.php";
      </script> 
      <?php

    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
   .page-holder {
      min-height: 100vh;
    }
   .bg-cover {
      background-size: cover !important;
    }
  </style>
</head>
<body class="bg-light">
<div style="background: url(Images/cvsu3.jpg)" class="page-holder bg-cover">
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-6">
      <div class="card shadow mt-5">
        <div class="text-center ">
          <img class="my-3" style="width:20%" src="Images/logo.jfif" alt="">
        </div>
        <div class="container">
          <div class="login-form">
          <center><h2><span class="badge badge-warning">Welcome Employees</span></h2></center>
              <form method="POST">
                <div class="form-group">
                      <label>Role</label>
                      <select name="role" required>
              <option> </option>
              <option>IT Head</option>
              <option>Information Officer</option>
              </select>
                  </div>
                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="username" name="username" required>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="password" name="password" required>
                  </div>
                  <button type="submit" name="login" class="btn btn-light btn-block my-3">Log in</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>