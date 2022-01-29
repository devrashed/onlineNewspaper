<?php 
include_once("header.php");
?>
<?php 
    $sql ="update newstype set nstatus=nstatus+1 where title='".$_GET['title']."'";
    $rsquery=mysql_query($sql);
?>
<div id="wrapper">
 
 
  <div class="innnerleft">
   <?php include_once("bradecumb.php");?>

 
    
    <div id="fontlinks">
    
    
<div class="fb-like" data-href="indetails.php?title=<?php echo $_GET['title']; ?>" data-layout="box_count" data-send="true" data-action="like" data-show-faces="false" data-share="false"></div>

<div class="fb-share-button" data-href="indetails.php?title=<?php echo $_GET['title']; ?>" data-layout="box_count"></div>

<div class="fb-send" data-href="indetails.php?title=<?php echo $_GET['title']; ?>" data-kid-directed-site="false" data-colorscheme="light"></div>
<div class="g-plusone" data-size="tall"></div>
<span class='st__vcount' displayText=''></span>
<span class='st_email_vcount' displayText='Email'></span>
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>

    <a target="_blank" href="print.php?title=<?php echo $_GET['title']; ?>" id="print" class="button buttonfont" ><i class="fa fa-print"></i>&nbsp;প্রিন্ট</a>&nbsp;
  	<a href="#" id="incfont" class="button buttonfont">ক+</a>
    <a href="#" id="orsize" class="button buttonfont">&nbsp;ক&nbsp;</a>
    <a href="#" id="decfont" class="button buttonfont">ক-</a>
    </div>
   
    <?php
	
	$query= "SELECT * FROM newstype where title='".$_GET['title']."' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery3=mysql_fetch_array($rsquery))
    {
 ?>
     
     <h3 class="in-title"><?php echo $vquery3['title'];?> <?php //echo $vquery3['nid'];?></h3>
     <div class="datetime"><em><?php echo $vquery3 ['bdate'];?>&nbsp;,&nbsp;<?php echo $vquery3 ['btime'];?></em></div> 
     <div class="datetime"><em><?php echo $vquery3 ['author'];?></em></div>
     
      <div class="dtalilfunc"> <img src="admin/<?php echo $vquery3 ['images'];?>" class="detailimg"></div>
     	<div id="content">
         
     <?php $content=$vquery3['description'];
 	     echo $content = preg_replace("/<\/?div[^>]*\>/i", "", $content); 
     ?>
    
     </div>
 <br>
<br>
<br>
<br>
    
<iframe width="383" height="250" src="<?php echo $vquery3['youtube'];?>" frameborder="0" allowfullscreen style="width:450px; height:250px;"></iframe> 
      
   <?php }  ?> 

<br>
<?php if ($vquery['category']!='opentalk') {?>
<div class="detanotice"> <em>কারেন্ট নিউজ বিডি ২৪ থেকে প্রকাশিত/প্রচারিত যে কোন ধরণের তথ্য, সংবাদ, ছবি, আলোকচিত্র,ভিডিওচিত্র, অডিও কনটেন্ট কপিরাইট আইনে কারেন্ট নিউজ বিডি ২৪ পূর্বানুমতি ছাড়া ব্যবহার করা যাবে না।</em> </div>
<?php } /*if ($vquery['category']=='opentalk') {?>
<div class="detanotice"><em>নিউজ ইন বিডি'তে প্রকাশিত যে কোন ধরণের মন্তব্য কলাম/মুক্তমত/নাগরিক সাংবাদিকতা লেখার দায় সম্পূর্ণরূপে লেখকের। নিউজ ইন বিডি'র সম্পাদকীয় নীতিমালার সাথে এর কোন সম্পর্ক নেই।</em> </div>
<?php }*/ ?>

<br>
<!--<div class="social"> </div>-->

<?php
$currentlink = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
echo "<fb:comments href='$currentlink' num_posts='10' width='770'></fb:comments>";
?>

 
 </div>
    
<div class="innerright">

<div class="in-right-title"> এই পাতার অন্য সংবাদ </div>  

  <div class="in-latest">

 <?php
	
	$query= "SELECT * FROM newstype WHERE category='".$vquery['category']."' order by nid DESC LIMIT 25";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
?>
 <ul>

 <li><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a></li>

 </ul>


<?php } ?>	



</div>


  <?php //} ?> 

<?php //include_once("in_last.php");?></div>

<div class="in_archive"> 

<div class="online-archive-title">
<div class="online-archive-news"><a href="#">আজকের জরিপ</a></div>
<div class="clr"> </div>
</div>
<form action="archive.php" enctype="multipart/form-data" method="post">
<table width="285" height="80" align="center">

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
<option value="health">স্বাস্থ্য</option>
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
<td width="62" align="center">
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
<td width="69" align="center">
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
<td width="74" align="center">
<select name="year" style="font-size:17px;">
<option  selected>-বছর-</option>
<option value="2014">২০১৪</option>

</select>
</td>
<td width="75" align="center">
<input name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</div>




</div><!--END THE Wrapper-->
<?php //} ?>
<br>


<div class="clr"></div>
<?php include_once ("footer.php");?>
 
    
    
    