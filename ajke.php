<div class="news-title"> আজকে কি কোথায় </div>

 
 <div class="edi-lastnews">
 
 <ul>
 
   <?php
	
	$query= "SELECT * FROM newstype WHERE category='kothay' order by nid DESC LIMIT 5";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
   ?> 
 <li><i class="fa fa-angle-double-right arrowicon"></i><strong><?php echo $vquery2['title'];?></strong>
 <?php echo $vquery2['description'];?>
 
 </li>
<?php } ?>

 </ul>
 
<div class="po-de"><a href="#">আরো খবর</a></div>
 
 
 </div>