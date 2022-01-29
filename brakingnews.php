<?php
include "dbconnect.php";
?>

 <marquee scrollamount="4" onmouseout="this.start(); " onmouseover="this.stop();" direction="left" behavior="scroll" 
 style="height:38px; margin-top:10px; color:#FFF">     
  <?php
   $query= "SELECT * FROM newstype where important='yes' AND bracking='yes' order by nid DESC LIMIT 8";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>                  
              
 <i class="fa fa-caret-right"></i> 
 <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="color:#FFF;"><?php echo $vquery2['title']; ?></a>
 &nbsp;&nbsp;&nbsp;&nbsp;


<?php } ?>
  <?php
  /* $query= "SELECT * FROM newstype where bracking='yes' order by nid DESC LIMIT 10";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>                  
              
 <i class="fa fa-caret-right"></i> 
 <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="color:#FFF;"><?php echo $vquery2['title']; ?></a>
 &nbsp;&nbsp;&nbsp;&nbsp;


<?php }*/ ?>		
  </marquee>
 