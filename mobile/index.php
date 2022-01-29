<?php include "mhead.php" ?>
<div class="mwrapper">

    <header>

    <div class="mdate">
     <?php include_once("gdate.php");?>
       ঢাকা&nbsp;<?php //echo "$presentDate"; ?>,  <?php echo $presenttime.",&nbsp;".$presentDate;?>,
    <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
         
    </div>

    <div id="mlogo"><a href=""><img src="plogo.png"></a></div>
    <div class="mmenu"> 
    
    <div id="navmenu"> <a href="#mfooter"><i class="fa fa-reorder"></i> </a></div>
    
    <div class="desktop"> <a href="http://currentnewsbd24.com/"><i class="fa fa-desktop awefont"></i></a></div>
     
    </div>    
    
   <div class="update-bar">শিরোনাম</div> 
   
   
    <div class="head_line"> 
     <div class="headline">
 
    <div class="header-col">
     <ul>
      <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);"> 
 
     <?php
	
	$query= "SELECT * FROM newstype order by nid DESC LIMIT 6";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>  
<li>
<i class="fa fa-angle-double-right" style="margin-top:5px;"></i>&nbsp; 
<a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="newstitle"><?php echo $vquery['title']; ?></a>&nbsp;</li>


    <?php } ?> 

        </marquee> 

   </ul>
</div>
     <div class="clr"></div>
      </div>  


    
 </div>

   
   
</header>

<div class="clr"></div>

    <!--CONTANT-->

<div class="mcontent"> 
 
                         <!--================== National News  ===================-->
                         <!--================== National News  ===================-->
 
  
  <div class="lastnewstitle"> জাতীয় সংবাদ  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='national' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='national' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;">
  <?php echo $vquery2['title']; ?></a>
  </li>
  <?php 
	}
  ?>
  
  </ul>
  
     </div>
</div>

                           <!--================== Politics News  ===================-->
                           <!--================== Politics News  ===================-->
 
  
  <div class="lastnewstitle"> রাজনীতি সংবাদ  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='politics' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='politics' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;">
  <?php echo $vquery2['title']; ?></a>
  </li>
  <?php 
	}
  ?>
  
  </ul>
  
     </div>
</div>




                           <!--================== Inernational News  ===================-->
                           <!--================== Inernational News  ===================-->
 
  
  <div class="lastnewstitle"> আন্তর্জাতিক সংবাদ  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='international' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='international' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;">
  <?php echo $vquery2['title']; ?></a>
  </li>
  <?php 
	}
  ?>
  
  </ul>
  
     </div>
</div>


                           <!--================== Islam News  ===================-->
                           <!--================== Islam News  ===================-->
 
  
  <div class="lastnewstitle"> খেলার সংবাদ  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='islam' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='islam' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;">
  <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
     </div>
</div>

                           <!--================== khatme Nabuyat News  ===================-->
                           <!--================== khatme Nabuyat News  ===================-->
 
  
  <div class="lastnewstitle"> খাতমে নবুয়াত   </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='khatme' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='khatme' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;"> <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
     </div>
</div>
                           
                  

                           <!--================== Dorbar Sharif News  ===================-->
                           <!--================== Dorbar Sharif News  ===================-->
 
  
  <div class="lastnewstitle"> দরবার শারিফ  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='dorbarsharif' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='dorbarsharif' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;"> <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
     </div>
</div>





                           <!--================== Education News  ===================-->
                           <!--================== Education News  ===================-->
 
  
  <div class="lastnewstitle"> শিক্ষাঙ্গন সংবাদ  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='educations' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='educations' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;"> <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
     </div>
</div>





                           <!--================== Finance News  ===================-->
                           <!--================== Finance News  ===================-->
 
  
  <div class="lastnewstitle"> অর্থ ও বাণিজ্য সংবাদ  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='finance' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='finance' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;"> <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
      </div>
   </div>
   
   
                              <!--================== Information and Science News  ===================-->
                              <!--================== Information and Science News  ===================-->
 
  
  <div class="lastnewstitle"> তথ্য-প্রযুক্তি  </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='informationscience' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='informationscience' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;"> <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
      </div>
   </div>




                              <!--================== Entertainment News  ===================-->
                              <!--================== Entertainment News  ===================-->
 
  
  <div class="lastnewstitle"> বিনোদন </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='entertainment' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='entertainment' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;">
  <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
      </div>
   </div>

  
                <!--================== Saradesh News  ===================-->
                <!--================== Saradesh News  ===================-->


<div class="lastnewstitle"> সারাদেশ </div>
    <div class="lastnews"> 
      
       <?php
	
	$query= "SELECT * FROM newstype WHERE category='saradesh' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>   
    <div class="newsbar"> 
    <img class="newsimg" src="http://currentnewsbd24.com/admin/<?php echo $vquery['images'];?>" >
    <h1 class="newsti"><a href="indetails.php?title=<?php echo $vquery['title']; ?>" class="mnewsheadline"><?php echo $vquery['title'];?></a></h1>
    <?php echo strip_tags(substr($vquery['description'], 0, 400));?>....     
    </div>
    
  <?php } ?>   
  
  <div class="mnewstitle">
  
  <ul> 
    <?php
	
	$query= "SELECT * FROM newstype Where category='saradesh' order by nid DESC LIMIT 3, 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
  <li class="fa fa-angle-double-right arrowicon"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>" style="vertical-align:top;"> <?php echo $vquery2['title']; ?> </a> </li>
  <?php 
	}
  ?>
  
  </ul>
  
      </div>
   </div>

          


<div class="lastnewstitle"> সর্বশেষ সংবাদ </div>
  <div class="mnewstitle">  
   <ul>  
    <?php
	
	$query= "SELECT * FROM newstype order by nid DESC LIMIT 18";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
   ?>
  <li><i class="fa fa-angle-double-right arrowicon"></i> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title']; ?></a></li>
  
  <?php } ?>
   </ul>
</div>





<div style="clear:both"></div>   
</div>

<div class="clr"></div>
<?php include_once("mfooter.php"); ?>

</div>
</body>
</html>

