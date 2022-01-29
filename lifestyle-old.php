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
<div style="width:250px; height:auto; float:left; border:1px solid #036; margin-right:5px; ">
<a href="../indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="specal-row-img"></a>
<div class="var-headline"> <a href="../indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>


<!--<div class="datetime"><em><?php //echo $vquery2 ['bdate'];?>&nbsp;<?php //echo $vquery2 ['btime'];?></em></div>-->
<div class="var-des"> <?php  //$content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1); 
//echo $content2=strip_tags(substr($content, 0, 600)); ?></div>
<!--<div class="home-detail"><a href="../indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div> -->
</div>
<?php } ?>


    <!--<div class="var-col"> 
     
    <ul> 
        <?php
	
	$query= "SELECT * FROM newstype WHERE category='lifestyle' order by nid DESC LIMIT 1, 6";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?> 
    <li><a href="../indetails.php?title=<?php echo $vquery2['title']; ?>"><i class="fa fa-angle-double-right arrowicon"></i><?php echo $vquery2['title']; ?></a></li>
 <?php } ?>   
    </ul>    
    
  <div class="po-detail"><a href="inn.php?catid=lifestyle">আরো খবর</a></div>       
    </div>-->
