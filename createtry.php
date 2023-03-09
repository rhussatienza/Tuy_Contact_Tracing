<?php
require('db.inc.php');
if(isset($_REQUEST['submit'])){

  $search = $_POST['a_date'];
    if($_POST['a_date'] == NULL){
     ?> <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <center>Please Enter Date!</center>
  </div>  
      </script>
  <?php
    }
else{
	$acle = mysqli_query($con, "SELECT COUNT(*) AS acle FROM tbl_people WHERE address = 'Acle' AND a_date like '%$search%'");
	$ACLE = mysqli_fetch_assoc($acle);
  $bayudbud = mysqli_query($con, "SELECT COUNT(*) AS bayudbud FROM tbl_people WHERE address = 'Bayudbud' AND a_date like '%$search%'");
  $BAYUDBUD = mysqli_fetch_assoc($bayudbud);
  $bolboc = mysqli_query($con, "SELECT COUNT(*) AS bolboc FROM tbl_people WHERE address = 'Bolboc' AND a_date like '%$search%'");
  $BOLBOC = mysqli_fetch_assoc($bolboc);
  $dalima= mysqli_query($con, "SELECT COUNT(*) AS dalima FROM tbl_people WHERE address = 'Dalima' AND a_date like '%$search%'");
  $DALIMA = mysqli_fetch_assoc($dalima);
  $dao= mysqli_query($con, "SELECT COUNT(*) AS dao FROM tbl_people WHERE address = 'Dao' AND a_date like '%$search%'");
  $DAO = mysqli_fetch_assoc($dao);
  $guinhawa= mysqli_query($con, "SELECT COUNT(*) AS guinhawa FROM tbl_people WHERE address = 'Guinhawa' AND a_date like '%$search%'");
  $GUINHAWA = mysqli_fetch_assoc($guinhawa);
  $lumbangan= mysqli_query($con, "SELECT COUNT(*) AS lumbangan FROM tbl_people WHERE address = 'Lumbangan' AND a_date like '%$search%'");
  $LUMBANGAN = mysqli_fetch_assoc($lumbangan);
  $luntal = mysqli_query($con, "SELECT COUNT(*) AS luntal FROM tbl_people WHERE address = 'Luntal' AND a_date like '%$search%'");
  $LUNTAL = mysqli_fetch_assoc($luntal);
  $magahis = mysqli_query($con, "SELECT COUNT(*) AS magahis FROM tbl_people WHERE address = 'Magahis' AND a_date like '%$search%'");
  $MAGAHIS = mysqli_fetch_assoc($magahis);
  $malibu = mysqli_query($con, "SELECT COUNT(*) AS malibu FROM tbl_people WHERE address = 'Malibu' AND a_date like '%$search%'");
  $MALIBU = mysqli_fetch_assoc($malibu);
  $mataywanac = mysqli_query($con, "SELECT COUNT(*) AS mataywanac FROM tbl_people WHERE address = 'Mataywanac' AND a_date like '%$search%'");
  $MATAYWANAC = mysqli_fetch_assoc($mataywanac);
  $palincaro = mysqli_query($con, "SELECT COUNT(*) AS palincaro FROM tbl_people WHERE address = 'Palincaro' AND a_date like '%$search%'");
  $PALINCARO = mysqli_fetch_assoc($palincaro);
  $luna = mysqli_query($con, "SELECT COUNT(*) AS luna FROM tbl_people WHERE address = 'Luna' AND a_date like '%$search%'");
  $LUNA = mysqli_fetch_assoc($luna);
  $burgos = mysqli_query($con, "SELECT COUNT(*) AS burgos FROM tbl_people WHERE address = 'Burgos' AND a_date like '%$search%'");
  $BURGOS = mysqli_fetch_assoc($burgos);
  $rizal = mysqli_query($con, "SELECT COUNT(*) AS rizal FROM tbl_people WHERE address = 'Rizal' AND a_date like '%$search%'");
  $RIZAL = mysqli_fetch_assoc($rizal);
  $rillo = mysqli_query($con, "SELECT COUNT(*) AS rillo FROM tbl_people WHERE address = 'Rillo' AND a_date like '%$search%'");
  $RILLO = mysqli_fetch_assoc($rillo);
  $putol = mysqli_query($con, "SELECT COUNT(*) AS putol FROM tbl_people WHERE address = 'Putol' AND a_date like '%$search%'");
  $PUTOL = mysqli_fetch_assoc($putol);
  $sabang = mysqli_query($con, "SELECT COUNT(*) AS sabang FROM tbl_people WHERE address = 'Sabang' AND a_date like '%$search%'");
  $SABANG = mysqli_fetch_assoc($sabang);
  $sanjose = mysqli_query($con, "SELECT COUNT(*) AS sanjose FROM tbl_people WHERE address = 'San Jose' AND a_date like '%$search%'");
  $SANJOSE = mysqli_fetch_assoc($sanjose);
  $talon = mysqli_query($con, "SELECT COUNT(*) AS talon FROM tbl_people WHERE address = 'Talon' AND a_date like '%$search%'");
  $TALON = mysqli_fetch_assoc($talon);
  $toong = mysqli_query($con, "SELECT COUNT(*) AS toong FROM tbl_people WHERE address = 'Toong' AND a_date like '%$search%'");
  $TOONG = mysqli_fetch_assoc($toong);
  $tuyon = mysqli_query($con, "SELECT COUNT(*) AS tuyon FROM tbl_people WHERE address = 'Tuyon' AND a_date like '%$search%'");
  $TUYON = mysqli_fetch_assoc($tuyon);
}
  ?>
<?php
}
?>
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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
   .page-holder {
      min-height: 100vh;
    }
   .bg-cover {
      background-size: cover !important;
    }
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: url("Images/tuy_home2.jpg");
  background-size: cover !important; 
  overflow-x: 
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
body img{
  width: 130px;
  height: 130px;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 35px;
  font-weight: 500;
  position: relative;
  text-align: center;
}

