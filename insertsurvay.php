<?php include_once("header.php");?>
<?php 
/*date_default_timezone_set("Asia/Dhaka");
$timestamp = date("h:i:s a", time()); 
$cdate=date("Y-m-d");*/
include_once("gdate.php");
?>
<div id="wrapper">
<br>
<ol class="breadcrumb">
  <li><a href="index.php">প্রচ্ছদ</a></li>
  <li class="active">জনমত জরিপ</li>
</ol>
<h3 class="in-title">জনমত জরিপ</h3>
<?php

	$query= "SELECT * FROM surve order by id DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
   {
 ?>

<div class="todayquestions"> আজকের জরিপ :  <?php echo $vquery2['questions'];?></div>
 
 <?php 
 
  if(@$_POST['answer']!="")
 {

 $query = "INSERT INTO survayans (`qid`,`answer`,`ipadd`,`cdate`,`ctime`,`btime`,`bdate`) Values 
 ('".$vquery2['id']."','".$_POST['answer']."','".$_SERVER['REMOTE_ADDR']."','".$GM_D."','".$CUR_D_Bangladesh."','".$convertedtime."','".$convertedDATE."')";
  
$Query2= mysql_query($query) or die(mysql_error());

if($Query2)
	
	{
   $msg= "আপানর উত্তরের জন্য আপনাকে ধন্যবাদ";
   header("location:index.php?msg=$msg");
	}
	
	else{
$error= "আপানর উত্তর পছন্দ করেন";	
header("location:http://localhost/newspaper&error=$error");
	 }
    }
  // } 
 ?>
 
<br />

<?php 
$query= "SELECT count(qid) FROM survayans WHERE qid='".$vquery2['id']."'";
$total=mysql_result(mysql_query($query),0);

?>

<div class="todayquestions">ফলাফল :</div>
<span class="result">হ্যাঁ</span>
<?php 
	$query= "SELECT count(*) FROM survayans WHERE answer='1' AND qid='".$vquery2['id']."' order by qid";
	///$rsquery= mysql_query($query);
	$yes=mysql_result(mysql_query($query),0);
	//echo $yes."&nbsp;&nbsp;";
	$yesper =(($yes*100)/$total);
	$yesbefor=substr($yesper,0,3);
	$yesafter=substr($yesper,3,2);
	$yesresult=$yesbefor.$yesafter."% :";

	$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
	$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
	echo $totalyes = str_replace($englishdigit, $bangladigit, $yesresult);
	
?>


<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
   style="width:<?php echo $yesbefor.$yesafter;?>%">
    <span class="sr-only"></span>
  </div>
</div>
<span class="result">না</span> 
<?php
    $query= "SELECT count(*) FROM survayans WHERE answer='2' AND qid='".$vquery2['id']."' order by qid";
    $no=mysql_result(mysql_query($query),0);
	//echo $no."&nbsp;&nbsp;&nbsp;";
	
	$noper =(($no*100)/$total);
	$nobefor=substr($noper,0,3);
	$noafter=substr($noper,3,2);
	$noresult=$nobefor.$noafter."% :";
	
	$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
	$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
	echo $totalno = str_replace($englishdigit, $bangladigit, $noresult);
?>  
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" 
  style="width: <?php echo $nobefor.$noafter;?>%">
    <span class="sr-only"></span>
  </div>
</div>
<span class="result">মন্তব্য নেই</span>
<?php

	$query= "SELECT count(*) FROM survayans WHERE answer='3' AND qid='".$vquery2['id']."' order by qid";
    $nocomment =mysql_result(mysql_query($query),0);
   // echo $nocomment."&nbsp;&nbsp;&nbsp;";
   
    $nocommentper =(($nocomment*100)/$total);
	$nocommentbefor=substr($nocommentper,0,3);
	$nocommentafter=substr($nocommentper,3,2);
	$comment=$nocommentbefor.$nocommentafter."% :";
    
	$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
	$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
	echo $commentno = str_replace($englishdigit, $bangladigit, $comment);
	
?>  
<div class="progress">
  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
   style="width:<?php echo $nocommentbefor.$nocommentafter;?>%">
    <span class="sr-only"></span>
  </div>
</div>
<span class="result">মোট ভোট :</span> 

<?php 
//$total
$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
echo $ctotal = str_replace($englishdigit, $bangladigit, $total);   

?>

<?php }  ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<span class="onlineresult">অনলাইন জরিপ ফলাফল:</span>
             <!--survay Archive-->

