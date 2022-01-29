<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<?php
	include('config.php');
	
	if(isset($_POST['vote']) && isset($_POST['questions'])){
		$query = mysql_query("SELECT `questions`.`pid` FROM  `responses`, `questions` WHERE `responses`.`qid`=`questions`.`id` AND `responses`.`ip`='".$_SERVER['REMOTE_ADDR']."' AND pid=(SELECT pid FROM `questions` WHERE id='".$_POST['questions']."' LIMIT 1)");
		
		if(mysql_num_rows($query) == 0){
			$query = mysql_query("INSERT INTO `responses` (`qid`, `ip`) VALUES ('".$_POST['questions']."', '".$_SERVER['REMOTE_ADDR']."')");
		} else {
			$error = 'You Already Voted';
		}		
	} else if(!isset($_POST['questions']) && isset($_POST['vote'])){
		$error = 'You Need To Select a Question';
	}
	
	include('poll.php');
?>



<?php 
/*@$currentDate = date("l, F j, Y");
@$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
@$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
@$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
echo "$convertedDATE";*/

 ?>