.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
}

form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  font-size: 18px;
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
    .buttonHolder{ 
      text-align: center; 
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


    </style>
    </head>
<center><img class="my-3" src="Images/logo1.png" alt=""></center>
  <div class="row d-flex justify-content-center">
    <div class="col=7">
        <div class="container">
          <div class="title">Create Reports</div>
           <div class="content">
            <form method="POST">

  <div class="user-details">
    <div class="input-box">
      <span class="details">Search</span>
<div class="form-group">
<input type="date" name="a_date" placeholder="Search Date"> <input type="submit" name="submit" value="Search">
</div>
<div class="form-group">
 <span class="details">Acle:</span>
<td><input type="number" name="acle1" value="<?php echo $ACLE['acle'] ;?>" disabled>
<input type="hidden" name="acle" value="<?php echo $ACLE['acle']; ?>"></td> 
</div>
<div class="form-group">

 <span class="details">Bayudbud:</span>
<td><input type="number" name="bayudbud1" value="<?php echo $BAYUDBUD['bayudbud']; ?>" disabled> 
<input type="hidden" name="bayudbud" value="<?php echo $BAYUDBUD['bayudbud']; ?>"></td>

</div>
<div class="form-group">

<span class="details">Bolboc:</span>
<td><input type="number" name="bolboc1" value="<?php echo $BOLBOC['bolboc']; ?>" disabled> 
<input type="hidden" name="bolboc" value="<?php echo $BOLBOC['bolboc']; ?>"></td>

</div>
<div class="form-group">
 <span class="details">Dalima:</span>
<td><input type="number" name="dalima1" value="<?php echo $DALIMA['dalima']; ?>" disabled> 
<input type="hidden" name="dalima" value="<?php echo $DALIMA['dalima']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Dao:</span>
<td><input type="number" name="dao1" value="<?php echo $DAO['dao']; ?>" disabled> 
<input type="hidden" name="dao" value="<?php echo $DAO['dao']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Guinhawa:</span>
<td><input type="number" name="guinhawa1" value="<?php echo $GUINHAWA['guinhawa']; ?>" disabled> 
<input type="hidden" name="guinhawa" value="<?php echo $GUINHAWA['guinhawa']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Lumbangan:</span>
<td><input type="number" name="lumbangan1" value="<?php echo $LUMBANGAN['lumbangan']; ?>" disabled> 
<input type="hidden" name="lumbangan" value="<?php echo $$LUMBANGAN['lumbangan']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Luntal:</span>
<td><input type="number" name="luntal1" value="<?php echo $LUNTAL['luntal']; ?>" disabled> 
<input type="hidden" name="luntal" value="<?php echo $LUNTAL['luntal']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Magahis:</span>
<td><input type="number" name="magahis1" value="<?php echo $MAGAHIS['magahis']  ?>" disabled> 
<input type="hidden" name="magahis" value="<?php echo $MAGAHIS['magahis']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Malibu:</span>
<td><input type="number" name="malibu1" value="<?php echo $MALIBU['malibu']; ?>" disabled> 
<input type="hidden" name="malibu" value="<?php echo $MALIBU['malibu']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Mataywanac:</span>
<td><input type="number" name="mataywanac1" value="<?php echo $MATAYWANAC['mataywanac']; ?>" disabled> 
<input type="hidden" name="mataywanac" value="<?php echo $MATAYWANAC['mataywanac']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Palincaro:</span>
<td><input type="number" name="palincaro1" value="<?php echo $PALINCARO['palincaro']; ?>" disabled> 
<input type="hidden" name="palincaro" value="<?php echo $PALINCARO['palincaro']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Luna:</span>
<td><input type="number" name="luna1" value="<?php echo $LUNA['luna']; ?>" disabled> 
<input type="hidden" name="luna" value="<?php echo $LUNA['luna']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Burgos:</span>
<td><input type="number" name="burgos1" value="<?php echo $BURGOS['burgos']; ?>" disabled>
<input type="hidden" name="burgos" value="<?php echo $BURGOS['burgos']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Rizal:</span>
<td><input type="number" name="rizal1" value="<?php echo $RIZAL['rizal']; ?>" disabled> 
<input type="hidden" name="rizal" value="<?php echo $RIZAL['rizal']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Rillo:</span>
<td><input type="number" name="rillo1" value="<?php echo $RILLO['rillo']; ?>" disabled> 
<input type="hidden" name="rillo" value="<?php echo $RILLO['rillo']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Putol:</span>
<td><input type="number" name="putol1" value="<?php echo $PUTOL['putol']; ?>" disabled> 
<input type="hidden" name="putol" value="<?php echo $PUTOL['putol']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Sabang:</span>
<td><input type="number" name="sabang1" value="<?php echo $SABANG['sabang']; ?>" disabled> 
<input type="hidden" name="sabang" value="<?php echo $SABANG['sabang']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">San Jose:</span>
<td><input type="number" name="sanjose" value="<?php echo $SANJOSE['sanjose']; ?>" disabled> 
<input type="hidden" name="sanjose" value="<?php echo $SANJOSE['sanjose']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Talon:</span>
<td><input type="number" name="talon1" value="<?php echo $TALON['talon']; ?>" disabled> 
<input type="hidden" name="talon" value="<?php echo $TALON['talon']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Toong:</span>
<td><input type="number" name="toong1" value="<?php echo $TOONG['toong']; ?>" disabled> 
<input type="hidden" name="toong" value="<?php echo $TOONG['toong']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Tuyon-Tuyon:</span>
<td><input type="number" name="tuyon1" value="<?php echo $TUYON['tuyon']; ?>" disabled> 
<input type="hidden" name="tuyon" value="<?php echo $TUYON['tuyon']; ?>"></td>

</div>
<div class="form-group">

 <span class="details">Enter Date:</span>
<td><input type="date" name="b_date" placeholder="Search Date"></td>

</div>
<div class="form-group"> 

<td><center><button type="submit" name="enter" class="btn btn-success">Enter Data</button></center></td>

</div>    
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
  $DATE1 = mysqli_real_escape_string($con, $_POST['b_date']);
    

    if($_POST['b_date'] == NULL){
     ?> <div class="alert">
   <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <center>Please Enter Date!</center>
  </div>
      <?php
    }
  else{ 
     $insertQuery = mysqli_query($con, "INSERT INTO tbl_brgy VALUES ('$ACLE1', '$BAYUDBUD1', '$BOLBOC1', '$DALIMA1', '$DAO1', '$GUINHAWA1', '$LUMBANGAN1', '$LUNTAL1', '$MAGAHIS1', '$MALIBU1', '$MATAYWANAC1', '$PALINCARO1', '$LUNA1', '$BURGOS1', '$RIZAL1', '$RILLO1', '$PUTOL1', '$SABANG1', '$SANJOSE1', '$TALON1', '$TOONG1', '$TUYON1','$DATE1')");?>
    <script type="text/javascript">
      alert("Successfully added to reports!");
      window.location = "CREATE_REPORTS.php";
    </script>

<?php
mysqli_query($con, $insertQuery);
}
}
?>
</form>
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