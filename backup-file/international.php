
<div class="news-title"><div class="nheadline"><a href="inn.php?catid=international"><!--আন্তর্জাতিক--><img src="images/interna.png" width="351"></a></div></div>
     <?php
	
	$query= "SELECT * FROM newstype WHERE category='international' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="row-img"></a>
<div class="row-news-top"> 
<div class="row-news-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>
<div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
<?php echo strip_tags(substr($vquery2['description'], 0, 450));  ?>.... 


<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>">বিস্তারিত</a></div>
<div class="home-hr"></div>

<?php } ?> 

</div>

<div class="row-var-col">

<ul>
<?php
	
	$query= "SELECT * FROM newstype WHERE category='international' order by nid DESC LIMIT 1, 5";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
?>
<li><a href="indetails.php?title=<?php echo $vquery2['title'];?>"><i class="fa fa-angle-double-right arrowicon"></i><?php echo $vquery2['title']; ?></a></li>

<?php } ?>

</ul>

</div>

<div class="po-de"><a href="inn.php?catid=international">আরো খবর</a></div>


