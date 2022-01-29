	<?php 
	/*include "dbconnect.php";*/
	$query= "SELECT * FROM newstype WHERE category='national' order by nid DESC LIMIT 4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  
           
    
    <div class="nation-block">
    <img src="admin/<?php echo $vquery2 ['images'];?>" class="national-img">
    <div class="national-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div> 
    <!--<div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> -->
 <!--   <div style="font-size:14px;"><?php  //$content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1); 
	//echo $content2=strip_tags(substr($content, 0, 300)); ?> </div>-->
     
    <!--<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div> -->
 <!--   <div class="home-hr"></div>   -->    
   </div>
 
      <?php } ?>    

<div class="col-national">
 
 <ul>
  <?php
	
	$query= "SELECT * FROM newstype Where category='national' order by nid DESC LIMIT 4, 2";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>

 <li><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><i class="fa fa-angle-double-right arrowicon"></i><?php echo $vquery2 ['title'];?></a></li>
 <?php } ?>

  </ul>
 
 
 </div>
 <div class="clr"></div>
<div class="po-de"><a href="inn.php?catid=national">আরো খবর</a></div>
           