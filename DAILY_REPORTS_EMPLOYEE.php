<!DOCTYPE html>
<html lang="en">
<?php
require('db.inc.php');
if(!isset($_SESSION['role'])){
  header("location: login_page.php");
}
$role = $_SESSION['role'];

if(isset($_REQUEST['submit'])){

     $search = $_POST['a_date'];
     if($_POST['a_date'] == NULL){
     ?> 
     <script type="text/javascript">
            setTimeout(function () { 
            swal({
              title: "Please Enter Date!",
              text: "",
              type: "error",
              confirmButtonText: "Okay"
            },
            function(isConfirm){
              if (isConfirm) {
            window.location.href = "DAILY_REPORTS_EMPLOYEE.php";
              }
            }); }, 5);
    </script>
  <?php
    }
else{
    ?>
    <script type="text/javascript">
            setTimeout(function () { 
            swal({
              title: "Successfully Searched!",
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
$acle = mysqli_query($con, "SELECT COUNT(*) AS acle FROM tbl_employee_updated WHERE address = 'Acle' AND status = 'IN' AND a_date like '%$search%'");
  $ACLE = mysqli_fetch_assoc($acle);
  $bayudbud = mysqli_query($con, "SELECT COUNT(*) AS bayudbud FROM tbl_employee_updated WHERE address = 'Bayudbud' AND status = 'IN' AND a_date like '%$search%'");
  $BAYUDBUD = mysqli_fetch_assoc($bayudbud);
  $bolboc = mysqli_query($con, "SELECT COUNT(*) AS bolboc FROM tbl_employee_updated WHERE address = 'Bolboc' AND status = 'IN' AND a_date like '%$search%'");
  $BOLBOC = mysqli_fetch_assoc($bolboc);
  $dalima= mysqli_query($con, "SELECT COUNT(*) AS dalima FROM tbl_employee_updated WHERE address = 'Dalima' AND status = 'IN' AND a_date like '%$search%'");
  $DALIMA = mysqli_fetch_assoc($dalima);
  $dao= mysqli_query($con, "SELECT COUNT(*) AS dao FROM tbl_employee_updated WHERE address = 'Dao' AND status = 'IN' AND a_date like '%$search%'");
  $DAO = mysqli_fetch_assoc($dao);
  $guinhawa= mysqli_query($con, "SELECT COUNT(*) AS guinhawa FROM tbl_employee_updated WHERE address = 'Guinhawa' AND status = 'IN' AND a_date like '%$search%'");
  $GUINHAWA = mysqli_fetch_assoc($guinhawa);
  $lumbangan= mysqli_query($con, "SELECT COUNT(*) AS lumbangan FROM tbl_employee_updated WHERE address = 'Lumbangan' AND status = 'IN' AND a_date like '%$search%'");
  $LUMBANGAN = mysqli_fetch_assoc($lumbangan);
  $luntal = mysqli_query($con, "SELECT COUNT(*) AS luntal FROM tbl_employee_updated WHERE address = 'Luntal' AND status = 'IN' AND a_date like '%$search%'");
  $LUNTAL = mysqli_fetch_assoc($luntal);
  $magahis = mysqli_query($con, "SELECT COUNT(*) AS magahis FROM tbl_employee_updated WHERE address = 'Magahis' AND status = 'IN' AND a_date like '%$search%'");
  $MAGAHIS = mysqli_fetch_assoc($magahis);
  $malibu = mysqli_query($con, "SELECT COUNT(*) AS malibu FROM tbl_employee_updated WHERE address = 'Malibu' AND status = 'IN' AND  a_date like '%$search%'");
  $MALIBU = mysqli_fetch_assoc($malibu);
  $mataywanac = mysqli_query($con, "SELECT COUNT(*) AS mataywanac FROM tbl_employee_updated WHERE address = 'Mataywanac' AND status = 'IN' AND a_date like '%$search%'");
  $MATAYWANAC = mysqli_fetch_assoc($mataywanac);
  $palincaro = mysqli_query($con, "SELECT COUNT(*) AS palincaro FROM tbl_employee_updated WHERE address = 'Palincaro' AND status = 'IN' AND a_date like '%$search%'");
  $PALINCARO = mysqli_fetch_assoc($palincaro);
  $luna = mysqli_query($con, "SELECT COUNT(*) AS luna FROM tbl_employee_updated WHERE address = 'Luna' AND status = 'IN' AND a_date like '%$search%'");
  $LUNA = mysqli_fetch_assoc($luna);
  $burgos = mysqli_query($con, "SELECT COUNT(*) AS burgos FROM tbl_employee_updated WHERE address = 'Burgos' AND status = 'IN' AND a_date like '%$search%'");
  $BURGOS = mysqli_fetch_assoc($burgos);
  $rizal = mysqli_query($con, "SELECT COUNT(*) AS rizal FROM tbl_employee_updated WHERE address = 'Rizal' AND status = 'IN' AND a_date like '%$search%'");
  $RIZAL = mysqli_fetch_assoc($rizal);
  $rillo = mysqli_query($con, "SELECT COUNT(*) AS rillo FROM tbl_employee_updated WHERE address = 'Rillo' AND status = 'IN' AND a_date like '%$search%'");
  $RILLO = mysqli_fetch_assoc($rillo);
  $putol = mysqli_query($con, "SELECT COUNT(*) AS putol FROM tbl_employee_updated WHERE address = 'Putol' AND status = 'IN' AND a_date like '%$search%'");
  $PUTOL = mysqli_fetch_assoc($putol);
  $sabang = mysqli_query($con, "SELECT COUNT(*) AS sabang FROM tbl_employee_updated WHERE address = 'Sabang' AND status = 'IN' AND a_date like '%$search%'");
  $SABANG = mysqli_fetch_assoc($sabang);
  $sanjose = mysqli_query($con, "SELECT COUNT(*) AS sanjose FROM bl_employee_updated WHERE address = 'San Jose' AND status = 'IN' AND a_date like '%$search%'");
  $SANJOSE = mysqli_fetch_assoc($sanjose);
  $talon = mysqli_query($con, "SELECT COUNT(*) AS talon FROM tbl_employee_updated WHERE address = 'Talon' AND status = 'IN' AND a_date like '%$search%'");
  $TALON = mysqli_fetch_assoc($talon);
  $toong = mysqli_query($con, "SELECT COUNT(*) AS toong FROM tbl_employee_updated WHERE address = 'Toong' AND status = 'IN' AND a_date like '%$search%'");
  $TOONG = mysqli_fetch_assoc($toong);
  $tuyon = mysqli_query($con, "SELECT COUNT(*) AS tuyon FROM tbl_employee_updated WHERE address = 'Tuyon-Tuyon' AND status = 'IN' AND a_date like '%$search%'");
  $TUYON = mysqli_fetch_assoc($tuyon);

}
  ?>
<?php
}
?>
<head>
  <title>Create Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <style type="text/css">
     @import url('https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap');
   *{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
     background: url("Images/tuy_home2.jpg");
  background-size: cover !important; 
  overflow-x: hidden;
}
img{
    height:130px;
    width:130px;
}
h1{

  color: #111;
  font-size: 40px;
  font-weight: 700;
  text-align:center;
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
    padding: 100px 0;
}
section{
  padding-bottom: 150px
}
.container{
  padding-bottom: 100px;
  max-width: 1300px;
  width: 100%;
    margin: 0 auto;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 35px;
  font-weight: 550;
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
  width: calc(100% / 4  - 20px);
}

form .input-box span.details{
  display: block;
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
}

.input-box input[type=date] {
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

.form-inline {
column-gap:15px ;
}

.form-inline button{
  border-radius: 5px;
   border: 2px solid darkseagreen;
   width: 100%;
   height: 40px;
   color: white;
    font-size: 15px;
   letter-spacing: 1px;
   cursor: pointer;
   font-weight: 550;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, forestgreen, darkseagreen);
  height: 45px;
  color: white;
  font-size: 15px;
}

.form-inline button:hover{
  background: linear-gradient(-135deg, forestgreen, darkseagreen); 
}

   .page-holder {
      min-height: 100vh;
    }
   .bg-cover {
      background-size: cover !important;
    }
    .buttonHolder{ 
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
  <center><img class="my-3" src="Images/logo1.png" alt=""></center>
  <div class="row d-flex justify-content-center">
    <div class="col=7">
    <h1>Municipality of Tuy Batangas</h1>
        <div class="container">
          <div class="title">Employees Daily Report</div>
           <div class="content">
            <form method="POST">
  
  <div class="user-details">
    <div class="input-box">
        <span class="details">Search</span>
    <div class="form-group">
          <input 
          type="date" 
          name="a_date"
          min="2022-01-01">

         <input 
         type="hidden" 
         name="submit" 
         value="Search" 
         min="2022-01-01">

        <button class="search"><i class='bx bx-search'></i></button>
    </div>
    </div>
<div class="input-box">
<div class="form-group">
 <span class="details">Acle:</span>
<td><input type="number" name="acle1" value="<?php echo $ACLE['acle'] ;?>" disabled>
<input type="hidden" name="acle" value="<?php echo $ACLE['acle']; ?>"></td> 
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Bayudbud:</span>
<td><input type="number" name="bayudbud1" value="<?php echo $BAYUDBUD['bayudbud']; ?>" disabled> 
<input type="hidden" name="bayudbud" value="<?php echo $BAYUDBUD['bayudbud']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
<span class="details">Bolboc:</span>
<td><input type="number" name="bolboc1" value="<?php echo $BOLBOC['bolboc']; ?>" disabled> 
<input type="hidden" name="bolboc" value="<?php echo $BOLBOC['bolboc']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Dalima:</span>
<td><input type="number" name="dalima1" value="<?php echo $DALIMA['dalima']; ?>" disabled> 
<input type="hidden" name="dalima" value="<?php echo $DALIMA['dalima']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Dao:</span>
<td><input type="number" name="dao1" value="<?php echo $DAO['dao']; ?>" disabled> 
<input type="hidden" name="dao" value="<?php echo $DAO['dao']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Guinhawa:</span>
<td><input type="number" name="guinhawa1" value="<?php echo $GUINHAWA['guinhawa']; ?>" disabled> 
<input type="hidden" name="guinhawa" value="<?php echo $GUINHAWA['guinhawa']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Lumbangan:</span>
<td><input type="number" name="lumbangan1" value="<?php echo $LUMBANGAN['lumbangan']; ?>" disabled> 
<input type="hidden" name="lumbangan" value="<?php echo $$LUMBANGAN['lumbangan']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Luntal:</span>
<td><input type="number" name="luntal1" value="<?php echo $LUNTAL['luntal']; ?>" disabled> 
<input type="hidden" name="luntal" value="<?php echo $LUNTAL['luntal']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Magahis:</span>
<td><input type="number" name="magahis1" value="<?php echo $MAGAHIS['magahis']  ?>" disabled> 
<input type="hidden" name="magahis" value="<?php echo $MAGAHIS['magahis']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Malibu:</span>
<td><input type="number" name="malibu1" value="<?php echo $MALIBU['malibu']; ?>" disabled> 
<input type="hidden" name="malibu" value="<?php echo $MALIBU['malibu']; ?>"></td>
</div> 
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Mataywanac:</span>
<td><input type="number" name="mataywanac1" value="<?php echo $MATAYWANAC['mataywanac']; ?>" disabled> 
<input type="hidden" name="mataywanac" value="<?php echo $MATAYWANAC['mataywanac']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Palincaro:</span>
<td><input type="number" name="palincaro1" value="<?php echo $PALINCARO['palincaro']; ?>" disabled> 
<input type="hidden" name="palincaro" value="<?php echo $PALINCARO['palincaro']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Luna:</span>
<td><input type="number" name="luna1" value="<?php echo $LUNA['luna']; ?>" disabled> 
<input type="hidden" name="luna" value="<?php echo $LUNA['luna']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Burgos:</span>
<td><input type="number" name="burgos1" value="<?php echo $BURGOS['burgos']; ?>" disabled>
<input type="hidden" name="burgos" value="<?php echo $BURGOS['burgos']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Rizal:</span>
<td><input type="number" name="rizal1" value="<?php echo $RIZAL['rizal']; ?>" disabled> 
<input type="hidden" name="rizal" value="<?php echo $RIZAL['rizal']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Rillo:</span>
<td><input type="number" name="rillo1" value="<?php echo $RILLO['rillo']; ?>" disabled> 
<input type="hidden" name="rillo" value="<?php echo $RILLO['rillo']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Putol:</span>
<td><input type="number" name="putol1" value="<?php echo $PUTOL['putol']; ?>" disabled> 
<input type="hidden" name="putol" value="<?php echo $PUTOL['putol']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Sabang:</span>
<td><input type="number" name="sabang1" value="<?php echo $SABANG['sabang']; ?>" disabled> 
<input type="hidden" name="sabang" value="<?php echo $SABANG['sabang']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">San Jose:</span>
<td><input type="number" name="sanjose1" value="<?php echo $SANJOSE['sanjose']; ?>" disabled> 
<input type="hidden" name="sanjose" value="<?php echo $SANJOSE['sanjose']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Talon:</span>
<td><input type="number" name="talon1" value="<?php echo $TALON['talon']; ?>" disabled> 
<input type="hidden" name="talon" value="<?php echo $TALON['talon']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Toong:</span>
<td><input type="number" name="toong1" value="<?php echo $TOONG['toong']; ?>" disabled> 
<input type="hidden" name="toong" value="<?php echo $TOONG['toong']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Tuyon-Tuyon:</span>
<td><input type="number" name="tuyon1" value="<?php echo $TUYON['tuyon']; ?>" disabled> 
<input type="hidden" name="tuyon" value="<?php echo $TUYON['tuyon']; ?>"></td>
</div>
</div>
<div class="input-box">
<div class="form-group">
 <span class="details">Date:</span>
<td><input type="date" name="b_date1" value="<?php echo date("Y-m-d");?>" disabled>
<input type="hidden" name="b_date" value="<?php echo date("Y-m-d"); ?>"></td>
</div>
</div>
</section> 
<?php
if(isset($_REQUEST['enter'])){
  $ACLE1 = mysqli_real_escape_string($con, $_POST['acle']);
  $BAYUDBUD1 = mysqli_real_escape_string($con, $_POST['bayudbud']);
  $BOLBOC1 = mysqli_real_escape_string($con, $_POST['bolboc']);
  $DALIMA1 = mysqli_real_escape_string($con, $_POST['dalima']);
  $DAO1 = mysqli_real_escape_string($con, $_POST['dao']);
  $GUINHAWA1 = mysqli_real_escape_string($con, $_POST['guinhawa']);
  $LUMBANGAN1 = mysqli_real_escape_string($con, $_POST['lumbangan']);
  $LUNTAL1 = mysqli_real_escape_string($con, $_POST['luntal']);
  $MAGAHIS1 = mysqli_real_escape_string($con, $_POST['magahis']);
  $MALIBU1 = mysqli_real_escape_string($con, $_POST['malibu']);
  $MATAYWANAC1 = mysqli_real_escape_string($con, $_POST['mataywanac']);
  $PALINCARO1 = mysqli_real_escape_string($con, $_POST['palincaro']);
  $LUNA1 = mysqli_real_escape_string($con, $_POST['luna']);
  $BURGOS1 = mysqli_real_escape_string($con, $_POST['burgos']);
  $RIZAL1 = mysqli_real_escape_string($con, $_POST['rizal']);
  $RILLO1 = mysqli_real_escape_string($con, $_POST['rillo']);
  $PUTOL1 = mysqli_real_escape_string($con, $_POST['putol']);
  $SABANG1 = mysqli_real_escape_string($con, $_POST['sabang']);
  $SANJOSE1 = mysqli_real_escape_string($con, $_POST['sanjose']);
  $TALON1 = mysqli_real_escape_string($con, $_POST['talon']);
  $TOONG1 = mysqli_real_escape_string($con, $_POST['toong']);
  $TUYON1 = mysqli_real_escape_string($con, $_POST['tuyon']);
  $CANCELLED = mysqli_real_escape_string($con, $_POST['cancelled']);
  $DATE1 = mysqli_real_escape_string($con, $_POST['b_date']);
    
error_reporting(E_ALL ^ E_WARNING);
    if($_POST['b_date'] == NULL){
     ?> <div class="alert">
   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <center>Please Enter Date!</center>
  </div>
      <?php
    }
  else{ 
     $insertQuery = mysqli_query($con, "INSERT INTO tbl_brgy_employee VALUES ('$ACLE1', '$BAYUDBUD1', '$BOLBOC1', '$DALIMA1', '$DAO1', '$GUINHAWA1', '$LUMBANGAN1', '$LUNTAL1', '$MAGAHIS1', '$MALIBU1', '$MATAYWANAC1', '$PALINCARO1', '$LUNA1', '$BURGOS1', '$RIZAL1', '$RILLO1', '$PUTOL1', '$SABANG1', '$SANJOSE1', '$TALON1', '$TOONG1', '$TUYON1', '$CANCELLED','$DATE1')");?>
    <script type="text/javascript">
      
      window.location = "DAILY_REPORTS_EMPLOYEE.php";
    </script>

<?php
mysqli_query($con, $insertQuery);
}
}
?>
</form>

<div class="form-inline">
  <div class="form-group"> 
<button type="submit" name="enter" class="btn btn-success"onclick="return confirm('Are you sure that do you want to save this data?');">Save Data</button></div>
    <form action = "LIST_REPORTS_EMPLOYEE.php">
      <button type="submit" class="btn btn-success">See Reports
      </button>
    </form>

    <form action = "HOME_PAGE_IT_HEAD2.php">
      <button type="submit" class="btn btn-success">Home Page
      </button>
    </form>
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