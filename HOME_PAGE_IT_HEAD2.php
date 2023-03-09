<?php
require('db.inc.php');
if(!isset($_SESSION['role'])){
  header("location: login_page.php");
}
$role = $_SESSION['role'];
?>


<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap');

    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
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
  ::selection {
    background: lightgrey;
    color: white;
  }

.sidebar{
  position: fixed;
  height: 100%;
  width: 240px;
  background: linear-gradient(135deg, darkseagreen, forestgreen);
  transition: all 0.5s ease;
}
.sidebar.active{
  width: 70px;
}
.sidebar .logo-details{
  height: 80px;
  display: flex;
  align-items: center;
}
.sidebar .logo-details img {
  width: 80px;
  height: 80px;
  margin-top: 15px;
  margin-left: 70px;
  }
.sidebar .nav-links{
  margin-top: 10px;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  height: 50px;
}
.sidebar .nav-links li a{
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  text-transform: uppercase;
}
.sidebar .nav-links li a.active{
  background: forestgreen;
}
.sidebar .nav-links li a:hover{
  background: darkseagreen;
}
.sidebar .nav-links li i{
  min-width: 60px;
  text-align: center;
  font-size: 18px;
  color: #fff;
}
.sidebar .nav-links li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
}
.sidebar .nav-links .log_out{
  position: absolute;
  bottom: 0;
  width: 100%;
}
.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 100vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
.dashboard{
  text-transform: uppercase;
  font-weight: 700;
}
.sidebar.active ~ .home-section{
  width: calc(100% - 60px);
  left: 60px;
}
.home-section nav{
  display: flex;
  justify-content: space-between;
  height: 80px;
  background: #fff;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
  left: 60px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
  color: forestgreen;
}
nav .sidebar-button i{
  font-size: 35px;
  margin-right: 10px;
  color: forestgreen;
}
nav .sidebar-button i:hover{
  transform: scale(1.05);
}
.home-section nav .search-box{
  position: relative;
  height: 50px;
  max-width: 550px;
  width: 100%;
  margin: 0 20px;
}
nav .search-box input{
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
nav .search-box .search{
  position: absolute;
  height: 40px;
  width: 40px;
  background: forestgreen;
  right: 10px;
  top: 50%;
  border: darkseagreen solid 2px;
  transform: translateY(-50%);
  border-radius: 50%;
  line-height: 40px;
  text-align: center;
  color: #fff;
  font-size: 22px;
  transition: all 0.4 ease;
}
nav .search-box .search:hover{
  background-color: darkseagreen;
  color: forestgreen;
  border: forestgreen solid 2px;
}

.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
  top: 5px;
}
nav .profile-details .admin_name{
  font-size: 15px;
  padding-left: 20px;
  font-weight: 700;
  color: #333;
  margin:  10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section .home-content{
  position: relative;
  padding-top: 104px;
}
.home-content{
  background: url("Images/tuy_home2.jpg");
  background-size: cover !important;
   height: 100vh;
  }
.home-content .people {
  margin:0 1rem;
}
.button-container{
  position: relative;
  margin-bottom: 10px;
}
.employee-report{
  margin-left: 1rem;
  display: inline-block;
}

.employee-report button{
  border-radius: 5px;
   border: 2px solid darkseagreen;
   width: 100%;
   height: 40px;
   color: white;
    font-size: 15px;
   font-weight: 700;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, forestgreen, darkseagreen);
}
.employee-report button:hover{
  background: linear-gradient(-135deg, forestgreen, darkseagreen); 
}

