<?php include "dbconnect.php";
include_once("gdate.php");
?>
 
 <?php 
 
  if(@$_POST['answer']!="")
 {

 $query = "INSERT INTO survayans (`qid`,`answer`,`ipadd`,`cdate`,`ctime`,`btime`,`bdate`) Values ('".$vquery2['id']."','".$_POST['answer']."','".$_SERVER['REMOTE_ADDR']."','".$GM_D."','".$CUR_D_Bangladesh."','".$convertedtime."','".$convertedDATE."')";
  
$Query2= mysql_query($query) or die(mysql_error());

if($Query2)
	
	{
   $msg=urlencode("জনমত জরিপে অংশ নেয়া জন্য আপনাক ধন্যবাদ");
   header("location:index.php?msg=$msg");
	}
	
	else{
$error= "আপানর উত্তর পছন্দ করেন";	
header("location:index.php?error=$error");
	 }
    }
    	
 ?>


