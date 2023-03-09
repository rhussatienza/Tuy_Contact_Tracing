<?php
require('db.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    .page-holder {
      min-height: 100vh;
    }

    .bg-cover {
      background-size: cover !important;
}
.max-width{
  max-width: 2000px;
  padding: 0 80px;
  margin: auto;
}

.navbar{
  position: fixed;
  width: 100%;
  padding: 30px 0;
  font-family: 'Poppins', sans-serif;
  transition: all 0.3s ease;
  background-color: transparent;
}

.navbar .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
  color:blue;
}

.navbar .logo img{
  width: 130px;
  height: 130px;
  -webkit-filter:drop-shadow(10px 10px 10px #666666);
  filter: drop-shadow(10px 10px 10px #666666);

}


.navbar .text{
  list-style: none;
  display: inline-block;
}

.navbar .text  h1{
  display: inline-block;
  color: #111;
  font-size: 40px;
  font-weight: 500;
  margin-left: 60px;
  transition: color 0.3s ease;
}

.navbar .text h1:hover{
  color: forestgreen;
  cursor: pointer;
}
.form-inline button {
        font-size: 23px;
        padding: 12px 35px;
        display: inline-block;
        border-radius: 50px;
        border: 2px solid white;
        box-shadow: 0px 4px 20px 0px #49c628a6;
        background:linear-gradient(135deg, darkseagreen,forestgreen);
}
.form-inline button:hover{
background:forestgreen;
transform: scale(1.05);
}
.form-inline button h6{
  color: #fff;
  font-size: 20px; 
}
form{
  padding: 25px;
}
@media(max-width: 1632px){
  .navbar .text  h1{
    font-size: 25px;
}
@media(max-width: 1374px){
.navbar .text  h1{
display: none;
}
}
 @media(max-width: 584px){

.navbar{
  display: flex;
  align-items: center;
  justify-content: space-between;
  color:blue;
}

.navbar .logo img{
display: flex;
width: 100px;
height: 100px;

}
}
@media(max-width: 709px){
.form-inline button{
display: flex;
padding: 10px 20px;
}
.form-inline button h6{
font-size: 15px;
}
@media(max-width: 649px){
.form-inline button{
display: flex;
font-size: 10px;
 }
}
@media(max-width: 280px){

.navbar{
  display:flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;

}

.navbar .logo img{
width: 70px;
height: 70px;
}
.form-inline button{
display: inline-block;
width: 100px;
}
.form-inline button h6{
font-size: 10px;
}
}




</style>
</head>
<body style="background:url(Images/tuy_home2.jpg);" class="page-holder bg-cover">
  <nav class="navbar">
    <div class="max-width">
      <div class="logo"><img src="Images/logo1.png">
        <div class="text">
        <h1>WELCOME TO THE MUNICIPALITY OF TUY BATANGAS</h1>
      </div>
      </div>
      <div class = "form-inline right"> 
      <form action="login_page.php">
      <button type="submit"><h6>Log In</button></h6></form>
      <form action="FORMS.php">
      <button type="submit"><h6>Go to Forms</button></h6></form>
    </div>
  </nav>
      
</html>
</body>