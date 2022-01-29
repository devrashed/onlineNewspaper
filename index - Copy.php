<?php include_once("header.php"); ?>

 
<!--Start Wrapper
============================-->
<div id="wrapper"> 

<div class="latest-news"> 
 
   <div class="update-bar">শিরোনাম</div>  <i class="fa fa-caret-right latest-bar-arrow"></i> 
   
 <div class="headline">
  <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);"> 
    <ul>


     <?php
	
	$query= "SELECT * FROM newstype order by nid DESC LIMIT 15";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>  
    <li><i class="fa fa-angle-double-right" style="margin-top:5px;"></i><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a></li>
  

    <?php } ?>  
    </ul>
  
         </marquee>
 
  </div>  
  

     
     
<div class="social-media"> 

<div class="rss"><a href="fss.xml"><i class="fa fa-rss-square"></i></a></div>
<div class="youtube"><a href="#"><i class="fa fa-youtube-square"></i></a></div>
<div class="gplus"><a href="#"><i class="fa fa-google-plus-square"></i></a></div>
<div class="tweter"><a href="#"><i class="fa fa-twitter-square"></i></a></div>
<div class="face"><a href="#" > <i class="fa fa-facebook-square"></i> </a></div>



</div>
  
</div>

 
 
 <div class="top-silde-left"> 
<?php include "slideshow.php";?>
 </div>

 <div class="top-silde-right">

   <div class="news-title"> <div class="nheadline"><a href="inn.php?catid=na">জাতীয়</a></div></div>
     <?php
	include_once("national.php");
?> 
   
   
     
 </div>

 <div class="clr">  </div> 
 
<div class="col-left">  
 
 
<div class="advertisement"> Addvertise </div>




<div class="politic">


<?php include_once 'politics.php'; ?>


 </div>


<div class="advertisement"> Addvertise </div>



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





<!--Saradesh Start 
=========================-->


<div class="saradesh"> 
<!--<div class="news-title">সারাদেশ</div>-->
<?php include_once ("saradesh.php");?>


<!--<div class="saradesh-col"> 1</div>
<div class="saradesh-col"> 2</div>
<div class="saradesh-col"> 3</div>
<div class="saradesh-col"> 4</div>-->
</div>


<!--Saradesh END 
=========================-->


<div class="col-left"> 

<div class="advertisement"> Addvertise </div>


<div class="sports">  
<div class="news-title"> <div class="nheadline"> <a href="inn.php?catid=sports">খেলা</a> </div>  </div>


<?php include_once "sports.php"; ?>


</div>



<div class="advertisement"> Addvertise </div>

<div class="education"> 

<div class="info-col"> 
<?php include "international.php"; ?>

</div>

<div class="info-col" style="margin-left:15px;"> 


<?php include "finance.php"; ?>


</div>


</div>

<div class="advertisement"> Addvertise </div>

<div class="entertainemnt"> 


<?php include_once "entertainment.php"; ?>

</div>
<div class="advertisement"> Addvertise </div>

<!--LEFT COL END 
=========================-->
</div>  


<div class="col-right"> 


<div class="editorial"> 

<?php include "editorial.php"; ?>

</div>


<div class="weather">
<div class="news-title">আজকের আবহাওয়া</div>

<?php include_once("weather.php");?>

</div>


<div class="advertise-right"> Addvertise </div> 

<div class="opentalk"><?php include "opentalk.php" ;?></div>
 
<div class="prees"> <?php include "interview.php"; ?> </div>   






</div> <!-- COL RIGHT-->





<div class="photo-gallery"> 

<div class="photo-box">

<div class="news-title">ফটো সংবাদ</div>

<?php include "photogallery.php" ;?>

</div>

<div class="videogalery"> 

<div class="news-title">নির্বাচিত ইউটিউব ভিডিও </div>

<?php //include "videogallery.php" ;?>


</div>




</div>



 

<div class="col-left" style="border:1px solid #000;">  

<div class="advertisement"> Addvertise </div>


<div class="news-category"> 

<?php include_once("variouscategory.php");  ?>

</div>


<div class="advertisement"> Addvertise </div>


<div class="shilpo"> 

<!--<div class="news-title"> লাইফস্টাইল, শিল্প ও সাহিত্য &nbsp;&nbsp;&nbsp;&nbsp;ফিচার &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; গণমাধ্যম, কৃষি ও পরিবেশ </div>-->

<?php include_once "life.php"; ?>


</div>

<div class="advertisement"> Addvertise </div>

<div class="row-bar"> 

<div class="islam-col"> 
<div class="news-title">ইসলাম</div>
<?php include "islam.php" ;?>

</div>


<div class="info-col"> 
<div class="news-title"> তথ্য-প্রযুক্তি </div>

<?php include "infoscience.php"; ?>

</div>


</div>


<div class="advertisement"> Addvertise </div>






<!--LEFT COL END 
=========================-->
</div>   






<div class="col-right"> 




<div class="online-servay">

<?php include "online_serveay.php";?>
</div>



<div class="facebookbox"> Facebook Box</div>

<div class="archive"> 

<div class="news-title">আর্কাইভ </div>
<br>
<br>
<form action="archive.php" enctype="multipart/form-data" method="post">
<table width="362" height="65" align="center">

<tr>
<td width="93" height="27" align="center">দিন</td>
<td width="93" align="center">মাস</td>
<td width="100" align="center">বছর</td>
<td width="56" align="center"></td>
</tr>
<tr>
<td align="center">
<select name="date">
<option selected>--Select--</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>


</select>
</td>
<td align="center">
<select name="month">
<option  selected>--Select--</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="12">12</option>

</select>
</td>
<td align="center">
<select name="year">
<option  selected>--Select--</option>
<option value="2014">2014</option>

</select>
</td>
<td align="center">
<input name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</div>

<div class="prayer-time"> 
<div class="news-title">নামাজের সময়সূচী</div>
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

<div class="prees"> <?php include "special.php"; ?> </div>   


<div class="prees"> <?php include "ajke.php"; ?> </div>   


</div><!--RIHT COL END 
=========================-->




<div class="rokomar">
<div class="news-title">রকমারি </div>

<?php include "rokomary.php";?>



</div>

 <div class="clr">  </div> 
 <div id="brk_news"> </div>
</div> <!--END THE Wrapper-->


<?php include_once ("footer.php");?>

</body>
</html>

