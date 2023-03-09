<?php
require('db.inc.php');
if(!isset($_SESSION['role'])){
  header("location: login_page.php");
}
$role = $_SESSION['role'];  
?>

<html>
<head>
  <title>HOME PAGE FOR INFORMATION OFFICER</title>
</head>
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

body{
  background: url(Images/tuy_home2.jpg);
  background-size: cover !important;
  font-family: 'Poppins', sans-serif;
}
body img{
  width: 130px;
  -webkit-filter:drop-shadow(5px 5px 5px #666666);
  filter: drop-shadow(5px 5px 5px #666666);

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
.container-fluid{
  background:linear-gradient(135deg, forestgreen, darkseagreen);
  font-size: 25px;
  color: #fff;
}
.name{
  color: #fff;
  font-size: 18px;
  text-align: center;
}
.name input[type=text] {
  height: 30px;
  width: 50%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  text-align: center;
}
.name input[type=submit] {
  height: 30px;
  width: 10%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  color: white;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  background: linear-gradient(135deg, forestgreen, darkseagreen);\
  
}

 .name input[type=submit]:hover{
 background: linear-gradient(-135deg,forestgreen, darkseagreen);
}

.employee-details{
  margin-top: 10px;
}

.employee-details button{
  border-radius: 5px;
   border: 2px solid darkseagreen;
   font-size: 18px;
   font-weight: 500;
   width: 15%;
   height: auto;
   letter-spacing: 3px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, forestgreen, darkseagreen);
}
.employee-details button:hover{
  background: linear-gradient(-135deg, forestgreen, darkseagreen); 
}
.employee-details button h6{
color: white;
}

.table-container{
  padding: 0 10px;
  margin: 40px auto 0; 
}
.table{
  border-collapse: collapse;
}
.table thead{
  background: forestgreen;
}
.table thead tr th{
  font-size: 15px;
  font-weight: medium;
  letter-spacing: 0.35
  opacity:1;
  color: #fff;
  padding:12px;
  vertical-align: top;
  border: 1px solid #fff;
  text-align: center;
}
.table tbody tr td{
  font-size: 15px;
  letter-spacing: 0.35px;
  font-weight: normal;
  color:#111;
  background: darkseagreen;
  text-align: center;
  border: 1px solid #fff;
}
.table tbody tr td button{
  margin-top: 25px;
  width: 45%;
  border-radius: 5px;
   border: 2px solid red;
   font-size: 18px;
   font-weight: 500;
   height: auto;
   letter-spacing: 3px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, darkred, crimson);

}

.table tbody tr td button:hover{
 background: linear-gradient(-135deg,darkred, crimson);
}

.table tbody tr td button a{
  text-decoration: none ;
  color: white;
  font-size: 18px;

}
.table td:before{
    content: attr(data-label);
    position: absolute;
    left: 25px;
    width: 50%
    padding-left: 0px;
    font-weight: 600;
    font-size: 18px;
    text-align: left;
    color: #fff; 
  }

.buttonHolder{
  text-align: left;
 }
.buttonHolder button h6{
  color: #fff;
}
.buttonHolder button{
   border-radius: 5px;
   border: 2px solid darkseagreen;
   font-size: 18px;
   font-weight: 500;
   width: 20%;
   height: auto;
   letter-spacing: 3px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, forestgreen, darkseagreen);
}
 .buttonHolder button:hover{
 background: linear-gradient(-135deg,forestgreen, darkseagreen);
}
 .logout{
  text-align: right;
 }
 .logout button{
  width: 160px;
 }
  .home{
  text-align: right;
 }
 .home button{
  width: 160px;
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
    font-family: 'Poppins', sans-serif;
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
}
@media (max-width: 768px){
  
  .table thead{
    display: none;
  }
  .table, .table tbody, .table tr, .table td{
    display: block;
    width: 100%;
  }
  .table tr{
    margin-bottom: 15px;
  }
  .table tbody tr td{
    text-align: right;
    padding-left: 50%;
    position: relative;
    font-size: 18px;
  }
  .table tbody tr td button{
    display: inline-flex;
}

  .table td:before{
    content: attr(data-label);
    position: absolute;
    left: 25px;
    width: 50%
    padding-left: 0px;
    font-weight: 600;
    font-size: 18px;
    text-align: left;
    color: #fff; 
  }



</style>
<body>
<center><img class="my-3" src="Images/logo1.png" alt=""></center>
  <div class="container p-2">
        <div class="text-center ">
           <h1>MUNICIPALITY OF TUY BATANGAS</h1>
        </div>
<div class="container-fluid p-2">
  <h2>INFORMATION OFFICER HOMEPAGE</h2>
</div>
<div style="color: forestgreen;" class="container p-2">
  <h5>Tuy Contact Tracing System</h5>
</div>
<div style="background: linear-gradient(-135deg, forestgreen, darkseagreen);" class="container p-2 text-white">
  <h5>List of people who enter the Municipal Hall</h6>
</div>

<div class="container p-2"> 
  <form method="post">
    <td><div class="name"><input type="text" name="search" placeholder="Search Image"> <input type="submit" name="submit" value="search"></td> 
     </div>
<tr>
<div class="table-container">
    <table class="table">
      <thead>
      <tr>
        <th><b>Image Name</b></th> 
        <th><b>Category</b></th>
        <th><b>Image</b></th>
        <th><b>Action</b></th>
  </tr>  
</thead>
<?php
if(isset($_REQUEST['submit'])){
  $search = $_POST['search'];
  $S =mysqli_query($con, "SELECT * FROM image WHERE product_name LIKE '%$search%'");
  while($list = mysqli_fetch_assoc($S)){?>
<tbody>
<tr> 
  <td data-label=""><?php echo $list['name']; ?></td>
  <td data-label=""><?php echo $list['product_name']; ?></td>
  <td><img src="uploaded_img/<?php echo $list['product_image']; ?>" height="100" alt=""></td> 
  <td>

    <button><a href="delete.php?name=<?php echo $list['name']; ?>" name="delete" >DELETE</a></button></td>
 
  </tr>
</tbody>
  <?php 
}
} 
else {
$sql = mysqli_query($con, "SELECT * FROM image");
while($list = mysqli_fetch_assoc($sql)){?>

<tbody>
<tr> 
  <td data-label=""><?php echo $list['name']; ?></td>
  <td data-label=""><?php echo $list['product_name']; ?></td>
  <td><img src="uploaded_img/<?php echo $list['product_image']; ?>" height="100" alt=""></td>
  <td>
  
  <button><a href="delete.php?name=<?php echo $list['name']; ?>" name="delete" >DELETE</a></td></button>
  
  </tr>
</tbody>
  <?php
}
  }
  ?>  


</table>
</div>
</div>
</form>
<div class="buttonHolder">
  
    <div class="home">
    <form action = "HOME_PAGE_IT_HEAD.php">
  <button type="submit"><h6>Home</button></form>
    </div>
  <div class="logout"> 
  <form action="logout_officer.php">
  <button type="submit" onclick="return confirm('Are you sure that do you want to logout?');"><h6>Logout</h6></button></form>
  </div>
  </div>
  </div>
  <div class="block"></div>
    <div class="footer-nav">
         <span>Powered by<a href=""> Atienza & Salazar </a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </div>

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
});</script>


</body>
</head>
</html>