.table{
  border-collapse: collapse;
}
.table thead{
  background: forestgreen;
  text-transform: uppercase;
}
.table thead {
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
.table tbody 
tr td{
  font-size: 15px;
  letter-spacing: 0.35px;
  font-weight: normal;
  color:#111;
  background: darkseagreen;
  text-align: center;
  border: 1px solid #fff;
}
.home-content .overview-boxes{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  display: flex;
  align-items: center;
  justify-content: center;
  width: calc(100% / 4 - 15px);
  background: #fff;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 20px;
  font-weight: 500;
}
.home-content .box .number{
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
}
.home-content .box .indicator i{
  height: 20px;
  width: 20px;
  background: #8FDACB;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color: #fff;
  font-size: 20px;
  margin-right: 5px;
}
.box .indicator i.down{
  background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 12px;
}
.home-content .box .cart{
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
   color: #2BD47D;
   background: #C0F2D8;
 }
.home-content .box .cart.three{
   color: #ffc233;
   background: #ffe8b3;
 }
.home-content .box .cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 20px;
  font-weight: 500;
}
.home-content .sales-boxes{
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales{
  width: 65%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sales-boxes .box .title{
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic{
  font-size: 20px;
  font-weight: 500;
}
.sales-boxes .sales-details li{
  list-style: none;
  margin: 8px 0;
}
.sales-boxes .sales-details li a{
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.sales-boxes .box .button{
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.sales-boxes .box .button a{
  color: #fff;
  background: #0A2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover{
  background:  #0d3073;
}

/* Right box */
.home-content .sales-boxes .top-sales{
  width: 35%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px 0 0;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.sales-boxes .top-sales li{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 10px 0;
}
.sales-boxes .top-sales li a img{
  height: 40px;
  width: 40px;
  object-fit: cover;
  border-radius: 12px;
  margin-right: 10px;
  background: #333;
}
.sales-boxes .top-sales li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sales-boxes .top-sales li .product,
.price{
  font-size: 17px;
  font-weight: 400;
  color: #333;
}
/* Responsive Media Query */
@media (max-width: 1240px) {
  .sidebar{
    width: 60px;
  }
  .sidebar.active{
    width: 220px;
  }
  .home-section{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section{
    left: 220px;
    width: calc(100% - 220px);
    overflow: hidden;
  }
  .home-section nav{
    width: calc(100% - 60px);
    left: 60px;
  }
  .sidebar.active ~ .home-section nav{
    width: calc(100% - 220px);
    left: 220px;
  }
}
@media (max-width: 1150px) {
  .home-content .sales-boxes{
    flex-direction: column;
  }
  .home-content .sales-boxes .box{
    width: 100%;
    overflow-x: scroll;
    margin-bottom: 30px;
  }
  .home-content .sales-boxes .top-sales{
    margin: 0;
  }
}
@media (max-width: 1000px) {
  .overview-boxes .box{
    width: calc(100% / 2 - 15px);
    margin-bottom: 15px;
  }
}
@media (max-width: 700px) {
  nav .sidebar-button .dashboard,
  nav .profile-details .admin_name,
  nav .profile-details i{
    display: none;
  }
  .home-section nav .profile-details{
    height: 50px;
    min-width: 40px;
  }
  .home-content .sales-boxes .sales-details{

    width: 560px;
  }
}
@media (max-width: 550px) {
  .overview-boxes .box{
    width: 100%;
    margin-bottom: 15px;
  }
  .sidebar.active ~ .home-section nav .profile-details{
    display: none;
  }
}
@media (max-width: 400px) {
  .sidebar{
    width: 0;
  }
  .sidebar.active{
    width: 60px;
  }
  .home-section{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section{
    left: 60px;
    width: calc(100% - 60px);
  }
  .home-section nav{
    width: 100%;
    left: 0;
  }
  .sidebar.active ~ .home-section nav{
    left: 60px;
    width: calc(100% - 60px);
  }
}
    </style>
</head>
 
<body>
<form method="post">  
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx'><img src="Images/logo.png"></i>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="DAILY_REPORTS_EMPLOYEE.php">
            <i class='bx bx-calendar-check' ></i>
            <span class="links_name">Daily Reports</span>
          </a>
        </li>
        <li>
          <a href="WEEKLY_REPORTS_EMPLOYEE.php">
            <i class='bx bx-calendar-minus' ></i>
            <span class="links_name">Weekly Reports</span>
          </a>
        </li>
        <li>
          <a href="MONTHLY_REPORTS_EMPLOYEE.php">
            <i class='bx bx-calendar' ></i>
            <span class="links_name">Monthly Reports</span>
          </a>
        </li>
        <li>
          <a href="YEARLY_REPORTS_EMPLOYEE.php">
            <i class='bx bx-calendar-x'></i>
            <span class="links_name">Yearly Reports</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout_ITHead.php" onclick="return confirm('Are you sure you want to logout?');">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">

    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">it head dashboard</span>
      </div>
     
      <div class="search-box">
          <input type="date" name="a_date" placeholder="Search..." min="2022-01-01">
        <input type="hidden" name="SEARCH" value="search" min="2022-01-01">
        <button class="search"><i class='bx bx-search'></i></button>
      </div>
    <?php
$NAME = mysqli_query($con, "SELECT * FROM tbl_account WHERE role = 'IT Head'");
  $name = mysqli_fetch_assoc($NAME);
?>
      <div class="profile-details">
        <span class="admin_name"><?php error_reporting(E_ALL ^ E_WARNING); echo $name['name']; ?></span>
      </div>
    </nav>

    <div class="home-content">

      <div class=button-container>
      <div class="employee-report">
          <form action="">
          <button type="submit" hidden> </button></form>
        </div>

      <div class="employee-report">
      <form action ="HOME_PAGE_IT_HEAD.php">
          <button type="submit">Home Page</button></form>
          
    </div>
  </div>
      <div class="people">
      <tr>
    <table class="table">
      <thead>
      <tr>
        <th><b>No. ID</b></th>
        <th><b>Employee's Full Name</b></th>
        <th><b>Adress</b></th>
        <th><b>Contact No.</b></th>
        <th><b>Time IN</b></th>
        <th><b>Date</b></th> 
        </tr>
      </thead>  
      </form>
<?php
if(isset($_REQUEST['SEARCH'])){
  $search = $_POST['a_date'];

  if($_POST['a_date'] == NULL){
     ?> 
     <script type="text/javascript">
            setTimeout(function () { 
            swal({
              title: "Please Enter Date!<?php echo $ids['num'] ?>",
              text: "",
              type: "error",
              confirmButtonText: "Okay"
            },
            function(isConfirm){
              if (isConfirm) {
            window.location.href = "HOME_PAGE_IT_HEAD2.php";
              }
            }); }, 5);
    </script>
  <?php
  
    }
else if($_POST['a_date'] != NULL){
  $S =mysqli_query($con, "SELECT * FROM tbl_employee_updated WHERE status = 'Successful Appointment' AND a_date LIKE '%$search%'");
  $S1 =mysqli_query($con, "SELECT COUNT(*) AS num FROM tbl_employee_updated WHERE  status = 'Successful Appointment' AND a_date LIKE '%$search%'");
  $ids = mysqli_fetch_assoc($S1);
  ?>
 
  <script type="text/javascript">
            setTimeout(function () { 
            swal({
              title: "Number of People in the Municipal Hall is <?php echo $ids['num'] ?>",
              text: "",
              type: "success",
              confirmButtonText: "Okay"
            },
            function(isConfirm){
              if (isConfirm) {
            
              }
            }); }, 5);
    </script>
  <?php

while($list = mysqli_fetch_assoc($S)){?>
<tbody>

<tr> 
  <td data-label="No. Id"><?php echo $list['no']; ?></td>
  <td data-label="Name"><?php echo $list['name']; ?></td>
  <td data-label="Address"><?php echo $list['address']; ?></td>
  <td data-label="Contact"><?php echo $list['contact']; ?></td>
  <td data-label="Time IN"><?php echo $list['time']; ?></td>
  <td data-label="Date"><?php echo $list['a_date']; ?></td>
  </tr>
</tbody>

  <?php 
}
}
} 
else {
$sql = mysqli_query($con, "SELECT * FROM tbl_employee_updated WHERE status = 'Successful Appointment' AND a_date = CURDATE()");
while($list = mysqli_fetch_assoc($sql)){?>
<tbody>

<tr> 
  <td data-label="No. ID"><?php echo $list['no']; ?></td>
  <td data-label="Name"><?php echo $list['name']; ?></td>
  <td data-label="Address"><?php echo $list['address']; ?></td>
  <td data-label="Contact"><?php echo $list['contact']; ?></td>
  <td data-label="Time IN"><?php echo $list['time']; ?></td>
  <td data-label="Date"><?php echo $list['a_date']; ?></td>
  </tr>
</tbody>

  <?php
}
  }
  ?>


</table>
</div>
</div>
</div>
</form>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>

</html>