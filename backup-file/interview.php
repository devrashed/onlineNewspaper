<div class="interview-news-title">
<div class="interview-news"><a href="#">সাক্ষাৎকার</a> </div>
<div class="clr"></div>
</div>

<div class="edit-news"> 
  <?php
	
	$query= "SELECT * FROM newstype WHERE category='interview' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
 
 <div class="edit-news-headline"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>
 <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
 <div class="edit-news-del"><?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 320)); ?>...</div>

<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div>
  <?php } ?>
</div>

  <?php
	
	$query= "SELECT * FROM newstype WHERE category='interview' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="edit-images"></a>
 <?php } ?>
 
 <div class="edi-lastnews">
 
 <ul>
 
   <?php
	
	$query= "SELECT * FROM newstype WHERE category='interview' order by nid DESC LIMIT 1, 5";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
   ?> 
 <li><i class="fa fa-angle-double-right arrowicon"></i><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></li>
  
 <?php } ?>
 
 </ul>
<div class="po-de"><a href="inn.php?catid=interview">আরো খবর</a></div>
 
 
 </div>
 