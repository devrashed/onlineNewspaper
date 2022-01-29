<div class="online-archive-title"> <div class="online-archive-news"><a href="#">আজকের জরিপ</a></div>
<div class="clr"> </div>
</div>
<?php 
include "dbconnect.php";	
include_once("gdate.php");
?>

<span class="onlinemessage">
<?php if (@$_GET['msg']) {?>
<div class="alert alert-success" role="alert"><?php if (isset($_GET['msg'])) { echo "$_GET[msg]"; } ?></div>
<?php } ?>
</span>

<?php

	$query= "SELECT * FROM surve order by id DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
	{
 ?>

 <?php echo $vquery2['questions'];?>
 
 <?php } ?>  

 <form action="survayresult.php"  name="survay" method="POST" enctype="multipart/form-data">

 <input type="radio" name="answer" value="1" />হ্যাঁ<br />
 <input type="radio" name="answer" value="2" />না<br />
 <input type="radio" name="answer" value="3" />মন্তব্য নেই<br />

<div style="width:100%; float:left;"> <button type="submit" class="btn btn-success" value="" style="float:left;"> ভোট দিন </button> &nbsp;&nbsp; <div class="homeresult"><a href="insertsurvay.php">ফলাফল</a> </div> </div>

 </form>



