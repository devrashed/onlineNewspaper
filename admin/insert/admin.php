<?php
session_start();
ob_start();

//if($_SESSION['username']!="")
if(empty($_SESSION['username']) ) {
	header("Location:index.php");

}

include "../dbconnect.php";
include "function.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To administrator Panel</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />

<link href="style/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="style/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="style/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<link href="style/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
<link href="style/calendarview.css" rel="stylesheet" type="text/css" />

<link href="style/ddsmoothmenu-v.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script src="js/prototype.js"> </script>
<script src="js/calendarview.js"> </script>

<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<script type="text/javascript">
SI.Files.stylizeAll()
</script>



</head>

<body>

<div id="headerbar"> 
<div id="logoutbar"> 

<div id="logout">
<span><?php echo $_SESSION['username']; ?></span>&nbsp;
<span class="logout"><a href="admin.php?action=logout">Logout</a></span></div>


</div>

</div>

<div id="wrapper">  
<div class="leftcommun"> <?php include "leftmenu.php"; ?> </div>

<?php 
date_default_timezone_set("Asia/Dhaka");
$timestamp = date("h:i:s a", time()); 
$cdate=date("Y-m-d");
?>
<?php include_once("../gdate.php");?>
<div style="width:64%; float: left;">

<div class="content">
<?php 

        $act = isset($_GET['action'])? $_GET['action']:"";
		
		if      ($act == "nationalnews") require_once 'nationalnews.php';
		elseif  ($act == "saradesh") require_once 'saradesh.php';
		elseif  ($act == "politics") require_once 'politics.php';
		elseif  ($act == "sports") require_once 'sports.php';
		elseif  ($act == "international") require_once 'international.php';
		elseif  ($act == "finance") require_once 'finance.php';
		elseif  ($act == "entertainment") require_once 'entertainment.php';
		elseif  ($act == "education") require_once 'education.php';
		elseif  ($act == "law") require_once 'law.php';
		elseif  ($act == "health") require_once 'health.php';
		elseif  ($act == "technology") require_once 'technology.php';
		elseif  ($act == "editorial") require_once 'editorial.php';		
		elseif  ($act == "special") require_once 'special-feature.php';		
		elseif  ($act == "islam") require_once 'islam.php';
		elseif  ($act == "agenvirinment") require_once 'agenvirinment.php';
		elseif  ($act == "medialist") require_once 'medialist.php';
		elseif  ($act == "opentalk") require_once 'opentalk.php';
		elseif  ($act == "interview") require_once 'interview.php';
		elseif  ($act == "industry") require_once 'industry.php';
		elseif  ($act == "lifestyle") require_once 'lifestyle.php';
		elseif  ($act == "rokomari") require_once 'rokomari.php';
		elseif  ($act == "editnews") require_once 'news_edit.php';	
	    elseif  ($act == "payrertime") require_once 'payrertime.php';	
		elseif  ($act == "photogallery") require_once 'photogallery.php';
		elseif  ($act == "videogallery") require_once 'videogallery.php';
		elseif  ($act == "onlinesurvay") require_once 'onlineservay.php';
		elseif  ($act == "logout") require_once 'logout.php';
		elseif  ($act == "weather") require_once 'weather.php';
		elseif  ($act == "ajkekothay") require_once 'ajkekothay.php';
		elseif  ($act == "aboutus") require_once 'aboutus.php';
		elseif  ($act == "consultant") require_once 'consultant.php';
		elseif  ($act == "advertisemnet") require_once 'advertisemnet.php';
		elseif  ($act == "adrules") require_once 'adruls.php';
		elseif  ($act == "brakingtab") require_once 'brakingtab.php';
		elseif  ($act == "userpass") require_once 'userpass.php';
		
		else require_once 'home.php';
?>
  </div>

</div>
<div class="rightcommun"><?php include "rightcolmun.php";?></div>

  <div class="clr"></div> 
</div> <!--END THE WRAPPR-->

 <div class="clr"></div> 
 <footer>
 
 
 </footer>

</body>
</html>