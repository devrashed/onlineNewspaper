 <?php
 $query= "SELECT * FROM newstype WHERE category='informationscience' order by nid DESC LIMIT 1";
 $rsquery= mysql_query($query); 
 while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
<div class="row-news-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>
<div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="row-img"></a>

<?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 600)); ?>.... 
<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title'];?>"> বিস্তারিত </a></div>
<div class="home-hr"></div>
<?php } ?> 
<!--<div class="row-news-top"> 
</div>-->

<div class="row-var-col">

<ul>
<?php
	
	$query= "SELECT * FROM newstype WHERE category='informationscience' order by nid DESC LIMIT 1, 6";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
?>

<li><i class="fa fa-angle-double-right arrowicon"></i> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></li>

<?php } ?>

</ul>

</div>

<div class="po-de"><a href="inn.php?catid=informationscience">আরো খবর</a></div>


