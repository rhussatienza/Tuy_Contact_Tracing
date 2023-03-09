<?php
require('db.inc.php');
?>

<html>
<head>
	<title>LIST OF REPORTS</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.page-holder{
  min-height: 100vh;
}
.page-holder {
  min-height: 100vh;
}

body{
  background: url(Images/tuy_home2.jpg);
  background-size: cover !important;
  font-family: 'Poppins', sans-serif;
  overflow-x:hidden;
}
body img{
  width: 130px;
  -webkit-filter:drop-shadow(5px 5px 5px #666666);
  filter: drop-shadow(5px 5px 5px #666666);

}
h1{

  color: #111;
  font-size: 40px;
  font-weight: 400;
  text-align:center;
  transition: color 0.3s ease;
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
.container-fluid{
  background:linear-gradient(135deg, forestgreen, darkseagreen);
  font-size: 25px;
  color: #fff;
}
 .container h5{
  font-size: 25px;
  color:white;
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
  font-size: 20px;
  font-weight: medium;
  letter-spacing: 0.35
  opacity:1;
  color: #fff;
  padding:12px;
  vertical-align: top;
  border: 1px solid #fff;
  text-align: center;
}
.table tbody tr td{
  font-size: 18px;
  letter-spacing: 0.35px;
  font-weight: normal;
  color:#111;
  background: darkseagreen;
  text-align: center;
  border: 1px solid #fff;
}
.table tbody tr td a img{
width: 30px;
height: 30px;
text-align: center; 
}
.buttonHolder{
  text-align: left;
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
 .homepage{
  text-align: right;
  padding-bottom: 35px;
 }
 .homepage button{
  width: 160px;
  border-radius: 5px;
   border: 2px solid darkseagreen;
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
    font-size: 18px;
  }
  .table tbody tr td a img{
    display: inline-flex;
  }

  .table td:before{
    content: attr(data-label);
    position: absolute;
    left: 25px;
    width: 50%
    padding-left: 0px;
    font-weight: 600;
    font-size: 18px;
    text-align: left;
    color: #fff; 
  }


</style>

<body>
<center><img class="my-3" src="Images/logo1.png" alt=""></center>
    <div class="container p-2">
    <h1>Municipality of Tuy Batangas</h1>
        <div class="text-center ">
        </div>
 <div class="container-fluid p-2">
  <h2>IT Head Homepage</h2>
</div>
<div style="color:forestgreen;" class= "container p-2">
  <h5>Tuy Contact Tracing System</h5>
</div>
<div style="background: linear-gradient(-135deg, forestgreen, darkseagreen); "class="container p-2 text-white">
  <h4>Overall List of employee every month who enter the Municipal Hall</h4>
</div>



<div class="container p-2">
  <form method="post">
<tr>

    <div class="table-container">
    	<table class="table" >
      <thead>
      <tr>
        <th><b>Date</b></th>
        <th><b>View</b></th>  
      </tr>
      </thead>

<?php
	$sql = mysqli_query($con, "SELECT * FROM tbl_brgy_monthly_employee");
	while($list = mysqli_fetch_assoc($sql)){?>

  <tbody>
	<tr>
    <td data-label="Date"><?php echo $list['a_date']; ?></td>
    <td data-label="View"><a href="view_monthly_employee.php?thdate=<?php echo $list['a_date']; ?>"><img src="Images/viewicon.png"></a></td>
		</tr>
  </tbody>

		<?php
}
  ?>
  </table>
  </div>
  </div>
  </form>

  <div class="buttonHolder">
    <form action="MONTHLY_REPORTS_EMPLOYEE.php">
    <button type="submit"><h6>Create Reports</h6></button></form>
    <div class="homepage">
    <form action = "HOME_PAGE_IT_HEAD2.php">
    <button type="submit"><h6>Home Page</h6></button>
  </div>
  </div>
  </div>\\
</form>

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
});</script>

</body>
</html>

