<?php
if(@$_POST['regdata']=='1'){
	
	$oldpass = md5(mysql_real_escape_string($_POST['oldpass']));
	$newpass = md5(mysql_real_escape_string($_POST['newpass']));
	
	$usermail = mysql_real_escape_string($_POST['usermail']);
	
	$sql = "SELECT * FROM admin WHERE username='".$_SESSION['username']."' and password='".$oldpass."'";
    $result = mysql_query($sql) or die (mysql_error());
	$num = mysql_num_rows($result);
	
	if ($num > 0) {	
		
		    $sql_insert = "update admin set password='$newpass' where username='".$_SESSION['username']."'";
			$link=mysql_query($sql_insert) or die("Insertion Failed:" . mysql_error());
			$msg = "Successfully Changed Password.";
			header("Location:admin.php?action=userpass&msg=$msg");
			die();
	}
	else
	{
		$error = "Invalid Password. Please try again with correct user password. ";
		header("Location:admin.php?action=userpass&msg=$error");
	}

}


?>

<form action="" name="menuname" enctype="multipart/form-data" method="post">
<table width="620" border="0" align="center" >
  <tr>
    <td height="32" colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:15px; font-weight:bold;">Change your Dashboard Password</td>
    </tr>
    <tr>
    <td height="20" colspan="2"> <div style="color:#FF0000; font-weight:bold;">
  <?php if (isset($_GET['msg']))
          {
          echo "<div class=\"message\"><div>$_GET[msg]</div></div>";
          }elseif(isset($_GET['error']))  {
          echo "<div class='".error."'><div>$_GET[msg]</div></div>";
          }
		  
		  ?>
	  </div> </td>
    </tr>
  <tr>
    <td width="103" height="34" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">Old Password</td>
    <td width="507"> <input name="oldpass" type="password" size="30" value="90909032" />    </td>
  </tr>
  <tr>
    <td height="32" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">New Password</td>
    <td> <input name="newpass" type="password" size="30" />    </td>
  </tr>
    <tr>
    <td> <input name="regdata" type="hidden" id="regdata" value="1" /></td>
    <td><input name="submit" type="submit" value="Edit Password"  id="btn"/></td>
  </tr>
</table>

</form>

