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

    #div{

  width:100%;
 }


form{

  text-align: center;

}

body{
  box-sizing: border-box;
}
</style>
<body class="bg-light">
<div style="background: url(Images/cvsu3.jpg)" class="page-holder bg-cover">
<center><img class="my-3" style="width:8%" src="Images/logo1.png" alt=""></center>
  <div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="text-center ">
        </div>
 <div class="container-fluid p-2 bg-warning text-dark">
  <h2>Tuy Batangas COVID-19 Report</h2>
</div>
<div class="container p-2 text-white">
  <h5>Tuy Contact Tracing System</h5>
</div>
<div class="container p-2 bg-warning text-dark">
  <h5>Number of Cases in each Barangay and Number of people in Municipal Hall</h6>
</div>
		<tr>
	<div class="container p-2">
    	<table class="table table-bordered table-hover">
    	<thead class="thead-light" >
    	<tr>
    		<th class="text-danger"><b>Barangay</b></th> 
        	<th class="text-danger"><b>Number</b></th>
        </tr>
	
<?php
$thdate = $_GET['thdate'];
	$sql = mysqli_query($con, "SELECT * FROM tbl_brgy WHERE a_date = '$thdate'");
	$rec = mysqli_fetch_assoc($sql);
?>
	<tr>
		<th><b>Acle</b></th>
		<th><?php echo $rec['acle']; ?></th>
	</tr>
	<tr>
		<th><b>Bayudbod</b></th>
		<th><?php echo $rec['bayudbod']; ?></th>
	</tr>
	<tr>
		<th><b>Bolboc</b></th>
		<th><?php echo $rec['bolboc']; ?></th>
	</tr>
	<tr>
		<th><b>Dalima</b></th>
		<th><?php echo $rec['dalima']; ?></th>
	</tr>
	<tr>
		<th><b>Dao</b></th>
		<th><?php echo $rec['dao']; ?></th>
	</tr>
	<tr>
		<th><b>Guinhawa</b></th>
		<th><?php echo $rec['guinhawa']; ?></th>
	</tr>
	<tr>
		<th><b>Lumbangan</b></th>
		<th><?php echo $rec['lumbangan']; ?></th>
	</tr>
	<tr>
		<th><b>Luntal</b></th>
		<th><?php echo $rec['luntal']; ?></th>
	</tr>
	<tr>
		<th><b>Magahis</b></th>
		<th><?php echo $rec['magahis']; ?></th>
	</tr>
	<tr>
		<th><b>Malibu</b></th>
		<th><?php echo $rec['malibu']; ?></th>
	</tr>
	<tr>
		<th><b>Mataywanac</b></th>
		<th><?php echo $rec['mataywanac']; ?></th>
	</tr>
	<tr>
		<th><b>Palincaro</b></th>
		<th><?php echo $rec['palincaro']; ?></th>
	</tr>
	<tr>
		<th><b>Luna</b></th>
		<th><?php echo $rec['luna']; ?></th>
	</tr>
	<tr>
		<th><b>Burgos</b></th>
		<th><?php echo $rec['burgos']; ?></th>
	</tr>
	<tr>
		<th><b>Rizal</b></th>
		<th><?php echo $rec['rizal']; ?></th>
	</tr>
	<tr>
		<th><b>Rillo</b></th>
		<th><?php echo $rec['rillo']; ?></th>
	</tr>
	<tr>
		<th><b>Putol</b></th>
		<th><?php echo $rec['putol']; ?></th>
	</tr>
	<tr>
		<th><b>Sabang</b></th>
		<th><?php echo $rec['sabang']; ?></th>
	</tr>
	<tr>
		<th><b>San Jose</b></th>
		<th><?php echo $rec['sanjose']; ?></th>
	</tr>
	<tr>
		<th><b>Talon</b></th>
		<th><?php echo $rec['talon']; ?></th>
	</tr>
	<tr>
		<th><b>Toong</b></th>
		<th><?php echo $rec['toong']; ?></th>
	</tr>
	<tr>
		<th><b>Tuyon-Tuyon</b></th>
		<th><?php echo $rec['tuyon']; ?></th>
	</tr>
	<tr>
		<th><b>Municipal Hall</b></th>
		<th><?php echo $rec['people']; ?></th>
	</tr>
	<tr>
		<th><b>Date</b></th>
		<th><?php echo $rec['a_date']; ?></th>
	</tr>


</table>
<center><p><h4><a href="HOME_PAGE_IT_HEAD.php">Go to Home Page</h4></a></p></center>
</body>
</html>