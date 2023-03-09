<?php
require('db.inc.php');
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
   .page-holder {
      min-height: 100vh;
    }
   .bg-cover {
      background-size: cover !important;
    }

    #div{

  width:100%;
}
.buttonHolder{
  text-align: center;
}

form{

  justify-content: center;

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
  <h2>Information Officer (Staff) Homepage</h2>
</div>
<div class="container p-2 text-white">
  <h5>Tuy Contact Tracing System</h5>
</div>
<div class="container p-2 bg-warning text-dark">
  <h5>List of people who enter the Municipal Hall</h6>
</div>

<div class="container p-2 text-white"> 
	<tr>
<form method="post">
		<td>Search Name:</td>
		<td><input type="text" name="search" placeholder="Search Name"> <input type="submit" name="submit" value="search"></td>
	</tr>   

<tr>
<div class="container p-2">
    <table class="table table-bordered table-hover">
    	<thead class="thead-light" >
      <tr>
        <th scope="row"><b>No. ID</b></th> 
        <th scope="row"><b>Name</b></th>
        <th scope="row">-</th> 
	</tr>



<?php
if(isset($_REQUEST['submit'])){
	$search = $_POST['search'];
	$S =mysqli_query($con, "SELECT * FROM tbl_people WHERE name LIKE '%$search%'");
	while($list = mysqli_fetch_assoc($S)){?>

<tr> 
	<th scope="row"><?php echo $list['no']; ?></th>
	<th scope="row"><?php echo $list['name']; ?></th>
	<th scope="row"> 
	<a href="delete.php?thid=<?php echo $list['name']; ?>"><img src="Images/delete_icon.png" width=30 height=30 border=0></a>
	</th>
	</tr>

	<?php 
}
}	
else {
$sql = mysqli_query($con, "SELECT * FROM tbl_people");
while($list = mysqli_fetch_assoc($sql)){?>

<tr> 
	<th scope="row"><?php echo $list['no']; ?></th>
	<th scope="row"><?php echo $list['name']; ?></th>
	<th scope="row"> 
	<a href="delete.php?thid=<?php echo $list['name']; ?>"><img src="Images/delete.png" width=15 height=15 border=0></a>
	</th>
	</tr>
	<?php
}
  }
  ?>	


</table>
</form>

<div class="buttonHolder">
  <form action = "HOME_PAGE_INFORMATION_OFFICER.php">
  <button type="submit" class="btn btn-light"><h6 style = "color:black">Back to Home Page</button></form>
  <form action="logout_officer.php">
  <button type="submit" class="btn btn-light my-3" onclick="return confirm('Are you sure that do you want to logout?');"><h6 style = "color:black">Logout</button>
</div>
</form>
</body>
</head>
</html>