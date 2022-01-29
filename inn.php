 <?php 
include_once("header.php");
?>

<div id="wrapper">
    
  <?php if($_GET['catid']=='politics') { ?>  
  
   <div class="innnerleft">
    
    <div class="in-title">রাজনীতি</div>
    <?php
	
		$perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='politics' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	$query= "SELECT * FROM newstype Where category='politics' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>  
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>

<?php } ?>  
 <div class="clr"></div> 
 <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=politics&catid=politics&", $perpa);?></span></div>  

 
 
 
 </div>
 
<?php } ?>    

                                                   <!--=============National================-->
                                                   
   <?php if($_GET['catid']=='national') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">জাতীয়</div>
    <?php
	
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='national' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='national' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
 
 <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=national&catid=national&", $perpa);?></span></div>     
 </div>
 
 
<?php } ?>                                                    


                                                     <!--=============Sports================-->
                                                   
   <?php if($_GET['catid']=='sports') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">খেলা</div>
    <?php
	
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='sports' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='sports' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
 
 <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=sports&catid=sports&", $perpa);?></span></div>  
    
 </div>
 
  
<?php } ?> 

                                                   <!--=============International================-->
                                                   
                                                   
   <?php if($_GET['catid']=='international') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">আন্তর্জাতিক</div>
    <?php
	
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='international' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	$query= "SELECT * FROM newstype Where category='international' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  

  <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=international&catid=international&", $perpa);?></span></div> 
        
 </div>
 

<?php } ?> 


											 <!--============= Finance ================-->
                                                   
   <?php if($_GET['catid']=='finance') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">অর্থ ও বাণিজ্য</div>
    <?php
	
	     $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='finance' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='finance' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  

 <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=finance&catid=finance&", $perpa);?></span></div> 
    
 </div>

<?php } ?> 

									<!--=============Entertainment================-->
                                            
                                                   
   <?php if($_GET['catid']=='entertainment') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">বিনোদন</div>
    <?php
	
	 $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='entertainment' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;	
	
	
	$query= "SELECT * FROM newstype Where category='entertainment' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  

     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=entertainment&catid=entertainment&", $perpa);?></span></div> 
        
 </div>
 
<?php } ?> 


						          	<!--=============Education================-->
                                            
                                                   
   <?php if($_GET['catid']=='educations') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">শিক্ষাঙ্গন</div>
    <?php
	 
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='educations' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;	
	
	$query= "SELECT * FROM newstype Where category='educations' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  

     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=educations&catid=educations&", $perpa);?></span></div>
          
 </div>
 <?php } ?> 



						          	<!--=============health================-->
                                            
                                                   
   <?php if($_GET['catid']=='health') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">স্বাস্থ্য</div>
    <?php
	
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='health' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	$query= "SELECT * FROM newstype Where category='health' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
 
    <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=health&catid=health&", $perpa);?></span></div>
    
 </div>
 
<?php } ?> 


						          	  <!--=============lawcourt================-->
                                            
                                                   
   <?php if($_GET['catid']=='lawcourt') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">আইন-আদালত</div>
    <?php
	   
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='lawcourt' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	   
	
	$query= "SELECT * FROM newstype Where category='lawcourt' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=lawcourt&catid=lawcourt&", $perpa);?></span></div>
       
 </div>
 
<?php } ?> 
    

                                              <!--=============lifestyle================-->
                                            
                                                   
   <?php if($_GET['catid']=='lifestyle') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">লাইফস্টাইল</div>
    <?php
	
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='lifestyle' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='lifestyle' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=lifestyle&catid=lifestyle&", $perpa);?></span></div>
    
 </div>
 
<?php } ?>     


                                              <!--=============Art Culture================-->
                                            
                                                   
   <?php if($_GET['catid']=='artculture') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">শিল্প- সাহিত্য</div>
    <?php
	
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='artculture' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='artculture' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
 <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=artculture&catid=artculture&", $perpa);?></span></div>
    
 </div>
 
<?php } ?>    


                                             
                                              <!--=============Media================-->
                                            
                                                   
   <?php if($_GET['catid']=='media') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">গণমাধ্যম</div>
    <?php
	 
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='media' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa;
	
	$query= "SELECT * FROM newstype Where category='media' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=media&catid=media&", $perpa);?></span></div>    
    
 </div>
 <?php } ?>    


                                              <!--=============Krishi & Environment================-->
                                            
                                                   
   <?php if($_GET['catid']=='krishienvironment') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">কৃষি ও পরিবেশ</div>
    <?php
	
	    $perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='krishienvironment' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa; 
	
	$query= "SELECT * FROM newstype Where category='krishienvironment' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
     
   <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=krishienvironment&catid=krishienvironment&", $perpa);?></span></div>    
    
 </div>
 
<?php } ?>    


                                              <!--=============Islam================-->
                                            
                                                   
   <?php if($_GET['catid']=='islam') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">ইসলাম</div>
    <?php
	
	$perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='islam' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa; 
	
	
	$query= "SELECT * FROM newstype Where category='islam' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=islam&catid=islam&", $perpa);?></span></div>    
    
 </div>
 
<?php } ?>    


                                         <!--============= Information & Technology  ================-->
                                            
                                                   
   <?php if($_GET['catid']=='informationscience') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">তথ্য-প্রযুক্তি</div>
    <?php
	
		$perpa=16;
		$re1=mysql_query("select count(nid) row FROM newstype WHERE category='informationscience' ORDER BY nid DESC");
		$rere1=mysql_fetch_array($re1);
		$nrow=$rere1['row'];
		
		if(empty($_GET['page']))
		$page=1;
		else
		$page=$_GET['page'];
		
		$start=($page*$perpa)-$perpa;
		$end=$perpa; 
	
	
	
	$query= "SELECT * FROM newstype Where category='informationscience' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
    <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=islam&catid=islam&", $perpa);?></span></div>     
    
 </div>
 
