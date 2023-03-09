<?php
require('db.inc.php');
 if(isset($_REQUEST['submit'])){

  $username = mysqli_real_escape_string($con, $_POST['username']);
  $currentPassword = mysqli_real_escape_string($con, $_POST['currentPassword']);
  $newPassword = mysqli_real_escape_string($con, $_POST['newPassword']);
  $confirmPassword = mysqli_real_escape_string($con, $_POST['confirmPassword']);  

        $result = mysqli_query($con, "SELECT * from tbl_account WHERE username = '$username' AND password = '$currentPassword'");
        $row = mysqli_fetch_assoc($result);
        if ($_POST['username'] == $row['username'] AND $_POST["currentPassword"] == $row["password"] AND $_POST['newPassword'] == $_POST['confirmPassword']) {
         mysqli_query($con, "UPDATE tbl_account set password =  '$newPassword'  WHERE username = '$username'");
         ?> <script type="text/javascript">
      alert("Your password has been changed!");
      window.location = "change_password.php";
      </script>

    <?php

    } else  {?> <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
 <center>Your role, username and password is possibly incorrect</center>
</div>
      </script> 
<?php
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CHANGE PASSWORD IT HEAD</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: url("Images/tuy_home2.jpg");
  background-size: cover !important; 
}
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: grey;
}

::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
body img{
  width:130px;
  height:130px;
   -webkit-filter:drop-shadow(5px 5px 5px #666666);
  filter: drop-shadow(5px 5px 5px #666666);
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 600px;
  padding: 0 20px;
  margin: 170px auto;
}

.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 6px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
  
}
.wrapper .title{
  height: 90px;
  background: linear-gradient(135deg, forestgreen, darkseagreen);
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 40px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 70px 25px 80px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 10px;
  border: 1px solid lightgrey;
  font-size: 20px;
  transition: all 0.3s ease;
}
.wrapper form .row select{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 10px;
  border: 1px solid lightgrey;
  font-size: 20px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: forestgreen;
  box-shadow:darkseagreen;
}
form .row select:focus{
  border-color: forestgreen;
  box-shadow:darkseagreen;
}
form .row input::placeholder{
  color: #999;
}

.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 20px;
  background: linear-gradient(135deg, forestgreen, darkseagreen);
  border: 1px solid darkseagreen;
  border-radius: 1px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: 20px 0 20px 0;
}
.wrapper form .pass a{
  color: darkseagreen;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
  color:darkseagreen;
}
.wrapper form .button input{
  color: #fff;
  font-size: 25px;
  font-weight: 500;
  padding-left: 0px;
  background: linear-gradient(-135deg, forestgreen, darkseagreen);
  border: 1px solid darkseagreen;
  cursor: pointer;
}
form .button input:hover{
  background:linear-gradient(135deg, forestgreen, darkseagreen);
}
.button .homepage{
  color: #fff;
  font-size: 25px;
  font-weight: 500;
  background: linear-gradient(135deg, forestgreen, darkseagreen);
  border: 1px solid darkseagreen;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
 }
 .button .homepage:hover{
  background: linear-gradient(-135deg,forestgreen, darkseagreen);
  }
footer{
    background: #111;
    padding: 15px 23px;
    color: #fff;
    text-align: center;
    position: fixed;
    left: 0;
    bottom: 0; 
    width: 100%;
}
footer span a{
    color: darkcyan;
    text-decoration: none;
}
footer span a:hover{
    text-decoration: underline;
    color: crimson;
}
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

</style>
<body>
<div class="container">
  <div class="wrapper">
    <center><img class="my-3" src="Images/logo1.png" alt=""></center>
        <div class="title"><span class="typing"></span></div>

    <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">

        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>

            <div class="tblSaveForm">
              <div class="row">
                  <i class="fas fa-user-shield"></i>
                    <input type="text" name="username" placeholder="Enter Username" class="required">
                </div>
              <div class="row">
                  <i class="fas fa-lock"></i>
                    <input type="password" name="currentPassword" placeholder="Enter Current Password" class="required">
                </div>
              <div class="row">
                  <i class="fas fa-lock-open"></i>
                    <input type="password" name="newPassword" placeholder="Enter New Password" class="required">
                </div>
                <div class="row">
                  <i class="fas fa-user-shield"></i>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" class="required">
                </div>
                     <div class="row button">
                    <input type="submit" name="submit"
                        value="Submit" class="btnSubmit">
                      </div>
                    </div>
              <div class="button">
              <div class="homepage">
              <a style="color: #fff;"href="login_page.php">Go Back to Homepage</a>
            </div>
          </div>

              <footer>
                  <span>Powered by <a href="">Atienza & Salazar </a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
              </footer>
            </div>
        </div>
    </form>

<script>
  var typed = new Typed(".typing", {
        strings: ["Welcome Employees!", "Contact Tracing System", "Change Password",],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
</script>
</body>
</html>
