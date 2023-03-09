<?php
require('db.inc.php');
$success = mysqli_query($con, "SELECT COUNT(*) AS success FROM tbl_people_updated WHERE status = 'Successful Appointment' AND a_date = CURDATE()");
$SUCCESS = mysqli_fetch_assoc($success);
  $cancelled = mysqli_query($con, "SELECT COUNT(*) AS cancelled FROM tbl_people_updated WHERE status = 'Cancelled Appointment' AND a_date = CURDATE()");
  $CANCELLED = mysqli_fetch_assoc($cancelled);

$S1 =mysqli_query($con, "SELECT COUNT(*) AS num FROM tbl_people WHERE a_date = CURDATE()");
  $ids = mysqli_fetch_assoc($S1);
  $S2 =mysqli_query($con, "SELECT COUNT(*) AS num FROM tbl_people_updated WHERE a_date = CURDATE()");
  $ids2 = mysqli_fetch_assoc($S2);
  $missed = $ids['num'] - $ids2['num'];

$result = $con->query("SELECT product_image FROM image WHERE product_name = 'Promotion'");
 $result1 = $con->query("SELECT product_image FROM image WHERE product_name = 'About Covid 19'");

?>




<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;

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

    .sidebar {
        position: fixed;
        height: 100%;
        width: 245px;
        background: linear-gradient(135deg, darkseagreen, forestgreen);
        transition: all 0.5s ease;
    }

    .sidebar.active {
        width: 70px;
    }

    .sidebar .logo-details {
        height: 80px;
        display: flex;
        align-items: center;
    }

    .sidebar .logo-details img {
        width: 80px;
        height: 80px;
        margin-top: 15px;
        margin-left: 70px;
    }

    .sidebar .nav-links {
        margin-top: 10px;
    }

    .sidebar .nav-links li {
        position: relative;
        list-style: none;
        height: 50px;
    }

    .sidebar .nav-links li a {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
        text-transform: uppercase;
    }

    .sidebar .nav-links li a.active {
        background: forestgreen;
    }

    .sidebar .nav-links li a:hover {
        background: darkseagreen;


    }

    .sidebar .nav-links li i {
        min-width: 60px;
        text-align: center;
        font-size: 18px;
        color: #fff;
    }

    .sidebar .nav-links li a .links_name {
        color: #fff;
        font-size: 13px;
        font-weight: 400;
        left: 30px;
        white-space: nowrap;
    }

    .sidebar .nav-links .log_out {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .home-section {
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 245px);
        left: 245px;
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section {
        width: calc(100% - 60px);
        left: 60px;
    }

    .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 245px);
        left: 245px;
        z-index: 100;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section nav {
        left: 60px;
        width: calc(100% - 60px);
    }

    .sidebar.active~.home-section .sales-details img {
        width: 900px;
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section .top-sales-details img {
        width: 400px;
        transition: all 0.5s ease;
    }

    .home-section nav .sidebar-button {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: 700;
        color: forestgreen;
    }

    nav .sidebar-button i {
        font-size: 35px;
        margin-right: 10px;
        color: forestgreen;
    }

    nav .sidebar-button i:hover {
        transform: scale(1.05);
    }

    .home-section nav .profile-details {
        display: flex;
        align-items: center;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        height: 50px;
        min-width: 190px;
        padding: 0 15px 0 2px;
        cursor: pointer;
    }

    nav .profile-details img {
        height: 40px;
        width: 40px;
        border-radius: 6px;
        object-fit: cover;
        cursor: pointer;
    }

    nav .profile-details .admin_name {
        font-size: 15px;
        font-weight: 500;
        color: #333;
        margin: 0 10px;
        white-space: nowrap;
        cursor: pointer;
    }

    .home-section .home-content {
        position: relative;
        padding-top: 104px;
    }

    .home-content .overview-boxes {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 20px;
        margin-bottom: 26px;
    }

    .overview-boxes .box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% / 4 - 15px);
        background: #fff;
        padding: 15px 14px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .overview-boxes .box-topic1 {
        font-family: 'Montserrat' sans-serif;
        font-size: 15px;
        font-weight: 500;
    }

    .home-content .box .number {
        display: inline-block;
        font-size: 35px;
        margin-top: -6px;
        font-weight: 500;
    }

    .home-content .box .indicator {
        display: flex;
        align-items: center;
    }

    .home-content .box .indicator i {
        height: 20px;
        width: 20px;
        background: #8FDACB;
        line-height: 20px;
        text-align: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        margin-right: 5px;
    }

    .home-content .box .indicator .text {
        font-size: 12px;
    }

    .home-content .box .cart {
        display: inline-block;
        font-size: 32px;
        height: 50px;
        width: 50px;
        background: darkseagreen;
        line-height: 50px;
        text-align: center;
        color: forestgreen;
        border-radius: 12px;
        margin: -15px 0 0 6px;
    }

    .home-content .box .cart.two {
        color: yellow;
        background: darkseagreen;
    }

    .home-content .box .cart.three {
        color: red;
        background: darkseagreen;
    }

    .home-content .box .cart.four {
        color: paleturquoise;
        background: darkseagreen;
    }

    .home-content .total-order {
        font-size: 20px;
        font-weight: 500;
    }

    .home-content .sales-boxes {
        display: flex;
        justify-content: space-between;
        /* padding: 0 20px; */
    }

    /* left box */
    .home-content .sales-boxes .recent-sales {
        width: 65%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .home-content .sales-boxes .sales-details {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sales-boxes .box .title {
        font-size: 24px;
        font-weight: 500;
        /* margin-bottom: 10px; */
    }

    .sales-boxes .sales-details {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sales-boxes .sales-details .carousel-item img {
        border-radius: 12px;
        width: 730px;
        height: 600px;
        object-fit: cover;
        margin-top: 10px;
        transition: all 0.5s ease;
    }

    /* Right box */
    .home-content .sales-boxes .top-sales {
        width: 35%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px 0 0;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .sales-boxes .top-sales-details {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sales-boxes .top-sales-details img {
        border-radius: 12px;
        width: 370px;
        height: 600px;
        object-fit: cover;
        margin-top: 10px;
        transition: all 0.5s ease;
    }

    .sales-boxes .top-sales li a {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .sales-boxes .top-sales li .product,
    .price {
        font-size: 17px;
        font-weight: 400;
        color: #333;
    }

    /* Responsive Media Query */
    @media (max-width: 1240px) {
        .sidebar {
            width: 60px;
        }

        .sidebar.active {
            width: 220px;
        }

        .home-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .sidebar.active~.home-section {
            /* width: calc(100% - 220px); */
            overflow: hidden;
            left: 220px;
        }

        .home-section nav {
            width: calc(100% - 60px);
            left: 60px;
        }

        .sidebar.active~.home-section nav {
            width: calc(100% - 220px);
            left: 220px;
        }
    }

    @media (max-width: 1150px) {
        .home-content .sales-boxes {
            flex-direction: column;
        }

        .home-content .sales-boxes .box {
            width: 100%;
            overflow-x: scroll;
            margin-bottom: 30px;
        }

        .home-content .sales-boxes .top-sales {
            margin: 0;
        }
    }

    @media (max-width: 1000px) {
        .overview-boxes .box {
            width: calc(100% / 2 - 15px);
            margin-bottom: 15px;
        }
    }

    @media (max-width: 700px) {

        nav .sidebar-button .dashboard,
        nav .profile-details .admin_name,
        nav .profile-details i {
            display: none;
        }

        .home-section nav .profile-details {
            height: 50px;
            min-width: 40px;
        }

        .home-content .sales-boxes .sales-details {
            width: 560px;
        }
    }

    @media (max-width: 550px) {
        .overview-boxes .box {
            width: 100%;
            margin-bottom: 15px;
        }

        .sidebar.active~.home-section nav .profile-details {
            display: none;
        }
    }

    @media (max-width: 400px) {
        .sidebar {
            width: 0;
        }

        .sidebar.active {
            width: 60px;
        }

        .home-section {
            width: 100%;
            left: 0;
        }

        .sidebar.active~.home-section {
            left: 60px;
            width: calc(100% - 60px);
        }

        .home-section nav {
            width: 100%;
            left: 0;
        }

        .sidebar.active~.home-section nav {
            left: 60px;
            width: calc(100% - 60px);
        }
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx'><img src="Images/logo.png"></i>
        </div>

        <ul class="nav-links">
            <li>
                <a href="" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Homepage</span>
                </a>
            </li>
            <li>
                <a href="login_page.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Login</span>
                </a>
            </li>
            <li>
                <a href="FORMS.php">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Resident Form</span>
                </a>
            </li>
            <li>
                <a href="register.php">
                    <i class='bx bxs-user-account'></i>
                    <span class="links_name">Employee Registration</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name"></span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">TUY CONTACT TRACING SYSTEM </span>
            </div>

        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic1">People in the Municipal Hall</div>
                        <div class="number"><?php echo $SUCCESS['success']; ?></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow'></i>
                            <span class="text">As of Today</span>
                        </div>
                    </div>
                    <i class='bx bx-user-check cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Missed Appointment </div>
                        <div class="number"><?php echo $missed; ?></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow'></i>
                            <span class="text">As of Today</span>
                        </div>
                    </div>
                    <i class='bx bxs-user-minus cart two'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Cancelled Appointment</div>
                        <div class="number"><?php echo $CANCELLED['cancelled']; ?></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow'></i>
                            <span class="text">As of Today</span>
                        </div>
                    </div>
                    <i class='bx bx-user-x cart three'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Date Today</div>
                        <div class="number"><?php echo date("Y-m-d"); ?></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow'></i>
                            <span class="text">Today</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="title">Municipality of Tuy Batangas</div>
                    <div class="sales-details">

                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">

                                <?php  
              $i = 0;
              foreach ($result as $row){
                $actives = '';
                if($i == 0){
                  $actives = 'active';
                }
            ?>
                                <li data-target="#demo" data-slide-to="<?= $i; ?>" class=<?= $actives; ?>></li>

                                <?php $i++; } ?>
                            </ul>
                            <!--  The slideshow -->
                            <div class="carousel-inner">
                                <?php  
                  $i = 0;
                  foreach ($result as $row){
                    $actives ='';
                    if($i == 0){
                      $actives = 'active';
                    }
                ?>

                                <div class="carousel-item <?= $actives; ?>">
                                    <img src="uploaded_img/<?= $row['product_image']?>">
                                </div>

                                <?php $i++; } ?>
                            </div>


                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="top-sales box">
                    <div class="title">COVID-19 Health Protocols</div>
                    <ul class="top-sales-details">
                        <div id="batch2" class="carousel slide" data-ride="carousel">

                            <ul class="carousel-indicators">
                                <?php
      $a = 0;
      foreach ($result1 as $row1 ) {
         $actives1 = ''; 
         if($a == 0){
          $actives1 = 'active';
         }
        
      ?>
                                <li data-target="#batch2" data-slide-to="<?= $a; ?>" class="<?= $actives1; ?>"></li>
                                <?php $a++;}?>
                            </ul>


                            <div class="carousel-inner">
                                <?php
      $a = 0;
      foreach ($result1 as $row1 ) {
         $actives1 = ''; 
         if($a == 0){
          $actives1 = 'active';
         }
        
      ?>
                                <div class="carousel-item <?= $actives1; ?>">
                                    <img src="uploaded_img/<?= $row1['product_image']?>">
                                </div>
                                <?php $a++;}?>
                            </div>


                            <a class="carousel-control-prev" href="#batch2" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#batch2" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>

</body>

</html>