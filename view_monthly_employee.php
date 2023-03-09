<?php
require('db.inc.php');
?>
<html>
<head>
  <title>View Daily Reports</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" media="print" href="print.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.page-holder{
  min-height: 100vh;
}   
body{
  background: url(Images/tuy_home2.jpg);
  background-size: cover !important;
  font-family: 'Poppins', sans-serif;
  overflow-x: hidden;
}
h1{
  color: #111;
  font-size: 40px;
  font-weight: 500;
  text-align:center;
  transition: color 0.3s ease;
  cursor:pointer;
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
.logo img{
  width: 130px;
  -webkit-filter:drop-shadow(5px 5px 5px #666666);
  filter: drop-shadow(5px 5px 5px #666666);
}
.container-fluid{
  background:linear-gradient(135deg, forestgreen, darkseagreen);
  font-size: 25px;
  color: #fff;
}
.container h4{
  color: white;
  font-size: 20px;
}
.container h6{
  font-weight: bold;
}
.date{
  color: #fff;
  font-size: 15px;
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
  color: #000;
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
 .printButton{
 padding-bottom:50px ; 
  text-align: left;
 }
 .printButton button h6{
  color: #fff;
 }
  .printButton button{
   border-radius: 5px;
   border: 2px solid darkseagreen;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 3px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, forestgreen, darkseagreen);
 }
 .printButton button:hover{
 background: linear-gradient(-135deg,forestgreen, darkseagreen);
}
 .buttonHolder{
 padding-bottom:50px ; 
  text-align: right;
 }
 .buttonHolder button h6{
  color: #fff;
 }
 .buttonHolder button{
   border-radius: 5px;
   border: 2px solid darkseagreen;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 3px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, forestgreen, darkseagreen);
 }
 .buttonHolder button:hover{
 background: linear-gradient(-135deg,forestgreen, darkseagreen);
}
h3{
  font-size: 25px;
  color: #fff;
}
h4{
  font-size: 25px;
  color: #fff;
}

.signature{
  display: none;
}
.signature_text p{
  font-size: 20px;
  font-weight: bold;
  color: white;
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
@media (max-width: 768px){
  .table {
    padding-bottom: 25px;
  }
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
    z-index: -1;
  }
  .table td:before{
    content: attr(data-label);
    position: absolute;
    left: 25px;
    width: 50%
    padding-left: 0px;
    font-weight: 600;
    font-size: 16px;
    text-align: left;
    color: #fff; 
  }
  .buttonHolder{
    padding-bottom: 60px;
  }
}
@media print {
 .container-fluid{
  text-align: center;
  color: black;
  size:  A4;
  size:  Legal;
  size:  Letter;

 }
 .container h4{
  font-size: 20px;
  color: black;
 }
.container h5{
  color: green;
  font-size: 20px;
}
.table thead tr th{
  font-size: 20px;
  letter-spacing: 0.35;
  font-weight: bold;
  color: #111;
  border: 1px solid #111;
  text-align: center;
}
.table tbody tr td{
  font-size: 15px;
  letter-spacing: 0.35px;
  font-weight: normal;
  color:#111;
  text-align: center;
  border: 1px solid #111;
}
 .footer-nav{
  display: none !important;
 }
 .printButton button{
  display: none;
 }
 .buttonHolder button{
  display: none;
 }

 .signature{
  display: flex;
  padding-left: 200px;
}
.signature img{
  position: relative;
  width: 140px;
}
.signature_text p{
  font-size: 25px;
  font-weight: normal;
  color: black;
}
}
</style>
</style>
<body>
  <div class=logo>
<center><img class="my-3" src="Images/logo1.png" alt=""></center>
  </div>
<div class="container p-2">
    <center><h6>Republic of the Philippines</h6></center>
    <center><h6>Province of Batangas</h6></center>
    <center><h6>Municipality of Tuy</h6></center>
        <div class="text-center ">
        </div>
 <div class="container-fluid p-2">
  <h2>TUY BATANGAS COVID-19 REPORT</h2>
</div>
<div style="color: forestgreen;" class= "container p-2">
  <h5>Tuy Contact Tracing System</h5>
</div>
<div style="background: linear-gradient(-135deg, forestgreen, darkseagreen);"class="container p-2 ">
  <h4>Monthly report for the number of employee that went to the municipal hall and number of people who cancelled and missed to enter the municipal hall</h4>
</div>

<div class="container p-2">
<tr>
<div class="table-container">
    <table class="table">
      <thead>
      <tr>
        <th><b>Barangay</b></th>
        <th><b>Number of People</b></th> 
        </tr>
      </thead>
<?php
$thdate = $_GET['thdate'];
  $sql = mysqli_query($con, "SELECT * FROM tbl_brgy_monthly_employee WHERE a_date = '$thdate'");
  $rec = mysqli_fetch_assoc($sql);
?>
<h5>Date: <?php echo $rec['a_date']; ?></h5>
<tbody>
  <tr>
    <td data-label="Barangay"><b>Acle</b></td>
    <td data-label="Number"><?php echo $rec['acle']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Bayudbod</b></td>
    <td data-label="Number"><?php echo $rec['bayudbod']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Bolboc</b></td>
    <td data-label="Number"><?php echo $rec['bolboc']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Dalima</b></td>
    <td data-label="Number"><?php echo $rec['dalima']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Dao</b></td>
    <td data-label="Number"><?php echo $rec['dao']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Guinhawa</b></td>
    <td data-label="Number"><?php echo $rec['guinhawa']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Lumbangan</b></td>
    <td data-label="Number"><?php echo $rec['lumbangan']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Luntal</b></td>
    <td data-label="Number"><?php echo $rec['luntal']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Magahis</b></td>
    <td data-label="Number"><?php echo $rec['magahis']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Malibu</b></td>
    <td data-label="Number"><?php echo $rec['malibu']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Mataywanac</b></td>
    <td data-label="Number"><?php echo $rec['mataywanac']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Palincaro</b></td>
    <td data-label="Number"><?php echo $rec['palincaro']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Luna</b></td>
    <td data-label="Number"><?php echo $rec['luna']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Burgos</b></td>
    <td data-label="Number"><?php echo $rec['burgos']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Rizal</b></td>
    <td data-label="Number"><?php echo $rec['rizal']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Rillo</b></td>
    <td data-label="Number"><?php echo $rec['rillo']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Putol</b></td>
    <td data-label="Number"><?php echo $rec['putol']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Sabang</b></td>
    <td data-label="Number"><?php echo $rec['sabang']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>San Jose</b></td>
    <td data-label="Number"><?php echo $rec['sanjose']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Talon</b></td>
    <td data-label="Number"><?php echo $rec['talon']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Toong</b></td>
    <td data-label="Number"><?php echo $rec['toong']; ?></td>
  </tr>
  <tr>
    <td data-label="Barangay"><b>Tuyon-Tuyon</b></td>
    <td data-label="Number"><?php echo $rec['tuyon']; ?></td>
  </tr>
    <tr>
  </tr>
</tr>
</tbody>
</table>
</div>
</div>
</form>
<?php
$NAME = mysqli_query($con, "SELECT * FROM tbl_account WHERE role = 'IT Head'");
  $name = mysqli_fetch_assoc($NAME);
?>
<br>
<br>
<div class="signature">
<img src="Images/e-sig.png" alt="Authorized Signature">
</div>
<div class="signature_text">
<p>Prepared by: <?php error_reporting(E_ALL ^ E_WARNING); echo $name['name']; ?></p>
</div>
<div class="printButton">
<button type="button" onclick="window.print()"><h6>Print Report</h6></button>
</div>
<div class="buttonHolder">
<form action = "HOME_PAGE_IT_HEAD2.php">
<button type="submit"><h6>Go to Home Page</h6></button></form>
</div>
</div>
<div>




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
</head>
</html>