<?php } ?>    


											<!--============= Rokomay ================-->
                                            
                                                   
   <?php if($_GET['catid']=='rokomary') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">রকমারি</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='rokomary' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa; 
	
	
	$query= "SELECT * FROM newstype Where category='rokomary' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
    <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=rokomary&catid=rokomary&", $perpa);?></span></div>     
    
 </div>
 
<?php } ?>    


											<!--============= Editorial ================-->
                                            
                                                   
   <?php if($_GET['catid']=='editorial') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">সম্পাদকীয়</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='editorial' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa; 
	
	
	$query= "SELECT * FROM newstype Where category='editorial' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
   <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=editorial&catid=editorial&", $perpa);?></span></div>     
    
 </div>
 
<?php } ?>    



											<!--============= Open Talk ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='opentalk') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">মুক্তমত</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='opentalk' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa; 
	
	
	$query= "SELECT * FROM newstype Where category='opentalk' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
     
     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=opentalk&catid=opentalk&", $perpa);?></span></div>      
    
 </div>
 
<?php } ?>    


										     	<!--============= Inerview ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='interview') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">সাক্ষাৎকার</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='interview' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa; 
	
	$query= "SELECT * FROM newstype Where category='interview' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=interview&catid=interview&", $perpa);?></span></div>       
    
 </div>
 
<?php } ?>    



										     	<!--============= special feature ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='specialfeature') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">বিশেষ প্রতিবেদন</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='specialfeature' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa; 
	
	
	$query= "SELECT * FROM newstype Where category='specialfeature' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=specialfeature&catid=specialfeature&", $perpa);?></span></div>        
    
 </div>
 
<?php } ?>    



										     	<!--============= aj ki kothay ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='ko') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">খেলা</div>
    <?php
	$query= "SELECT * FROM newstype Where category='kothay' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><?php echo $vquery2 ['title'];?></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
 </div>
 
<?php } ?>    

										     	<!--============= saradesh ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='saradesh') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">সারাদেশ</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='saradesh' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='saradesh' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=saradesh&catid=saradesh&", $perpa);?></span></div>        
    
 </div>
 
<?php } ?>



                                     	<!--============= khatme Nabuyat ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='khatme') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">সারাদেশ</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='khatme' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='khatme' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=khatme&catid=khatme&", $perpa);?></span></div>        
    
 </div>
 
<?php } ?>
                                        


                              	<!--============= Dorbar Sharif ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='dorbarsharif') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">সারাদেশ</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(nid) row FROM newstype WHERE category='dorbarsharif' ORDER BY nid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa;
	
	
	$query= "SELECT * FROM newstype Where category='dorbarsharif' order by nid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="inn-news"> 
    <img src="admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
    <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 850)); ?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=dorbarsharif&catid=dorbarsharif&", $perpa);?></span></div>        
    
 </div>
 
<?php } ?>


   
                              	<!--============= video ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='video') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">ভিডিও আর্কাইভ</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(vid) row FROM videogallery ORDER BY vid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa;
	
	
	$query= "SELECT * FROM videogallery order by vid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="videonews"> 
   
    
     <script type="text/javascript">
function getScreen( url, size ) {
if(url === null){
return "";
}
size = (size === null) ? "big" : size;
var vid;
var results;
results = url.match("[\\?&]v=([^&#]*)");
vid = ( results === null ) ? url : results[1];
if(size == "small"){
return "http://img.youtube.com/vi/"+vid+"/2.jpg"; }
else {
return "http://img.youtube.com/vi/"+vid+"/0.jpg"; }
}
</script>
<?php  $url = $vquery2['urllink'];
//echo $url;
 ?>
<script type="text/javascript">
var imgUrlbig = getScreen("<?php echo $url ?>");
var imgUrlsmall = getScreen("<?php echo $url ?>", 'small');
 //document.write('<img src="' + imgUrlbig + '" class="vieoimg"/>');
//document.write('<img src="' + imgUrlsmall + '" />');
</script>

<a href="#" target="_blank"> <script type="text/javascript"> document.write('<img src="' + imgUrlbig + '" class="innvideo"/>'); </script> </a>
    
   </div>
<?php } ?>  
    
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=video&catid=video&", $perpa);?></span></div>        
    
 </div>
 
<?php } ?>


                                      	<!--============= Photogallery  ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='photo') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">ফটো গ্যলারী</div>
    <?php
	
	$perpa=16;
	$re1=mysql_query("select count(gid) row FROM photogallery ORDER BY gid DESC");
	$rere1=mysql_fetch_array($re1);
	$nrow=$rere1['row'];
	
	if(empty($_GET['page']))
	$page=1;
	else
	$page=$_GET['page'];
	
	$start=($page*$perpa)-$perpa;
	$end=$perpa;
	
	
	$query= "SELECT * FROM photogallery order by gid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>   
   

    <div class="image-set">
	<a class="example-image-link" href="admin/<?php echo $vquery2['photogallyer'];?>" data-lightbox="example-set" 
    data-title="<?php echo $vquery2['ptitle'];?>">
    <img class="example-image" src="admin/<?php echo $vquery2['photogallyer'];?>" alt=""/></a>
    </div>
   
   
<?php } ?>  
    
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=dorbarsharif&catid=dorbarsharif&", $perpa);?></span></div>        
    
 </div>
 
<?php } ?>




<div class="innerright"><?php include_once("innrlatest.php");?></div>
</div><!--END THE Wrapper-->
<br>
<div class="clr"></div>
<?php include_once ("footer.php");?>