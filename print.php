<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Currentnewsbd24 - A Reliable Online Newspaper in Bangladesh</title>
<link href='images/favicon.ico' rel='icon' type='image/x-icon'/> 
<link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php include "dbconnect.php";?>
    <div class="printoption">
 <div id="awssomefon"> <a onclick="window.print()" href=""><i class="fa fa-print"></i>&nbsp;প্রিন্ট</a></div>
 <div class="plogo"><a href="index.php"><img src="images/plogo.png"></a></div>  
    
    <?php
	$query= "SELECT * FROM newstype where title='".$_REQUEST['title']."'";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
      
 <div class="ptitle"><?php echo $vquery2['title']; ?></div>
 <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
     <div class="datetime"><em><?php echo $vquery2 ['author'];?></em></div>
 
 
 <div class="pdetails"> 
   <img src="admin/<?php echo $vquery2['images'];?>" class="pimg">
    <?php echo $vquery2['description'];?>
 
 <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2; ?>
 
 <div class="clr"></div>
 </div>


  
  <?php } ?>
  <div class="pauthor"> 
  <strong>সম্পাদক ও প্রকাশক : লুৎফুন নাহার রহমান</strong><br><br>
  বাসা নং-১৬৭ (৪র্থ তলা), রোড নং- ০৩, নিউ ডিওএইচএস, মহাখালী, ঢাকা-১২০৬ হতে প্রকাশিত। <br>
  ফোনঃ ০২ ৯৮৯৪৯৭১,ফ্যাক্স : ০২ ৯৮৯৪৯৭১<br>
  বার্তা বিভাগ : ০১৭২১ ১০৩৫৭১, ০১৯৭১ ১০৩৫৭১, ০১১৯৫ ০৮৭১৪২, ০১৬১৫ ০৮৭১৪২, ০১৬৭৬ ০৬২১৫৭<br>
  রোদেলা মিডিয়া লিমিটেডের একটি অঙ্গ প্রতিষ্ঠান
  
  </div>
  
  
<div class="clr">  </div>
    </div>
</body>
</html>