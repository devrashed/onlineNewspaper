<div class="politics-news-title">

<div class="politics-news"><a href="inn.php?catid=politics">রাজনীতি</a></div> 
<div class="clr"></div>
</div>
     <?php
	
	$query= "SELECT * FROM newstype Where category='politics' order by nid DESC LIMIT 6";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>

<div class="politic-col">

 <img src="admin/<?php echo $vquery2 ['images'];?>" class="politic-imag">
 <div class="polictis-title">
 <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a>
 </div>
<!-- <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>--> 
<?php  //$content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 440)); 
//echo $content5=str_split($content2); ?> 

  
<!--<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>-->
<!--<div class="home-hr"></div>-->
  
</div>

<?php } ?>

<!--<div class="politic-col"> </div>-->
<!--<div class="politic-col"> </div>
<div class="politic-col"> </div>
<div class="politic-col"> </div>-->


<div class="politic-colhead">

 <div class="col-politics">
 
 <ul>
  <?php
	
	$query= "SELECT * FROM newstype Where category='politics' order by nid DESC LIMIT 6,4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>

 <li><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><i class="fa fa-angle-double-right arrowicon"></i><?php echo $vquery2 ['title'];?></a></li>
 <?php } ?>

  </ul>
 
 
 </div>
<br />
<br />

<div class="clr"></div>
<div class="po-de"><a href="inn.php?catid=politics">আরো খবর</a></div>


</div>
