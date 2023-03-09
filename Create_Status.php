<!DOCTYPE html>
<html lang="en">
<?php
require('db.inc.php');
if(!isset($_SESSION['role'])){
  header("location: login_page.php");
}
$role = $_SESSION['role'];

?>

<?php
if(isset($_REQUEST['submit'])){

  $search = $_POST['names'];
    if($_POST['names'] == NULL){
     ?> <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <center>Please Enter a Name!</center>
  </div>  
      </script>
  <?php
    }
else{
  $names = mysqli_query($con, "SELECT * FROM tbl_people WHERE name like '%$search%'");
  $list = mysqli_fetch_assoc($names);
}
 ?>
<?php
}
?>
<head>
  <title>Update Status</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
   *{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
    justify-content: center;
   background: url("Images/tuy_home2.jpg") no-repeat;
   background-size: cover !important;
}
body img{
    height:130px;
    width:130px;
}
h1{

  color: #111;
  font-size: 40px;
  font-weight: 500;
  text-align:center;
  transition: color 0.3s ease;
}
h1:hover{
  color: forestgreen;
  cursor: pointer;
  transform: scale(1.05);
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

section{
  padding-bottom: 150px
}
.container{
  padding-bottom: 100px;
  max-width: 800px;
  width: 70%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 35px;
  font-weight: 500;
  position: relative;
  text-align: center;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 1;
  bottom: 0;
  height: 3px;
  width: 70px;
  border-radius: 5px;
  background: linear-gradient(135deg, forestgreen, darkseagreen);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  position: relative;
  width: calc(100% / 2 - 20px);
}

form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  font-size: 18px;
}
.input-box input[type=name] {
  height: 100%;
  width: 100%;
  text-transform: uppercase;
  font-weight: 500;
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 18px;
  padding: 0 50px;
}
.input-box .search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: forestgreen;
  border: darkseagreen solid 2px;
  right: 5px;
  top: 50%;
  transform: translateY(-30%);
  border-radius: 30%;
  line-height: 30px;
  text-align: center;
  color: #fff;
  font-size: 28px;
  transition: all 0.4 ease;
}
.input-box .search:hover{
  background-color: darkseagreen;
  color: forestgreen;
  border: forestgreen solid 2px;
}
.user-details .input-box input{
  height: 45px;
  display: block;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box select{
  height: 45px;
  display: block;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box select:focus,
.user-details .input-box select:valid{
  border-color: forestgreen;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: forestgreen;
}
 form .button{
   height: 45px;
   margin: 35px 0;
 
 }
 .form-inline .clearButton{
     padding-left: 20px;
 }
  .buttonHolder{
     padding-left: 20px;
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
   .page-holder {
      min-height: 100vh;
    }
   .bg-cover {
      background-size: cover !important;
    }
    .buttonHolder{ 
      text-align: center; 
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
@media(max-width: 584px){
.home .home-content .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
 form .user-details a{
  margin-bottom: 15px;
    width: 100%;
    font-size: 10px;
 }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  .container .title{
    font-size: 25px;
  }

  }
    </style>
    </head>
  
<body>
<section class="home" id=home>
  <div class="max-width">
     <center><img class="my-3" src="Images/logo1.png" alt=""></center>
<div class="col=7">
    <h1>Municipality of Tuy Batangas</h1>
            <div class="home-content">
                  <div class="container">
                  <div class="title">Create Status Form</div>
                  <div class="content">
                    <form method="POST">
                <div class="user-details">
    <div class="input-box">
    <div class="form-group">
      <span class="details">Search</span>
          <input 
          type="name"
          name="names"
          pattern="[a-zA-Z'-'\s]*" 
          placeholder="Search Name">

         <input 
         type="hidden" 
         name="submit" 
         value="Search">

        <button class="search"><i class='bx bx-search'></i></button>
    </div>
    </div>

<div class="input-box">
<div class="form-group">
<span class="details">No. Id</span>
<input type="number" name="no1" value="<?php echo $list['no']; error_reporting(E_ALL ^ E_WARNING);?>" disabled>
<input type="hidden" name="no" value="<?php echo $list['no']; ?>">
</div>
</div>

<div class="input-box">
<div class="form-group">
<span class="details">Name</span>
<input type="text" name="name1" value="<?php echo $list['name'] ; error_reporting(E_ALL ^ E_WARNING); ?>" disabled>
<input type="hidden" name="name" value="<?php echo $list['name']; ?>">
</div>
</div>

<div class="input-box"> 
<div class="form-group">
<span class="details">Address</span>
<input type="text" name="address1" value="<?php echo $list['address'] ; ?>" disabled>
<input type="hidden" name="address" value="<?php echo $list['address']; ?>">
</div>
</div>

<div class="input-box">
<div class="form-group">
<span class="details">Contact</span>
<input type="number" name="contact1" value="<?php echo $list['contact'] ;?>" disabled>
<input type="hidden" name="contact" value="<?php echo $list['contact']; ?>">
</div>
</div>

<div class="input-box">
<div class="form-group">
<span class="details">Time In</span>
<input type="text" name="time1" value="<?php date_default_timezone_set("Asia/Manila"); echo date("h:i:sa")?>" disabled>
<input type="hidden" name="time" value="<?php date_default_timezone_set("Asia/Manila"); echo date("h:i:sa"); ?>">
</div>
</div>

<div class="input-box">
<div class="form-group">
<span class="details">Date</span>
<input type="date" name="a_date1" value="<?php echo date("Y-m-d");?>" disabled>
<input type="hidden" name="a_date" value="<?php echo date("Y-m-d"); ?>">
</div>
</div>

<div class="input-box">
<div class="form-group">
<span class="details">Status</span>
    <select name="status" >
      <option value="" disabled selected>Select Status</option>
      <option>Successful Appointment</option>
      <option>Cancelled Appointment</option>

</select>
</div>
</div>

<div class="form-group"> 
<div class="form-inline"> 
<button  type="submit" name="enter" class="btn btn-success text-align center" onclick="return confirm('Are you sure that do you want to save this data?');" id="myInput">Save Data</button>
<div class="form-group">
<div class="clearButton">
<button onclick="document.getElementById('myInput').value = ''" class="btn btn-success text-align center">Clear</button>
</div>
</div>
<div class="form-group">
<div class="buttonHolder">
<button type="submit" class="btn btn-success"><a href="HOME_PAGE_INFORMATION_OFFICER.php" style = "color:white"><h6>Home Page</a></h6></button>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

 <div class="block"></div>
      <div class="footer-nav">
        <span>Powered by<a href=""> Atienza & Salazar </a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
      </div>

</section> 
<?php
if(isset($_REQUEST['enter'])){
  $no2 = mysqli_real_escape_string($con, $_POST['no']);
  $name2= mysqli_real_escape_string($con, $_POST['name']);
  $address2 = mysqli_real_escape_string($con, $_POST['address']);
  $contact2 = mysqli_real_escape_string($con, $_POST['contact']);
  $time2 = mysqli_real_escape_string($con, $_POST['time']);
  $a_date2 = mysqli_real_escape_string($con, $_POST['a_date']);
  $status2 = mysqli_real_escape_string($con, $_POST['status']);

   if($_POST['status'] == NULL){
     ?> <div class="alert">
   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <center>Please Enter Status!</center>
  </div>
      <?php
    }
    else{
  $insertQuery = mysqli_query($con, "INSERT INTO tbl_people_updated VALUES ('$no2', '$name2', '$address2', '$contact2', '$time2', '$a_date2', '$status2')");
 ?>
<div class="alert1">
<script type="text/javascript">
      window.location.href = "HOME_PAGE_INFORMATION_OFFICER.php";
    </script>
    </div>
<?php
mysqli_query($con, $insertQuery);
}
}
?>
</form>

 <script>   
    
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