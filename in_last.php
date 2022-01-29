
		


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


<div class="in-ad">Add </div>

	
		
