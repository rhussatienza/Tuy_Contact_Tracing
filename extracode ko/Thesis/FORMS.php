 <?php
require('db.inc.php');
$sql = mysqli_query($con, "SELECT COUNT(*) AS num FROM tbl_people");
$ids = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fill Up Forms</title>
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


}

form{
  opacity: 120%;
  width: 500px;
  border: 4px;
  padding: 30px;
  text-align: left;
  

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
<body class="bg-light">
<div style="background: url(Images/cvsu3.jpg)" class="page-holder bg-cover">
<div class="container fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-6">
      <div class="card shadow mt-5">
        <div class="text-center ">
          <img class="my-3" style="width:20%" src="Images/logo.jfif" alt="">
        </div>
        <div class="container">
          <div class="login-form">
          <center><h3><span class="badge badge-warning">Welcome to the Municipal Hall of Tuy, Batangas</span></h3></center>
          <p>Note: Please indicate your information for Contact Tracing. Please informed the Municipal IT Head for any postponed appointment. You can contact them at tuymunicipal@gmail.com or call 0917-265-9658/0951-578-2251.</p>
              <form method="POST">
<div class="form-group">
<table>
<tr>
		<td>No. ID:</td>
		<td><input type="text" name="no1" value="<?php echo $ids['num'] + 1; ?>" disabled>
    <input type="hidden" name="no" value="<?php echo $ids['num'] + 1; ?>"></td>
	</tr>
</div>
<div class="form-group">
<tr>
		<td>Name:</td>
		<td><input type="text" name="name" placeholder="Enter Name" required></td>
	</tr>     
</div>
<div class="form-group">
<tr>
		<td>Adress:</td>
    <td>
    <select name="address" required>
      <option> </option>
      <option>Acle</option>
      <option>Bayudbud</option>
      <option>Bolboc</option>
      <option>Dalima</option>
      <option>Dao</option>
      <option>Guinhawa</option>
      <option>Lumbangan</option>
      <option>Luntal</option>
      <option>Magahis</option>
      <option>Malibu</option>
      <option>Mataywanac</option>
      <option>Palincaro</option>
      <option>Luna</option>
      <option>Burgos</option>
      <option>Rizal</option>
      <option>Rillo</option>
      <option>Putol</option>
      <option>Sabang</option>
      <option>San Jose</option>
      <option>Talon</option>
      <option>Toong</option>
      <option>Tuyon-Tuyon</option>

    </select>
	</tr> 
</div>
<div class="form-group">
<tr>
		<td>Contact No:</td>
		<td><input type="text" name="contact" placeholder="Enter Contact Number" required></td>
	</tr>	
</div>
<div class="form-group">
<tr>
		<td>Select time: </td>
		<td><input type="time" name="time" id="appt" placeholder="Enter Time" required></td>
	</tr>
	</div>
<div class="form-group">
<tr>
		<td>Date:</td>
		<td><input type="date" name="a_date" placeholder="YYYY-MM-DD" required></td>
	</tr>
	</div>
<div class="form-group">
<tr>
	<center><td colspan=2 align="center"><input type="submit" name="submit" value="SUBMIT" onsubmit="validation()"></center></tr>
	</div>
  </table>
	       
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_REQUEST['submit'])){
  $no = mysqli_real_escape_string($con, $_POST['no']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $contact = mysqli_real_escape_string($con, $_POST['contact']);
  $time = mysqli_real_escape_string($con, $_POST['time']);
  $a_date= mysqli_real_escape_string($con, $_POST['a_date']);

  $insertQuery = mysqli_query($con, "INSERT INTO tbl_people VALUES ('$no', '$name', '$address', '$contact', '$time', '$a_date')"); 

if($insertQuery){ ?>
    <script type="text/javascript">
      alert("Your Information is added for contact tracing!");
      window.location = "FORMS.php";
    </script>

<?php
mysqli_query($con, $insertQuery);
}
}
?>


</body>
</html>