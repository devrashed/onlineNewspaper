 <?php include_once("header.php");
include "dbconnect.php";
 ?>

<div class="social"> 
<div class="youtube"><a href="https://www.youtube.com/channel/UC_MmfYj4q80iG3KgOgzL4Og"><i class="fa fa-youtube-square"></i></a></div>
<div class="gplus"><a href="https://plus.google.com/u/0/b/117249197325341594713/117249197325341594713/about?hl=en" target="_blank"><i class="fa fa-google-plus-square"></i></a></div>
<div class="tweter"><a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></div>
<div class="face"><a href="https://www.facebook.com/pages/currentnewsbd24com/320278748161275?ref=bookmarks" target="_blank"> <i class="fa fa-facebook-square"></i></a></div>
</div>

 <div class="clr"></div>
<!--Start Wrapper
============================-->
<div id="wrapper"> 


<div id="back-top" class="back-top">
<div class="topicons"> <a href="#top"><span style="display: block;"><i class="fa fa-arrow-up"></i> </span> </a> </div>
</div>



<div class="latest-news"> 

<div class="brackingtop"><div class="news-bar">ব্রেকিং নিউজ</div><i class="fa fa-caret-right" id="arrowcolor"></i></div>
   
 <div class="headline"> 
 
 <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);"> 
     <?php
	
	$query= "SELECT * FROM newstype where bracking='yes'  order by nid DESC LIMIT 15";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>  
<i class="fa fa-angle-double-right" style="margin-top:5px;"></i> &nbsp; <a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="newstitle"><?php echo $vquery['title']; ?></a>&nbsp;
  

    <?php } ?> 
        </marquee> 
 
  </div> 
</div>




<div class="topbar">

 <div class="top-silde-left"> 
<?php include "slideshow.php";?>
 </div>


<div class="advertisement">
<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-2' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"> <?php echo"Please Add Here";?> </div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?><!--2-->
</div>

</div>
 <div class="top-silde-right">

   <div class="natioanl-news-title" > <div class="natinal-news"><a href="inn.php?catid=national">জাতীয়</a></div>
   <div class="clr"></div>
   </div>
     <?php
	 include_once("national.php");
     ?> 
  </div>

<!-- <div class="clr">  </div> -->
 
<div class="col-left">  
<div class="politic">  <?php include_once 'politics.php'; ?>  </div>




<div class="bottomadd">

<div class="leftad">

<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-3' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
<!--3-->
</div>

<div class="rightadver"> 

<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-4' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>

</div>

</div>

 <div class="clr">  </div> 
<!--LEFT COL END 
=========================-->
</div>  



<!--RIGHT COL Start 
=========================-->

<div class="col-right"> 

<div class="latest-bar"> <?php include_once "latest.php"; ?> </div>


</div>

<!--RIGHT COL END 
=========================-->






<!--First Midle Start 
=========================-->
<div class="mid-col-row"> 
  
   <div class="international-col"> 
    <div class="internation-news-title"> 
    <div class="internation-news"> <a href="inn.php?catid=islam">আন্তর্জাতিক</a> </div> 
 <div class="clr"> </div>
   </div>
<?php include "internatioanl.php" ;?>
   </div>
   
   
  <div class="technology-col">
<div class="infosience-news-title"><div class="infosience-news"><a href="inn.php?catid=informationscience">তথ্যপ্রযূক্তি</a></div> <div class="clr"> </div></div>
<?php include "infoscience.php" ;?>   
  </div>
   
 
    <div class="editorial-col">  

 <div class="editorial-news-title"> <div class="editorial-news"><a href="inn.php?catid=editorial">সম্পাদকীয়</a></div>  <div class="clr"></div></div>
 <?php include "editorial.php" ;?>  
   </div>

</div>


<!--First Midle End 
=========================-->




  <!--Advertisement Start-->
  
<div class="mid-col-row"> 

<div class="photo-left-add">

<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-5' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
<!--5-->
</div>


<div class="photo-right-add">

<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-6' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
<!--6-->
 </div>

