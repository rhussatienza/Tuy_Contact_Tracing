<?php
require('db.inc.php');
$image_name = $_GET['name'];
mysqli_query($con, "DELETE FROM image WHERE name = '$image_name'");
?>
<script type="text/javascript">
	alert("The image has been deleted in the list of images!");
	window.location="Image_List.php"
</script>	