 <?php
require('db.inc.php');
$sql = mysqli_query($con, "SELECT COUNT(*) AS num FROM tbl_people");
$ids = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fill Up Forms</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="trystyles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>

    <nav class="navbar">
    <div class="max-width">
      <div class="logo"><img src="Images/logo1.png">
        <div class="text">
        <h1>MUNICIPALITY OF TUY BATANGAS</h1>
      </div>
      </div>
    </div>
  </nav>
        <section class="home" id=home>
        <div class="max-width">
        <center><h4>Contact us for concerns at 09363439067/09192545567 or tuymunicipal@gmail.com</h4></center>
            <div class="home-content">
                  <div class="container">
                  <div class="title">Contact Tracing Form</div>
                  <div class="content">
                    <form method="POST">
                      <div class="user-details">
                        <div class="input-box">
                          <span class="details">No. Id</span>
                          <input type="text"  name="no1" value="<?php echo $ids['num'] + 1;?>" disabled>
                          <input type="hidden" name="no" value="<?php echo $ids['num'] + 1;?>">
                        </div>  
                <div class="input-box">
                  <span class="details">Name</span>
                  <input type="text" name="name" placeholder="Enter Name" pattern="[a-zA-Z'-'\s]*" required>
                </div>
                <div class="input-box">
                  <span class="details">Phone Number</span>
                  <input type="number" name="contact" placeholder="Enter phone number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11"  required>
                </div>
                <div class="input-box">
                  <span class="details">Address</span>
                  <select name="address" required>
                  <option value="" disabled selected=>Select Address</option>
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
                </div>
                <div class="input-box">
                  <span class="details">Select Time In</span>
                  <input type="text" name="time1" value="<?php date_default_timezone_set("Asia/Manila"); echo date("h:i:sa")?>" disabled>
                  <input type="hidden" name="time" value="<?php date_default_timezone_set("Asia/Manila"); echo date("h:i:sa"); ?>">
                </div>
                <div class="input-box">
                  <span class="details">Date</span>
                  <input type="date" name="a_date1" value="<?php echo date("Y-m-d");?>" disabled>
                  <input type="hidden" name="a_date" value="<?php echo date("Y-m-d"); ?>">
                </div>
              </div>
              <div class="button">
                <input type="submit" name="submit" value="SUBMIT" onclick="return confirm('Are you sure that do you want to save your information?');">
                 </form>
              </div>
              <div class="button">
                <form action = "index.php">
                  <button type="submit" class="btn btn-success"><h6 style = "color:white">Home Page</button></form>
              </div>
     
        </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
 <footer>
        <span>Powered by<a href=""> Atienza & Salazar </a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>
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
      
      window.location = "index.php";
    </script>

<?php
mysqli_query($con, $insertQuery);
}
}
?>

</form>
</body>
</html>