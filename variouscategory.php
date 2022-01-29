
                    <!--============================= Education =======================-->
          
<div class="news-category-col">
<div class="education-news-title"> 
<div class="education-news"> <a href="inn.php?catid=educations">শিক্ষার আলো</a></div>
<div class="clr"></div>
</div>

     <?php
	
	$query= "SELECT * FROM newstype WHERE category='educations' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
<div class="var-headline"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>
<div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="row-img"></a>
<div class="var-des"> <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 600)); ?>....</div>
<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div> 

<?php } ?>


    <div class="var-col"> 
     
    <ul> 
        <?php
	
	$query= "SELECT * FROM newstype WHERE category='educations' order by nid DESC LIMIT 1, 4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?> 
    <li><i class="fa fa-angle-double-right arrowicon"></i><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></li>
 <?php } ?>   
    </ul>    
    
     <div class="po-detail"><a href="inn.php?catid=educations">আরো খবর</a></div>    
    </div>

</div>




                           <!--============================= Health =======================-->




<div class="news-category-col rightspase">
<div class="health-news-title">  
<div class="health-news"><a href="inn.php?catid=health">স্বাস্থ্যকথা</a></div> 
<div class="clr"> </div>
 </div>



     <?php
	$query= "SELECT * FROM newstype WHERE category='health' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
<div class="var-headline"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>
<div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="row-img"></a>
<div class="var-des"> <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 600)); ?>....</div>
<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div> 

<?php } ?>


    <div class="var-col"> 
     
    <ul> 
        <?php
	
	$query= "SELECT * FROM newstype WHERE category='health' order by nid DESC LIMIT 1, 4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?> 
    <li><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><i class="fa fa-angle-double-right arrowicon"></i><?php echo $vquery2['title']; ?></a></li>
 <?php } ?>   
    </ul>    
    
    <div class="po-detail"><a href="inn.php?catid=health">আরো খবর</a></div>      
    </div>





</div>



<!--============================= law court =======================-->



<!--<div class="news-category-col rightspase">
<div class="law-news-title">  <div class="law-news"> <a href="inn.php?catid=lawcourt">আইন আদালত</a> </div>
<div class="clr"> </div>
</div>


     <?php
	/*$query= "SELECT * FROM newstype WHERE category='lawcourt' order by nid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {*/
 ?>
<a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><img src="admin/<?php echo $vquery2['images']; ?>" class="var-img"></a>

<div class="var-headline"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></div>
<div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
<div class="var-des"> <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 450)); ?>....</div>
<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
<div class="home-hr"></div> 

<?php //} ?>


    <div class="var-col"> 
     
    <ul> 
        <?php
	
	/*$query= "SELECT * FROM newstype WHERE category='lawcourt' order by nid DESC LIMIT 1, 4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {*/
 ?> 
    <li><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><i class="fa fa-angle-double-right arrowicon"></i><?php echo $vquery2['title']; ?></a></li>
 <?php //} ?>   
    </ul>    
    
    
    </div>




</div>-->

