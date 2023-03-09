<?php
require('db.inc.php');;
$thid = $_GET['thid'];
mysqli_query($con, "DELETE FROM tbl_people WHERE name = '$thid'");
?>
<script type="text/javascript">
	alert("The Name has been deleted in the list of people who enter to the municipal hall!");
	window.location="HOME_PAGE_INFORMATION_OFFICER.php";
</script>	