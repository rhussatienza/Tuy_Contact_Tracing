<?php
require('db.inc.php');
?>

<html>
<head>
	<title>Lists of Reports</title>
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

  text-align: left;

}

body{
  box-sizing: border-box;
}
</style>
<form method="post">
<body class="bg-light">
<div style="background: url(Images/cvsu3.jpg)" class="page-holder bg-cover">
<center><img class="my-3" style="width:8%" src="Images/logo1.png" alt=""></center>
  <div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="text-center ">
        </div>
 <div class="container-fluid p-2 bg-warning text-dark">
  <h2>IT Head Homepage</h2>
</div>
<div class="container p-2 text-white">
  <h5>Tuy Contact Tracing System</h5>
</div>
<div class="container p-2 bg-warning text-dark">
  <h5>Overall List of people who enter the Municipal Hall</h6>
</div>

<tr>
<div class="container p-2">
    <table class="table table-bordered table-hover">
    	<thead class="thead-light" >
      <tr>
        <th align="center"><b>Date</b></th>
        <th class="center">View</th> 
        </tr>
<?php
	$sql = mysqli_query($con, "SELECT * FROM tbl_brgy");
	while($list = mysqli_fetch_assoc($sql)){?>


	<tr>
    <th><?php echo $list['a_date']; ?></td>
    <th class="center">
    <center><a href="view_user.php?thdate=<?php echo $list['a_date']; ?>"><img src="Images/viewicon.png" width=30 height=30 border=0></a></center>

		</td>
		</tr>
		<?php
}
  ?>
  </div>
  </table>
</form>
<center><p><a href="FORMS.php">BACK</a></p></center>
</body>
</html>

