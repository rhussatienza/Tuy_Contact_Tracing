<?php
require('db.inc.php');
?>
<html>
<title>CHANGE PASSWORD INFORMATION OFFICER</title>
</head>
<body>
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Username</label></td>
                    <td width="60%"><input type="text" name="username" class="required"></td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password" name="currentPassword"class="required"></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword" class="required"></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword" class="required"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>
    


    <?php
  if(isset($_REQUEST['submit'])){
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $currentPassword = mysqli_real_escape_string($con, $_POST['currentPassword']);
  $newPassword = mysqli_real_escape_string($con, $_POST['newPassword']);
  $confirmPassword = mysqli_real_escape_string($con, $_POST['confirmPassword']);

        $result = mysqli_query($con, "SELECT * from tbl_account_information_officer");
        $row = mysqli_fetch_assoc($result);
        if ($_POST["currentPassword"] == $row["password"]) {
         mysqli_query($con, "UPDATE tbl_account_information_officer set password =  '$newPassword'  WHERE username = '$username'");
        $message = "Password Changed";
    } else  
        $message = "Current Password is not correct";
}
?>
</body>
</html>