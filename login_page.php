<?php
require('db.inc.php');

if(isset($_POST['login'])){

    $_SESSION['username'] = htmlentities($_POST['username']);

    $username= mysqli_real_escape_string($con, $_POST['username']);
    $password= mysqli_real_escape_string($con,$_POST['password']);

    $data = "SELECT * FROM tbl_account WHERE username = '$username' AND password = '$password'";
    /*$result = mysqli_fetch_assoc($data);*/

    $result = $con->query($data);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
  
            if($row['role'] == "IT Head"){
              echo ""; ?>
        <script type="text/javascript">
        window.location="HOME_PAGE_IT_HEAD.php"</script>
        <?php
            }
            else if($row['role'] == "Information Officer"){
            ?>
        <script type="text/javascript">
        window.location="HOME_PAGE_INFORMATION_OFFICER.php"</script>
        <?php
            }
            }
else {
        ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
 <center>Your role, username and password is possibly incorrect</center>
</div>
<?php
   }       
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Page</title>
  </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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
  width: 130px;
  height: 130px;
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
.wrapper form .row span{
  position: absolute;
  right: 50px;
  top: 50%;
  transform: translateY(-50%);
}
.wrapper form .row span i{
  color: darkseagreen;
  border:none;
  cursor: pointer;
  font-size: 25px;
  display: none;
}
 .wrapper form .row span i:hover {
  text-decoration: none;
  color: #7ED50E;
  transform: scale(1.05);
}
.wrapper input:valid ~ span i{
  display: flex;
}
.wrapper span #togglePassword.hide-btn::before{
  content: "\f070";
}


form .row input:focus{
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
  border: 1px solid #16a085;
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
.block {
    height: 400px;
}
.footer-nav {
    position: fixed;
    z-index: 99999;
    bottom: 0;
    display: none;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    font-size: 15px;
    font-family: Arial, sans-serif;
    font-weight: normal;
    color: #fff;
    text-align: center;
    cursor: pointer;
    padding: 12px 20px;
}
.show, .footer-nav:hover {
    display: block;
}
.footer-nav span a{
    color: darkcyan;
    text-decoration: none;
}
.footer-nav a:hover{
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
@media(max-width: 544px){
  .wrapper .title{
    font-size: 18px;
  }
}



    </style>
  <body>
    <div class="container">
      <div class="wrapper">
            <center><img src="Images/logo1.png" alt=""></center>
        <div class="title">Contact Tracing System</div>
        <form method="POST">
          <div class="form-group">
          <div class="row">
            <i class="fas fa-user-shield"></i>
            <input type="text"  name="username" placeholder="Enter Username" required>
          </div>
        </div>
          <div class="form-group">
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Enter Password" required id="password">
             <span><i class="fas fa-eye"  id="togglePassword"></i></span>
          </div>
          <div class="pass"><a href="change_password.php">Change Password</a></div>
          <div class="row button">
            <input type="submit" name="login" value="LogIn"  onclick="return confirm('Are you sure that do you want to login?');">
          </div>
        </form>
      </div>
      </div>
      </div>
      <div class="block"></div>
      <div class="footer-nav">
        <span>Powered by<a href=""> Atienza & Salazar </a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
      </div>

      
      <script>   
     const password = document.querySelector("#password");
    const togglePassword = document.querySelector("#togglePassword");
togglePassword.onclick = (()=>{
        if(password.type === "password"){
          password.type = "text";
          togglePassword.classList.add("hide-btn");
        }else{
          password.type = "password";
          togglePassword.classList.remove("hide-btn");
        }
      });
      $(window).scroll(function(event) {
  function footer()
    {
        var scroll = $(window).scrollTop(); 
        if(scroll > 150)
        { 
            $(".footer-nav").fadeIn("slow").addClass("show");
        }
        else
        {
            $(".footer-nav").fadeOut("slow").removeClass("show");
        }
        
        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function() {
            if ($('.footer-nav').is(':hover')) {
            footer();
        }
            else
            {
              $(".footer-nav").fadeOut("slow");
            }
    }, 1000));
    }
    footer();
});

      </script>
  </body>
</html>