</div>

 <!--Advertisement End-->




<!--Second Midle Start 
=========================-->

<div class="mid-col-row"> 

<div class="islam-col"> 
<div class="islam-news-title"><div class="islam-news"> <a href="inn.php?catid=islam">ইসলাম</a>  </div>  <div class="clr"> </div> </div>
<?php include "islam.php" ;?>
</div>

<div class="khatme-col"> 
<div class="khatme-news-title"> <div class="khatme-news"> <a href="inn.php?catid=khatme">খাতমে নবুয়াত </a> </div> <div class="clr"> </div> </div>
<?php include "khatme.php" ;?>
</div>


<div class="dorbar-col"> 
<div class="drober-news-title"> <div class="drober-news"><a href="inn.php?catid=dorbarsharif">দরবার শারিফ</a></div> <div class="clr"> </div> </div>
<?php include "dorbarsharif.php" ;?>
</div>

</div>



<!--Second Midle End 
=========================-->


<!--Third Midle Start 
=========================-->
<div class="mid-col-row"> 
   
  <div class="sports-col"> 
 <div class="sports-news-title"> <div class="sports-news"><a href="inn.php?catid=sports">খেলাধুলা</a> </div> <div class="clr"> </div> </div>
<?php include "sports.php" ;?>  
   </div>
 
 
 
 
 <div style="float:right; width:290px; height:auto; ">
 <div class="sportsright">
<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-7' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--7-->
  </div>  

     
  <div class="sportsright">
<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-8' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--8-->
  </div>  
       
       
       
       
  <div class="sportsright">
<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-9' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--9-->
  </div>  

    <div class="sportsright">
<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-10' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--10-->
  </div> 
  
    <div class="sportsright">
   <?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-11' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--11-->
  </div> 
  
    <div class="sportsright">
   <?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-11' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--11-->
  </div> 
  
 </div>
</div>

<!--Third Midle End 
=========================-->

<div class="photo-box">

<div class="photo-news-title">
<div class="photo-news"><a href="inn.php?catid=photo">ফটো সংবাদ</a></div> 

<div class="clr"></div>
</div>

<?php include "photogallery.php" ;?>

</div>

 <div class="video-col"> 
 <div class="video-news-title"><div class="video-news"><a href="inn.php?catid=video">ভিডিও গ্যালারি</a></div>
 <div class="clr"></div>
 </div>
<?php include "videogallery.php" ;?>  
   </div>




<div class="col-left"> 
<div class="lifestyle-category-col"> <?php include ("lifestyle.php") //("lifes/lifestyle.php");?></div>


<div class="clr">  </div> 
<!--LEFT COL END 
=========================-->
</div>  

<div class="col-right"> 
     

  
   <div class="international-col"> 
   <div class="finance-news-title"> <div class="finance-news"><a href="inn.php?catid=finance">অর্থ ও বাণিজ্য</a> </div> 
      <div class="clr"></div> 
    </div>
<?php include "finance.php" ;?>      
   </div>
   
  <!-- Onlne survay-->
    <div class="online-servay">
    
    <?php include "online_serveay.php";?>
    
    </div>
   
   <!-- =========================================
    =========================================-->




<!--<div class="weather">
<div class="weather-title"> <div class="weather-news"> <a href="#">আবহাওয়া</a> </div> <div class="clr"></div> </div>
<?php //include_once("weather.php");?>
</div>-->

<div class="rightadververtise">
   <?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-12' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
 <!--12-->
  </div>


<div class="archive"> 

<div class="online-archive-title"> <div class="online-archive-news"><a href="#">নিউজ আর্কাইভ</a></div>
<div class="clr"> </div>
</div>
<?php include"homearchive.php";?>
</div>

<div class="facebookbox">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2Fcurrentnewsbd24com%2F320278748161275%3Fref%3Dbookmarks&width&height=225&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" style="border:none; overflow:hidden; height:225px; width:370px; float:right;" allowTransparency="true"></iframe>
</div>

<div class="rightadververtise">
<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-13' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--13-->
  </div>


