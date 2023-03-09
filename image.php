 <?php
require('db.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fill Up Forms</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="trystyles15.css">
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
        <center><h4>Image uploader for the index page of the websystem</h4></center>
            <div class="home-content">
                  <div class="container">
                  <div class="title">Upload Image</div>
                  <div class="content">
                    <form method="POST" enctype="multipart/form-data">
                      <div class="user-details">

                        <div class="input-box">
                        <span class="details">Image Name</span>
                          <input type="text" name="image_name" placeholder="Enter Image Name" required>
                      </div>

                        <div class="input-box">
                           <span class="details">Image Category</span>
                           <select name="product_name" id="product_name" required>
                            <option value="" disabled selected=>Select Type</option>
                            <option>Promotion</option>
                            <option>About Covid 19</option>
                          </select>
                        </div>
                <div class="input-box">
                  <span class="details">Image of the Product</span>
                  <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" id="product_image" required>
                </div>
              <div class="button">
                <input type="submit" name="submit" value="SUBMIT" onclick="return confirm('Are you sure that do you want to save your information?');">
                 </form>
               </div>
             
                <div class="button">
               <form action="Image_List.php">
                <input type="submit" id="imagebutton" value="IMAGE LIST"><br></form>
              </div>
     </div>
        </div>
    </div>
  </div>

</div>
</section>
  <div class="block"></div>
    <div class="footer-nav">
         <span>Powered by<a href=""> Atienza & Salazar </a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </div>
<?php
if(isset($_REQUEST['submit'])){
   $name = $_POST['image_name'];
   $product_name = $_POST['product_name'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;


       $insert = "INSERT INTO image(name, product_name, product_image) VALUES('$name','$product_name','$product_image')";
      $upload = mysqli_query($con,$insert);

if($upload){    move_uploaded_file($product_image_tmp_name, $product_image_folder);
  ?>

    <script type="text/javascript">
      
      window.location = "image.php";
    </script>

<?php
mysqli_query($con, $insertQuery);
}
}
?>

</form>

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