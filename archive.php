<?php 
include_once("header.php");
?>


<?php 
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$cat=$_POST['cat'];

$todate = "$year-$month-$date";
?>


     
     

<div id="wrapper">

    <div class="innnerleft"> 
<form action="archive.php" enctype="multipart/form-data" method="post">
<table width="315" height="80" align="center">

<tr>
<td height="42" colspan="4" align="center">
<select name="cat" style="font-size:15px;">

<option selected>-নিউস ক্যাটাগরি-</option>

<option value="national">জাতীয়</option>
<option value="politics">রাজনীতি</option>
<option value="saradesh">সারাদেশ</option>
<option value="sports">খেলা</option>
<option value="international">আন্তর্জাতিক</option>
<option value="finance">অর্থ-বাণিজ্য</option>
<option value="entertainment">বিনোদন</option>
<option value="educations">শিক্ষাঙ্গন</option>
<option value="lawcourt">আইন-আদালত</option>
<option value="health">স্বাস্থ্যকথা</option>
<option value="informationscience">তথ্য-প্রযুক্তি</option>
<option value="editorial">সম্পাদকীয়</option>
<option value="specialfeature">বিশেষ প্রতিবেদন</option>
<option value="islam">ইসলাম</option>
<option value="krishienvironment">কৃষি ও পরিবেশ</option>
<option value="media">গণমাধ্যম</option>
<option value="opentalk">মুক্তমত</option>
<option value="interview">সাক্ষাৎকার</option>
<option value="artculture">শিল্প- সাহিত্য</option>
<option value="lifestyle">লাইফস্টাইল</option>
<option value="rokomary">রকমারি</option>

</select>
</td>
</tr>
<tr>
<td width="70" align="center">
<select name="date" style="font-size:15px;">
<option selected>-দিন-</option>
<option value="01">০১</option>
<option value="02">০২</option>
<option value="03">০৩</option>
<option value="04">০৪</option>
<option value="05">০৫</option>
<option value="06">০৬</option>
<option value="07">০৭</option>
<option value="08">০৮</option>
<option value="09">০৯</option>
<option value="10">১০</option>
<option value="12">১২</option>
<option value="13">১৩</option>
<option value="14">১৪</option>
<option value="15">১৫</option>
<option value="16">১৬</option>
<option value="17">১৭</option>
<option value="18">১৮</option>
<option value="19">১৯</option>
<option value="20">২০</option>
<option value="21">২১</option>
<option value="22">২২</option>
<option value="23">২৩</option>
<option value="24">২৪</option>
<option value="25">২৫</option>
<option value="26">২৬</option>
<option value="27">২৭</option>
<option value="28">২৮</option>
<option value="29">২৯</option>
<option value="30">৩০</option>
<option value="31">৩১</option>


</select>
</td>
<td width="74" align="center">
<select name="month" style="font-size:15px;">
<option  selected>-মাস-</option>
<option value="01">০১</option>
<option value="02">০২</option>
<option value="03">০৩</option>
<option value="04">০৪</option>
<option value="05">০৫</option>
<option value="06">০৬</option>
<option value="07">০৭</option>
<option value="08">০৮</option>
<option value="09">০৯</option>
<option value="10">১০</option>
<option value="11">১১</option>
<option value="12">১২</option>
</select>
</td>
<td width="86" align="center">
<select name="year" style="font-size:15px;">
<option  selected>-বছর-</option>
<option value="2014">২০১৪</option>
<option value="2014">২০১৫</option>
</select>
</td>
<td width="65" align="center">
<input name="submit" type="submit" value="Submit">

</td>
</tr>
</table>
</form>
   
 
<?php	
	
	if($_POST['cat']=='0'){
		$error= "sssssssssssss";
		header("location:archive.php?&error=$error");
	return false;
	}
	
	
	$query= "SELECT * FROM newstype WHERE cdate='$todate' AND category='$cat'order by nid DESC";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
     
     <div style="width:100%; float:left; height:auto;">
       <div class="searchtitle"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> <i class="fa fa-angle-double-right arrowicon"></i>&nbsp;
	   <?php echo $vquery2['title'];?> </a></div> 
        
       <div style="float:right;margin-top: -21px;"><?php echo $vquery2['category']; ?></div>
    </div> 

 <?php } ?>
   
    
  
    <!--<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>-->
    
  </div>  
  





<div class="innerright"><?php include_once("innrlatest.php");?></div>

</div><!--END THE Wrapper-->
<br>
<div class="clr"></div>
<?php include_once ("footer.php");?>    