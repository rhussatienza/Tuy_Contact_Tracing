<?php
  $ACLE1 = mysqli_real_escape_string($con, $_POST['acle']);
  $BAYUDBOD1 = mysqli_real_escape_string($con, $_POST['bayudbod']);
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
  $DATE1 = mysqli_real_escape_string($con, $_POST['a_date']);

  $insertQuery = mysqli_query($con, "INSERT INTO tbl_brgy VALUES ('$ACLE1', '$BAYUDBOD1', '$BOLBOC1', '$DALIMA1', '$DAO1', '$GUINHAWA1', '$LUMBANGAN1', '$LUNTAL1', '$MAGAHIS1', '$MALIBU1', '$MATAYWANAC1', '$PALINCARO1', '$LUNA1', '$BURGOS1', '$RIZAL1', '$RILLO1', '$PUTOL1', '$SABANG1', '$SANJOSE1', '$TALON1', '$TOONG1', '$TUYON1','$DATE1')");
  if($insertQuery){ ?>
    <script type="text/javascript">
      alert("Successfully added to reports!");
      window.location = "CREATE_REPORTS.php";
    </script>

<?php
mysqli_query($con, $insertQuery);
}

?>


, '$BAYUDBOD1', '$BOLBOC1', '$DALIMA1', '$DAO1', '$GUINHAWA1', '$LUMBANGAN1', '$LUNTAL1', '$MAGAHIS1', '$MALIBU1', '$MATAYWANAC1', '$PALINCARO1', '$LUNA1', '$BURGOS1', '$RIZAL1', '$RILLO1', '$PUTOL1', '$SABANG1', '$SANJOSE1', '$TALON1', '$TOONG1', '$TUYON1','$DATE1'


<tr>
<td><center><button type="submit" name="submit" class="btn btn-success">Enter Data</button></center></td>
</tr>

<input type="hidden" name="acle" value="<?php echo $acle; ?>">



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





  $ACLE1 = mysqli_real_escape_string($con, $_POST['acle1']);
  $BAYUDBOD1 = mysqli_real_escape_string($con, $_POST['bayudbod1']);
  $BOLBOC1 = mysqli_real_escape_string($con, $_POST['bolboc1']);
  $DALIMA1 = mysqli_real_escape_string($con, $_POST['dalima1']);
  $DAO1 = mysqli_real_escape_string($con, $_POST['dao1']);
  $GUINHAWA1 = mysqli_real_escape_string($con, $_POST['guinhawa1']);
  $LUMBANGAN1 = mysqli_real_escape_string($con, $_POST['lumbangan1']);
  $LUNTAL1 = mysqli_real_escape_string($con, $_POST['luntal1']);
  $MAGAHIS1 = mysqli_real_escape_string($con, $_POST['magahis1']);
  $MALIBU1 = mysqli_real_escape_string($con, $_POST['malibu1']);
  $MATAYWANAC1 = mysqli_real_escape_string($con, $_POST['mataywanac1']);
  $PALINCARO1 = mysqli_real_escape_string($con, $_POST['palincaro1']);
  $LUNA1 = mysqli_real_escape_string($con, $_POST['luna1']);
  $BURGOS1 = mysqli_real_escape_string($con, $_POST['burgos1']);
  $RIZAL1 = mysqli_real_escape_string($con, $_POST['rizal1']);
  $RILLO1 = mysqli_real_escape_string($con, $_POST['rillo1']);
  $PUTOL1 = mysqli_real_escape_string($con, $_POST['putol1']);
  $SABANG1 = mysqli_real_escape_string($con, $_POST['sabang1']);
  $SANJOSE1 = mysqli_real_escape_string($con, $_POST['sanjose1']);
  $TALON1 = mysqli_real_escape_string($con, $_POST['talon1']);
  $TOONG1 = mysqli_real_escape_string($con, $_POST['toong1']);
  $TUYON1 = mysqli_real_escape_string($con, $_POST['tuyon1']);
  $DATE1 = mysqli_real_escape_string($con, $_POST['a_date']);




   $ACLE1 = mysqli_real_escape_string($con, $_POST['acle1']);
  $BAYUDBOD1 = mysqli_real_escape_string($con, $_POST['bayudbod1']);
  $BOLBOC1 = mysqli_real_escape_string($con, $_POST['bolboc1']);
  $DALIMA1 = mysqli_real_escape_string($con, $_POST['dalima1']);
  $DAO1 = mysqli_real_escape_string($con, $_POST['dao1']);
  $GUINHAWA1 = mysqli_real_escape_string($con, $_POST['guinhawa1']);
  $LUMBANGAN1 = mysqli_real_escape_string($con, $_POST['lumbangan1']);
  $LUNTAL1 = mysqli_real_escape_string($con, $_POST['luntal1']);
  $MAGAHIS1 = mysqli_real_escape_string($con, $_POST['magahis1']);
  $MALIBU1 = mysqli_real_escape_string($con, $_POST['malibu1']);
  $MATAYWANAC1 = mysqli_real_escape_string($con, $_POST['mataywanac1']);
  $PALINCARO1 = mysqli_real_escape_string($con, $_POST['palincaro1']);
  $LUNA1 = mysqli_real_escape_string($con, $_POST['luna1']);
  $BURGOS1 = mysqli_real_escape_string($con, $_POST['burgos1']);
  $RIZAL1 = mysqli_real_escape_string($con, $_POST['rizal1']);
  $RILLO1 = mysqli_real_escape_string($con, $_POST['rillo1']);
  $PUTOL1 = mysqli_real_escape_string($con, $_POST['putol1']);
  $SABANG1 = mysqli_real_escape_string($con, $_POST['sabang1']);
  $SANJOSE1 = mysqli_real_escape_string($con, $_POST['sanjose1']);
  $TALON1 = mysqli_real_escape_string($con, $_POST['talon1']);
  $TOONG1 = mysqli_real_escape_string($con, $_POST['toong1']);
  $TUYON1 = mysqli_real_escape_string($con, $_POST['tuyon1']);
  $DATE1 = mysqli_real_escape_string($con, $_POST['a_date']);



  <script type="text/javascript">
      alert("PLEASE ENTER DATE!");
      window.location = "CREATE_REPORTS.php";
      </script>