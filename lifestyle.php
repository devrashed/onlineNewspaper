<div class="lifestyle-news-title"> <div class="lifestyle-news"> 
<a href="inn.php?catid=lawcourt">লাইফস্টাইল</a> </div>
<div class="clr"> </div>
</div>

 <?php
 $query= "SELECT * FROM newstype WHERE category='lifestyle' order by nid DESC LIMIT 3";
 $rsquery= mysql_query($query); 
 while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
<div class="lifestyle-col">


<!--<div class="datetime"><em><?php //echo $vquery2 ['bdate'];?>&nbsp;<?php //echo $vquery2 ['btime'];?></em></div>-->
<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="sports-img"></a>
<?php  //$content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 600)); ?> 
<!--<div class="home-detail"><a href="indetails.php?title=<?php //echo $vquery2['title'];?>"> বিস্তারিত </a></div>
<div class="home-hr"></div>-->
<div class="row-news-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>

</div>
<?php } ?> 




<div class="row-var-col">

<ul>
<?php
	
	$query= "SELECT * FROM newstype WHERE category='lifestyle'  order by nid DESC LIMIT 3, 10";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
?>

<li><i class="fa fa-angle-double-right arrowicon"></i> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></li>

<?php } ?>

</ul>

</div>

<div class="po-de"><a href="inn.php?catid=lifestyle">আরো খবর</a></div>


