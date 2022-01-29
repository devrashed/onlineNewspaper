<?php
    $query= "SELECT * FROM newstype where category='".@$_GET['catid']."'";
	$rsquery= mysql_query($query); 
	$vquery=mysql_fetch_array($rsquery);
  ?>
   
 <?php if ($vquery['category']=='politics') {?>
   <title>Currentnewsbd24 - রাজনীতি</title>
 <?php }elseif ($vquery['category']=='national') {?>
   <title>Currentnewsbd24 - জাতীয়</title> 
 <?php }elseif ($vquery['category']=='saradesh') { ?>
   <title>Currentnewsbd24 - দেশবাংলার খবর</title> 
 <?php }elseif ($vquery['category']=='sports') { ?>
   <title>Currentnewsbd24 - খেলাধুলা</title> 
 <?php }elseif ($vquery['category']=='international') { ?>
   <title>Currentnewsbd24 - আন্তর্জাতিক</title> 
 <?php }elseif ($vquery['category']=='finance') { ?>
   <title>Currentnewsbd24 - অর্থ-বাণিজ্য</title> 
 <?php }elseif ($vquery['category']=='entertainment') { ?>
   <title>Currentnewsbd24 - বিনোদন</title> 
 <?php }elseif ($vquery['category']=='educations') { ?>
   <title>Currentnewsbd24 -শিক্ষার আলো</title> 
 <?php }elseif ($vquery['category']=='lawcourt') { ?>
   <title>Currentnewsbd24 - আইন-আদালত</title> 
 <?php }elseif ($vquery['category']=='informationscience') { ?>
   <title>Currentnewsbd24 - তথ্য-প্রযুক্তি</title> 
 <?php }elseif ($vquery['category']=='health') { ?>
   <title>Currentnewsbd24 -স্বাস্থ্যকথা</title> 
 <?php }elseif ($vquery['category']=='editorial') { ?>
   <title>Currentnewsbd24 -সম্পাদকীয়</title> 
 <?php }elseif ($vquery['category']=='specialfeature') { ?>    
    <title>Currentnewsbd24 -খোলা কলম</title> 
 <?php }elseif ($vquery['category']=='islam') { ?> 
 <title>Currentnewsbd24 - ইসলাম</title>  
 <?php }elseif ($vquery['category']=='krishienvironment') { ?> 
 <title>Currentnewsbd24 - কৃষি ও পরিবেশ</title> 
 <?php }elseif ($vquery['category']=='khatme') { ?> 
 <title>Currentnewsbd24 -খাতমে নবুয়াত</title> 
   <?php }elseif ($vquery['category']=='interview') { ?> 
 <title>Currentnewsbd24 - সাক্ষাৎকার</title> 
  <?php }elseif ($vquery['category']=='dorbarsharif') { ?> 
 <title>Currentnewsbd24 - দরবার শারিফ</title> 
  <?php }elseif ($vquery['category']=='artculture') { ?> 
 <title>Currentnewsbd24 - শিল্প- সাহিত্য</title> 
  <?php }elseif ($vquery['category']=='rokomary') { ?> 
 <title>Currentnewsbd24 - রকমারি</title> 
  <?php }elseif ($vquery['category']=='lifestyle') { ?> 
 <title>Currentnewsbd24 - লাইফস্টাইল</title> 
<?php  }else {?>
<title>Currentnewsbd24 - Our trusted Message in online</title>
<meta name="keyword" content="Bangladeshi Online Newspaper, ">
<meta name="description" content="Bangladeshi news paper">
<?php } ?>