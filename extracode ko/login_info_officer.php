<?php
require('db.inc.php');
if(isset($_SESSION['USERNAME'])){
  header('Location: HOME_PAGE_INFORMATION_OFFICER.php');
}

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


      $result = mysqli_query($con,"SELECT * FROM tbl_account_information_officer WHERE username='$username' AND password='$password'");

        if(mysqli_num_rows($result) > 0 )
        { 
            $_SESSION["USERNAME"] = $username; 
            echo "<script type='text/javascript'>alert('Welcome {$_SESSION['USERNAME']}'); location.replace('HOME_PAGE_INFORMATION_OFFICER.php');</script>";     
        }
        else
        {
            echo "<script>alert('The username or password are incorrect!');</script>";
        }

}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN PAGE (INFORMATION OFFICER)</title>
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
          <center><h2><span class="badge badge-warning">Welcome Information Officer (Staff)</span></h2></center>
          <h5>Note: Kindly input the account that was given by the IT Head.</h5>
              <form method="POST">
                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                  </div>
                  <button type="submit" name="login" class="btn btn-light my-3">Log in</button>
                  <button type="clear" name="clear" class="btn btn-light my-3">Clear</button>
                  <center><a href = "change_password_inofficer.php">Change Password</a></center>

              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>