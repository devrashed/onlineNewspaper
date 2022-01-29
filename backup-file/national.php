	<?php 
	/*include "dbconnect.php";*/
	$query= "SELECT * FROM newstype WHERE category='national' order by nid DESC LIMIT 4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  
               
        	 
     <div class="grid_3 grid grid_main margin-right-caption1">
     <div class="image_post feat-item box-1">
                    <a  href="indetails.php?title=<?php echo $vquery2['title']; ?>"  class="feat-link">              
<img width="250" height="179" src="admin/<?php echo $vquery2['images']; ?>" class="attachment-feat-grid wp-post-image" alt="<?php echo $vquery2['title']; ?>" /></a>
                                       <div class="caption-overlay">
  					
                    <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="inside">
                        <h3><?php echo $vquery2['title']; ?></h3>
                    </a>
                    
                    </div>
                  
	 </div>
  </div>
 
 
 
     <?php } ?>    



