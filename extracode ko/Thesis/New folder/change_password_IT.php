<?php
require('db.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CHANGE PASSWORD IT HEAD</title>
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
    form{
  width: 500px;
  border: 4px;
  padding: 30px;
  

}

input {
    height: 20%;
    width: 150%;
    
}

body{
  box-sizing: border-box;
}
table{
      border-collapse: separate;
      border-spacing: 0 20px;
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
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>

            <center><h2><span class="badge badge-warning">CHANGE PASSWORD IT HEAD</span></h2></center>

            <table class="tblSaveForm">
                <tr>
                    <td width="40%"><label>Username: </label></td>
                    <td width="60%"><input type="text" name="username" class="required"></td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password: </label></td>
                    <td width="60%"><input type="password" name="currentPassword"class="required"></td>
                </tr>
                <tr>
                    <td><label>New Password: </label></td>
                    <td><input type="password" name="newPassword" class="required"></td>
                </tr>
                <td><label>Confirm Password: </label></td>
                <td><input type="password" name="confirmPassword" class="required"></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>
    


    <?php
  if(isset($_REQUEST['submit'])){
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $currentPassword = mysqli_real_escape_string($con, $_POST['currentPassword']);
  $newPassword = mysqli_real_escape_string($con, $_POST['newPassword']);
  $confirmPassword = mysqli_real_escape_string($con, $_POST['confirmPassword']);

        $result = mysqli_query($con, "SELECT * from tbl_account_it_head WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);
        if ($_POST["currentPassword"] == $row["password"]) {
         mysqli_query($con, "UPDATE tbl_account_it_head set password =  '$newPassword'  WHERE username = '$username'");
         ?> <script type="text/javascript">
      alert("Your password has been changed!");
      window.location = "change_password_IT.php";
      </script>

    <?php

    } else  ?> <script type="text/javascript">
      alert("Your password is not correct!");
      window.location = "change_password_IT.php";
      </script> 

<?php

}

?>
<center><a href = "login_page.php">Go to Login Page</a></center>
</body>
</html>
