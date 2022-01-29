<?php 
include_once("header.php");
include_once("gdate.php");
//include_once("date.php");
?>
<?php include "dbconnect.php";?>

<div id="wrapper">
    
    <div class="innnerleft">

<div class="onlinemessage">
<?php if (@$_GET['msg']) {?>
<div class="alert alert-success" role="alert"><?php if (isset($_GET['msg'])) { echo "$_GET[msg]"; } ?></div>
<?php } ?>
</div>
  
  <?php 
	$query= "SELECT * FROM surve order by id DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	$vquery2=mysql_fetch_array($rsquery);
  ?>
    
     
 <?php 
 
  if(@$_POST['answer']!="")
 {

 $query = "INSERT INTO survayans (`qid`,`answer`,`ipadd`,`cdate`,`ctime`,`btime`,`bdate`) 
 Values ('".$vquery2['id']."','".$_POST['answer']."','".$_SERVER['REMOTE_ADDR']."',
 '".$CUR_D_Bangladesh."','".$GM_D."','".$convertedtime."','".$convertedDATE."')";
  
$Query2= mysql_query($query) or die(mysql_error());

if($Query2)
	
	{
   $msg=urlencode("আপনার মতামত প্রকাশ করার জন্য ধন্যবাদ");
   header("location:survayresult.php?msg=$msg");
	}
	
	else{
$error= "দয়া করে আপনি সঠিক উত্তরটি দেন";	
header("location:survayresult.php?error=$error");
	 }
    }
    	
 ?>
    
 
<div class="resulttitle"> <div class="resresult"><a href="insertsurvay.php">ফলাফল</a></div> </div>
    
    
    </div>
 
<div class="innerright"><?php include_once("innrlatest.php");?></div>






</div><!--END THE Wrapper-->
<br>
<div class="clr"></div>
<?php include_once ("footer.php");?>