<div class="prayer-time"> 
<div class="prayer-title"> <div class="prayer-news"><a href="#">নামাজের সময়সূচী</a></div> <div class="clr"> </div> </div>

<table width="221" align="center"  id="prayertable">
 
  <?php
	
	$query= "SELECT * FROM prayertime order by pid DESC";
	$rsquery= mysql_query($query); 
	$vquery2=mysql_fetch_array($rsquery);
?>    
   <tr> 
    <td width="103" height="29">ফজর</td>
    <td width="95"><?php echo $vquery2['fozor'];?></td>
   </tr>
   <tr> 
    <td width="103" height="29">জোহর</td>
    <td width="95"><?php echo $vquery2['zuhor'];?></td>
   </tr>
   <tr> 
    <td width="103" height="29">আসর</td>
    <td width="95"><?php echo $vquery2['ashor'];?></td>
   </tr>
   <tr> 
    <td width="103" height="29">মাগরিব</td>
    <td width="95"><?php echo $vquery2['magrib'];?></td>
   </tr>
   <tr> 
    <td width="103" height="29">এশা</td>
    <td width="95"><?php echo $vquery2['esha'];?></td>
   </tr>
</table>

 </div>


<div class="rightadververtise">
    <?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-14' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
  <!--14-->
  </div> 
  
    <div class="press-title"> 
    <div class="press-news"><a class="#">প্রেসক্লাব</a></div>
    <div class="clr"> </div>      
    </div>  
   <div class="ajke-hedline">আজকের ঢাকা&nbsp;<?php echo $presentDate;?></div>
    
    <?php
	
	$query= "SELECT * FROM newstype where category='press' order by nid DESC LIMIT 10";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
   ?>
 
 
 <div class="ajker-var-col">  

  <?php echo $vquery['title']; ?>
   
 </div>
 
 <?php 
	}
 ?>
   
     
</div> <!-- COL RIGHT-->



<div class="col-left">  

<div class="news-category"> 

<?php include_once("variouscategory.php");  ?>

</div>


<div class="news-category-col"> <?php include "lawcourt.php"; ?> </div>
<div class="specialnews-col">
   <div class="special-news-title"> <div class="special-news"> <a href="inn.php?catid=specialfeature">বিশেষ কলাম</a> </div> 
    <div class="clr"></div> 
 </div>
<?php include "special.php" ;?>   
  </div>

<div class="advertisement">

<div class="centertad"> 

<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-15' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
<!--15-->
</div>



</div>


<!--<div class="shilpo"> 
<?php ///include_once "life.php"; ?>
<div class="artculture-col"><?php //include "artculture.php";?></div>

<div class="krishi-col"><?php //include "krishienvironment.php";?></div>

</div>-->


  <div class="bottomnews">
               
<div class="interview-col"> <?php include "interview.php"; ?> </div>   

<div class="opentalk-col"> <?php include "opentalk.php" ;?></div>

  </div>


<!--LEFT COL END 
=========================-->
</div>   

<!--RIHT COL END 
=========================-->

<div class="rokomar">
<div class="rokomari-news-title"> <div class="rokomari-news"> <a href="#">রকমারি</a> </div> 
<div class="clr"></div>
</div>
<?php include ("demorokoary/rokomay.php");?>
</div>


<div class="rokomaryadd">

<div class="leftad"> 

<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-16' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
<!--16-->
</div>

<div class="rightadver"> 

<?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-17' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <div class="addhere"><?php echo"Please Add Here";?></div>
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"> <img src="admin/<?php echo $vquery['titleimages'];?>"> </a>
         <?php 
	  	}
	  }
	  ?>
<!--17-->
</div>

</div>


<!--Saradesh Start 
=========================-->
<div class="saradesh"> 
<?php include_once ("saradesh/saradesh.php");?>
</div>


<div class="clr">  </div> 
 <div id="brk_news"> </div>
</div> <!--END THE Wrapper-->


<?php include_once ("footer.php");?>
</body>
</html>