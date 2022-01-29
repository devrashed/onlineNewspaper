<div class="news-title"><div class="nheadline"><a href="inn.php?catid=finance"><!--অর্থ ও বাণিজ্য--><img src="images/finan.png" width="350"></a> </div></div>
     <?php
	
	$query= "SELECT * FROM newstype WHERE category='finance' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>

<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="row-img"></a>

<div class="row-news-top"> 
<div class="row-news-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>
<div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
<div style="text-align:justify;">
<?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 350)); ?>....</div> 


<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div>

<?php } ?> 
</div>

<div class="row-var-col">

<ul>
<?php
	
	$query= "SELECT * FROM newstype WHERE category='finance' order by nid DESC LIMIT 1, 5";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
?>
<li><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><i class="fa fa-angle-double-right arrowicon"></i><?php echo $vquery2['title']; ?></a></li>

<?php } ?>

</ul>

</div>

<div class="po-de"><a href="inn.php?catid=finance">আরো খবর</a></div>


