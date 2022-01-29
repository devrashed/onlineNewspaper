<?php
session_start();
ob_start();
include "dbconnect.php";


if ($_POST['doLogin']=='Login')
{
	$username = mysql_real_escape_string($_POST['username']);
	$md5pass = md5(mysql_real_escape_string($_POST['password']));
		
//	$sql = "SELECT email FROM admin WHERE username= '$username' AND password = '$md5pass'";
    $sql = "SELECT * FROM admin WHERE username= '$username' AND password = '$md5pass' AND status='active'";
	$result = mysql_query($sql) or die (mysql_error());
	$num = mysql_num_rows($result);
	
	//echo $num;
	// Match row found with more than 1 results  - the user is authenticated.
    if ( $num > 0 ) {	

     	// this sets session and logs user in
		session_start();
	   $data=mysql_fetch_array($result);
	   	// this sets variables in the session
		$_SESSION['username']= $data['username'];
		$_SESSION['type']= $data['type'];
	
		header("Location:admin.php");
		die();
	}
	else
	{
		$msg = urlencode("Invalid Login.Please try again with correct Client email and Password.");
		header("Location: index.php?msg=$msg");
	}

}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To administrator Panel</title>
<style type="text/css">
body{
    background-color:#666;
    background-size: 100% 100%;}
a{color:#993300; font-weight:bold;}
a:hover{color:#009900;}
.contain{ color:#FF0000;}
.title{float:left; width:120px;padding:5px 0;}
.ctrl{float:left; width:300px;padding:5px 0;}

</style>
</head>


<body onLoad="return first();">
<div style="margin:200px auto; width:420px; padding:20px; background-color:#FFFFFF; height:200px; border: #FFFFFF 1px solid; background:url(bg.jpg) no-repeat;">
	<form name="loginForm" action="" method="post" onSubmit="return login();">
	<div class="contain">
		<font style="font-family:'Trebuchet MS'; color:#FFFFFF; font-size:16px;"><strong>Administrator Login</strong></font><br><br>
		</div>
		
 <?php  
  if (isset($_GET['msg'])) {
  $msg = mysql_real_escape_string($_GET['msg']);
  echo "<div class=\"contain\">$msg</div>";
  }
  ?>
  <br />

	<div class="contain">
		<div class="title" style=" color:#333; font-family:'Trebuchet MS';"><strong>User Name</strong></div>
		<div class="ctrl"><input name="username" type="text" id="username" size="45" />
		</div><div style="clear:both;"></div>
	</div>
	<div class="contain">
		<div class="title" style=" color:#333; font-family:'Trebuchet MS';"><strong>Password</strong></div>
		<div class="ctrl"><input name="password" type="password" id="password" size="45" />
		</div><div style="clear:both;"></div>
	</div>
	<div class="contain">
		<div class="title">&nbsp;</div>
		<div class="ctrl"><br><input name="doLogin" type="hidden" id="doLogin" value="Login" />
		<input style="padding:8px 15px; background-color:#5185B8; border:#FFFFFF 1px solid; color:#FFFFFF; font-family:'Trebuchet MS'; font-weight:bold;" type="submit" name="submit" value="Login"></div><div style="clear:both;"></div>
	</div>
	<div class="contain">
		<div class="title"><!--<a href="forget.php">Forgot Password</a>--><br></div>
		<div class="ctrl">&nbsp;<br></div><div style="clear:both;"></div>
	</div>
	
	
	</form>
	<!--</fieldset>-->
	
</div>
<?php
//session_destroy();
?>
</html>
