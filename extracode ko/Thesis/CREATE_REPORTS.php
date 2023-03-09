<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Reports</title>
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
    .buttonHolder{ 
    	text-align: center; 
    }


form{
  
  width: 500px;
  border: 4px;
  padding: 20px;
  justify-content: center;

}

input {
    height: 20%;
    width: 170%;
    display: block;
    margin: 0;
}

body{
  box-sizing: border-box;
}
table{
      border-collapse: separate;
      border-spacing: 0 15px;
}
    </style>
    </head>
    <?php
require('db.inc.php');
if(isset($_REQUEST['submit'])){
  $search = $_POST['search'];
	$sql = mysqli_query($con, "SELECT COUNT(*) AS num FROM tbl_people WHERE address = '$address' AND a_date like '%$search%'");
  #$sql = mysqli_query($con, "SELECT COUNT(*) FROM tbl_people WHERE address = '$address' AND a_date like '$search$'");
	$ids = mysqli_fetch_assoc($sql);
}
?>


<body class="bg-light">
<div style="background: url(Images/cvsu3.jpg)" class="page-holder bg-cover">
<div class="container fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-=7">
      <div class="card shadow mt-5">
        <div class="text-center ">
          <img class="my-3" style="width:20%" src="Images/logo.jfif" alt="">
        </div>



        <div class="container">
          <div class="login-form">
          <center><h3><span class="badge badge-warning">Create Reports for each barangay's COVID-19 Cases</span></h3></center>
              <form method="POST">
             <p>Number of positive cases in each barangay and Number of people in the Municipal Hall</p>



<table>
<div class="form-group">
<tr>
<td>Date: </td>
<td><input type="date" name="search" placeholder="MM-DD-YYYY" required> <input type="submit" name="search" value="Search"></td></tr>
</div>

<div class="form-group">
<tr>
		<td>Acle:</td>
		<td><?php echo $sql; ?></td>
	</tr>
</div>
<div class="form-group">
<tr>
		<td>Bayudbud:</td>
		<td><input type="number" name="bayudbod" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Bolboc:</td>
		<td><input type="number" name="bolboc" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Dalima:</td>
		<td><input type="number" name="dalima" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Dao:</td>
		<td><input type="number" name="dao" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Guinhawa:</td>
		<td><input type="number" name="guinhawa" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Lumbangan:</td>
		<td><input type="number" name="lumbangan" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Luntal:</td>
		<td><input type="number" name="luntal" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Magahis:</td>
		<td><input type="number" name="magahis" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Malibu:</td>
		<td><input type="number" name="malibu" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Mataywanac:</td>
		<td><input type="number" name="mataywanac" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Palincaro:</td>
		<td><input type="number" name="palincaro" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Luna:</td>
		<td><input type="number" name="luna" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Burgos:</td>
		<td><input type="number" name="burgos" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Rizal:</td>
		<td><input type="number" name="rizal" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Rillo:</td>
		<td><input type="number" name="rillo" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Putol:</td>
		<td><input type="number" name="putol" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Sabang:</td>
		<td><input type="number" name="sabang" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>San Jose:</td>
		<td><input type="number" name="sanjose" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Talon:</td>
		<td><input type="number" name="talon" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Toong:</td>
		<td><input type="number" name="toong" placeholder="Enter number of cases..." required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Tuyon-tuyon:</td>
		<td><input type="number" name="tuyon" placeholder="Enter number of cases..." required></td>
	</tr>
	</div>


  </table>       
              </form>

<?php
if(isset($_REQUEST['submit'])){
  $acle = mysqli_real_escape_string($con, $_POST['acle']);
  $bayudbod = mysqli_real_escape_string($con, $_POST['bayudbod']);
  $bolboc = mysqli_real_escape_string($con, $_POST['bolboc']);
  $dalima = mysqli_real_escape_string($con, $_POST['dalima']);
  $dao = mysqli_real_escape_string($con, $_POST['dao']);
  $guinhawa = mysqli_real_escape_string($con, $_POST['guinhawa']);
  $lumbangan = mysqli_real_escape_string($con, $_POST['lumbangan']);
  $luntal = mysqli_real_escape_string($con, $_POST['luntal']);
  $magahis = mysqli_real_escape_string($con, $_POST['magahis']);
  $malibu = mysqli_real_escape_string($con, $_POST['malibu']);
  $mataywanac = mysqli_real_escape_string($con, $_POST['mataywanac']);
  $palincaro = mysqli_real_escape_string($con, $_POST['palincaro']);
  $luna = mysqli_real_escape_string($con, $_POST['luna']);
  $burgos = mysqli_real_escape_string($con, $_POST['burgos']);
  $rizal = mysqli_real_escape_string($con, $_POST['rizal']);
  $rillo = mysqli_real_escape_string($con, $_POST['rillo']);
  $putol = mysqli_real_escape_string($con, $_POST['putol']);
  $sabang = mysqli_real_escape_string($con, $_POST['sabang']);
  $sanjose = mysqli_real_escape_string($con, $_POST['sanjose']);
  $talon = mysqli_real_escape_string($con, $_POST['talon']);
  $toong = mysqli_real_escape_string($con, $_POST['toong']);
  $tuyon = mysqli_real_escape_string($con, $_POST['tuyon']);
  $people = mysqli_real_escape_string($con, $_POST['hall']);
  $a_date = mysqli_real_escape_string($con, $_POST['a_date']);

  

  $insertQuery = mysqli_query($con, "INSERT INTO tbl_brgy VALUES ('$acle', '$bayudbod', '$bolboc', '$dalima', '$dao', '$guinhawa', '$lumbangan', '$luntal', '$magahis', '$malibu', '$mataywanac', '$palincaro', '$luna', '$burgos', '$rizal', '$rillo', '$putol', '$sabang', '$sanjose', '$talon', '$toong', '$tuyon', '$people', '$a_date')");
 

if($insertQuery){ ?>
    <script type="text/javascript">
      alert("Successfully added to reports!");
      window.location = "CREATE_REPORTS.php";
    </script>

<?php
mysqli_query($con, $insertQuery);
}
}
?>
				
				<div class="buttonHolder">
				<form action = "LIST_REPORTS.php">
                  <button type="submit" class="btn btn-success"><h6 style = "color:white" id="btn_l">See Daily Reports</button></form>
                  <form action = "HOME_PAGE_IT_HEAD.php">
                  <button type="submit" class="btn btn-success"><h6 style = "color:white">Back to IT Home Page</button></form>
                  </div>
			</div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>