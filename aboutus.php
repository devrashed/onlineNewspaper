<?php 
include_once("header.php");
?>

<div id="wrapper">
    
    <div class="innnerleft">

    
<?php
	
	$query= "SELECT * FROM self WHERE category='aboutus' order by sfid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
    
     <h3 class="in-title"><?php echo $vquery2['stitle'];?></h3>

   <div class="in-details"> <?php  $content1=$vquery2['details']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);
     echo $content; ?></div>
    
    
    
 
   <?php } ?> 
    
    
    
  </div>
    
    
 
    


<div class="innerright"><?php include_once("innrlatest.php");?></div>






</div><!--END THE Wrapper-->
<br>
<div class="clr"></div>
<?php include_once ("footer.php");?>