<?php 
include_once("mhead.php");
?>
<?php 
    $sql ="update newstype set nstatus=nstatus+1 where title='".$_GET['title']."'";
    $rsquery=mysql_query($sql);
?>
<div class="mwrapper">
  <header>

        <div class="mdate">
     <?php include_once("gdate.php");?>
       ঢাকা&nbsp;<?php echo "$presentDate"; ?>,  
    <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
         
    </div>

    <div id="mlogo"><a href="index.php"><img src="plogo.png"></a></div>
    <div class="mmenu"> 
    
    <div id="navmenu"> <a href="#mfooter"><i class="fa fa-reorder"></i> </a></div>
    
    <div class="desktop"> <a href="http://currentnewsbd24.com"> <i class="fa fa-desktop awefont"></i></a></div>
     
    </div> 
   
</header>
 
  <div class="innnerleft">
     
    <div id="fontlinks">
    
    
<span class='st_facebook_vcount' displayText='Facebook'></span>
<span class='st_fbsend_vcount' displayText='Facebook Send'></span>
<span class='st_fblike_vcount' displayText='Facebook Like'></span>
<!--<span class='st_email_vcount' displayText='Email'></span>-->

<span class='st__vcount' displayText=''></span>
<span class='st_email_vcount' displayText='Email'></span>

<div class="g-plusone" data-size="tall"></div>
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>

    </div>
   
    <?php
	
	$query= "SELECT * FROM newstype where title='".$_GET['title']."'";
	$rsquery= mysql_query($query); 
	while ($vquery3=mysql_fetch_array($rsquery))
    {
 ?>
     
     <h3 class="in-title"><?php echo $vquery3['title'];?></h3>
     <div class="datetime"><em><?php echo $vquery3 ['bdate'];?>&nbsp;<?php echo $vquery3 ['btime'];?></em></div> 
     <div class="datetime"><em><?php echo $vquery3 ['author'];?></em></div>
     
      <div class="dtalilfunc"> <img src="http://currentnewsbd24.com/admin/<?php echo $vquery3 ['images'];?>" class="detailimg"></div>
     	<div id="content">
         
     <?php $content=$vquery3['description'];
 	     $content = preg_replace("/<\/?div[^>]*\>/i", "", $content); 
		 echo $content;
	 ?>
       </div>
 <?php }  ?> 

<br>
<?php if ($vquery['category']!='opentalk') {?>
<div class="detanotice"> নিউজ ইন বিডি ডট কম'এ প্রকাশিত/প্রচারিত যে কোন ধরণের তথ্য, সংবাদ, ছবি, আলোকচিত্র, রেখাচিত্র, ভিডিওচিত্র, অডিও কনটেন্ট কপিরাইট আইনে পূর্বানুমতি ছাড়া ব্যবহার করা যাবে না। </div>
<?php } if ($vquery['category']=='opentalk') {?>
<div class="detanotice">নিউজ ইন বিডি'তে প্রকাশিত যে কোন ধরণের মন্তব্য কলাম/মুক্তমত/নাগরিক সাংবাদিকতা লেখার দায় সম্পূর্ণরূপে লেখকের। নিউজ ইন বিডি'র সম্পাদকীয় নীতিমালার সাথে এর কোন সম্পর্ক নেই। </div>
<?php } ?>

<br>
<!--<div class="social"> </div>-->


<?php
/*$currentlink = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
echo "<fb:comments href='$currentlink' num_posts='10' width='670'></fb:comments>";*/
?>


 </div>
    
    
 <!--<div class="innerright">

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
 </div>--><!--END THE Wrapper-->

</div>

<div class="clr"></div>
<?php include_once ("mfooter.php");?>
 
    
    
    
    