<?php
    $perpa=1;
		$re1=mysql_query("select count(id) row FROM surve ORDER BY id DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
		 
	$query= "SELECT * FROM surve order by id DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
   {
 ?>

<div class="todayquestions"><?php echo $vquery2['questions'];?></div>

<?php 
$query= "SELECT count(qid) FROM survayans WHERE qid='".$vquery2['id']."'";
$total=mysql_result(mysql_query($query),0);
?>

<div class="todate"><?php echo $vquery2['bdate'];?></div>
<div class="todayquestions">ফলাফল :</div>

<span class="result">হ্যাঁ</span>
<?php 
	$query= "SELECT count(*) FROM survayans WHERE answer='1' AND qid='".$vquery2['id']."' order by qid";
	///$rsquery= mysql_query($query);
	$yes=mysql_result(mysql_query($query),0);
	//echo $yes."&nbsp;&nbsp;";
	$yesper =(($yes*100)/$total);
	$yesbefor=substr($yesper,0,3);
	$yesafter=substr($yesper,3,2);
    $yesresult=$yesbefor.$yesafter."% :";
	
	$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
	$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
	echo $totalyes = str_replace($englishdigit, $bangladigit, $yesresult);
?>


<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
   style="width:<?php echo $yesbefor.$yesafter;?>%">
    <span class="sr-only"></span>
  </div>
</div>
<span class="result">না</span> 
<?php
    $query= "SELECT count(*) FROM survayans WHERE answer='2' AND qid='".$vquery2['id']."' order by qid";
    $no=mysql_result(mysql_query($query),0);
	//echo $no."&nbsp;&nbsp;&nbsp;";
	
	$noper =(($no*100)/$total);
	$nobefor=substr($noper,0,3);
	$noafter=substr($noper,3,2);
	$noresult=$nobefor.$noafter."% :";
	
	$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
	$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
	echo $totalno = str_replace($englishdigit, $bangladigit, $noresult);
?>  
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" 
  style="width: <?php echo $nobefor.$noafter;?>%">
    <span class="sr-only"></span>
  </div>
</div>
<span class="result">মন্তব্য নেই</span>
<?php

	$query= "SELECT count(*) FROM survayans WHERE answer='3' AND qid='".$vquery2['id']."' order by qid";
    $nocomment =mysql_result(mysql_query($query),0);
   // echo $nocomment."&nbsp;&nbsp;&nbsp;";
   
    $nocommentper =(($nocomment*100)/$total);
	$nocommentbefor=substr($nocommentper,0,3);
	$nocommentafter=substr($nocommentper,3,2);
	$comment=$nocommentbefor.$nocommentafter."% :";

	$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
	$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
	echo $commentno = str_replace($englishdigit, $bangladigit, $comment);
?>  
<div class="progress">
  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
   style="width:<?php echo $nocommentbefor.$nocommentafter;?>%">
    <span class="sr-only"></span>
  </div>
</div>
<span class="result">মোট ভোট :</span> <?php  //$total;

$englishdigit=array(1,2,3,4,5,6,7,8,9,0); 
$bangladigit=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
echo $ctotal = str_replace($englishdigit, $bangladigit, $total);  
?>

<?php }  ?>
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"insertsurvay.php?", $perpa);?></span></div>  
</div>


<div class="clr"></div>
<?php include_once ("footer.php");?>