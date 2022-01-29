
<div class="sport-left-col">
<?php
	
	$query= "SELECT * FROM newstype WHERE category='sports' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>
 
 <?php if ($vquery['topnews']=='yes') {?>
 
<div class="grid-col"> 
	<div class="scaption">
            	<h3><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a></h3>
               </div>
        	<img src="admin/<?php echo $vquery['images']; ?>" class="sportsimg"/>
      </div> 
 <div class="datetime"><em><?php echo $vquery ['bdate'];?>,&nbsp;<?php echo $vquery ['btime'];?></em></div> 
<?php  $content1=$vquery['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1); $content2=strip_tags(substr($content, 0, 370)); 
echo $content2;?>.... 
 
<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div>

  <?php }elseif ($vquery['topnews']!='yes') {?>

      <div class="grid-col"> 
	<div class="scaption">
            	<h3><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a></h3>
               </div>
        	<img src="admin/<?php echo $vquery['images']; ?>" class="sportsimg"/>
      </div> 
 <div class="datetime"><em><?php echo $vquery ['bdate'];?>,&nbsp;<?php echo $vquery ['btime'];?></em></div> 
<?php  $content1=$vquery['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1); $content2=strip_tags(substr($content, 0, 370)); 
echo $content2;?>.... 
 
<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div>
      
	<?php 
      }
    } 
    ?>
  </div>




<div class="sport-right-col">

<div class="col-sports">  <!--40-->
 <ul>
 
 <?php
	
	$query= "SELECT * FROM newstype WHERE category='sports' order by nid DESC LIMIT 1, 6";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>
 
 <li>    
<div class="sort-news">
 <img src="admin/<?php echo $vquery['images']; ?>" class="sort-img">
<a href="indetails.php?title=<?php echo $vquery['title']; ?>" style="vertical-align:top;"><?php echo $vquery['title']; ?></a>
</div>



</li>
 <?php }?>

 </ul>  

   </div>
 <div class="po-detail"><a href="inn.php?catid=sports">আরো খবর</a></div>  
</div>

