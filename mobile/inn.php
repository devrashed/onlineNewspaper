<?php include "mhead.php" ?>

<div class="mwrapper">
  
  <header>

        <div class="mdate">
     <?php include_once("gdate.php");?>
       ঢাকা&nbsp;<?php echo "$presentDate"; ?>,  
    <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
         
    </div>

    <div id="mlogo"><a href="index.php"><img src="plogo.png"></a></div>
    <div class="mmenu"> 
    
    <div id="navmenu"> <a href="#mfooter"><i class="fa fa-reorder"></i> </a></div>
    
    <div class="desktop"> <a href="http://currentnewsbd24.com"> <i class="fa fa-desktop awefont"></i></a></div>
     
    </div> 
   
</header>
  
  
  <?php if($_GET['catid']=='politics') { ?>  
  
     <div class="innnerleft">
    
    <div class="lastnewstitle">রাজনীতি</div>
    <?php
	
 $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
    
    <div class="lastnewstitle">জাতীয় </div>
    <?php
	
	 $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
		 $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
		$perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	$perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	$perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	 
	 $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	 $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
   <div class="home-detail">&nbsp;</div>
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
	  
	   $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	    $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	 $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	$perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
   <div class="home-detail">&nbsp;</div>
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
	
	$perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"> বিস্তারিত </a></div>
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
	
	$perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	    $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	    $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	$perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
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
	
	    $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
   <div class="home-detail">&nbsp;</div>
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
	
	    $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
   <div class="home-detail">&nbsp;</div>
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
	
	   $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
  
  <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=specialfeature&catid=specialfeature&", $perpa);?></span></div>          
    
 </div>
 
<?php } ?>    

										     	<!--============= saradesh ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='saradesh') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">সারাদেশ</div>
    <?php
	 
	 $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
  <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=saradesh&catid=saradesh&", $perpa);?></span></div>             
  
 </div>
 
<?php } ?>


     
    
    										     	<!--============= Khotme Nabuyat ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='khatme') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">খাতমে নবুয়াত</div>
    <?php
	
		  $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
     <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=khatme&catid=khatme&", $perpa);?></span></div> 
 </div>
 
<?php } ?>
    
    
        										     	<!--============= dorbar sharif ================-->
                                            
                                            
                                                   
   <?php if($_GET['catid']=='dorbar') { ?>  
  
    <div class="innnerleft">
    
    <div class="in-title">দরবার শরীফ</div>
    <?php
	
	  $perpa=10;
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
    <img src="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>" class="innr-pic">
    <div class="innr-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="mnewsheadline"><?php echo $vquery2 ['title'];?></a></div>
    <div class="mdatetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
   <?php echo strip_tags(substr( $vquery2 ['description'], 0, 850));?>.... 
    
    <div class="home-detail">&nbsp;</div>
    <div class="inner-hr"></div>
    </div>
<?php } ?>  
    
 <div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"inn.php?catid=dorbar&catid=dorbar&", $perpa);?></span></div> 
    
 </div>
 
<?php } ?>





<br>
<div class="clr"></div>
<?php include_once ("mfooter.php");?>

</div><!--END THE Wrapper-->

</body>
</html>