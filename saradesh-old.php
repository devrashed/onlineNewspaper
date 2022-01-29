
<link rel="stylesheet" href="saradesh/saradesh.css" />
<script src="saradesh/mtabs.js"></script> 
<script>
			$(function() {
				$(".set-1").mtabs();
				
				$(".set-2").mtabs({
					tab_text_el: ".heading, .head, header",
					onTabSelect: function(idx) {
						console.log("Selected tab is: " + idx);
					},
					onReady: function () {
						console.log('Set 2 ready!');
					}
					
				});

				$('.set-1 .panel-1 .btn').on('click', function(event) {
					$('.set-1').mtabs('show', 2);

					event.preventDefault();
				});

				$('.set-1 .panel-1 .destroy').on('click', function(event) {
					$('.set-1').mtabs('destroy');

					event.preventDefault();
				});

				$('.set-1 .panel-1 .apply').on('click', function(event) {
					$('.set-1').mtabs();

					event.preventDefault();
				});

				$('.set-2 .panel-1 .btn').on('click', function(event) {
					$('.set-2').mtabs('show', 1);

					event.preventDefault();
				});
			});
		</script>



<div style="width:100%; height:auto;"> <a href="inn.php?catid=saradesh"><img src="images/saradesh.png"></a></div>
<div class="wrap">

<div class="set set-1">


<div class="panel panel-1">
<h2>ঢাকা</h2>
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
    <p>
    
    <div class="tabs-content">
     <?php 
	$query= "SELECT * FROM newstype WHERE sardes_category='dhaka' order by nid DESC LIMIT 4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
		 
     ?>
     
     
                   <div class="saracol">
				   <img src="admin/<?php echo $vquery2 ['images'];?>" class="saraimg">
                  <div class="sara-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
                   <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div> 
                   <div class="roko-del"><?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 360)); ?>....</div>
                   <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
                   </div>
    <?php 
	} 
	
	?>
    
    </div>
    
    </p>
</marquee>

</div>



<div class="panel panel-2">
<h2>চট্টগ্রাম</h2>
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
<p>
    <div class="tabs-content">
     <?php 
	$query= "SELECT * FROM newstype WHERE sardes_category='chittagong' order by nid DESC LIMIT 4";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
		 
     ?>
     
     
                   <div class="saracol">
				   <img src="admin/<?php echo $vquery2 ['images'];?>" class="saraimg">
                  <div class="sara-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
                   <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
                   <div class="roko-del"><?php echo strip_tags( substr($vquery2 ['description'], 0, 360));  ?>....</div>
                    <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
                   </div>
    <?php 
	} 
	
	?>
    
    </div>
</p>
</marquee>
</div>

<div class="panel panel-3">
<h2>রাজশাহী</h2>
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
    <p>
    <div class="tabs-content">
         <?php
        $query= "SELECT * FROM newstype WHERE sardes_category='rajshahi' order by nid DESC LIMIT 4";
        $rsquery= mysql_query($query); 
        while ($vquery2=mysql_fetch_array($rsquery))
        {
             
         ?>
         
         
                       <div class="saracol">
                       <img src="admin/<?php echo $vquery2 ['images'];?>" class="saraimg">
                      <div class="sara-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
                      <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
                       <div class="roko-del"> <?php   echo strip_tags( substr($vquery2 ['description'], 0, 360));  ?>....</div>
                        <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
                       </div>
        <?php 
        } 
        
        ?>
        
        </div>
    </p>
  </marquee>  
</div>

<div class="panel panel-4">

<h2>খুলনা</h2>

<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
<p>    
<div class="tabs-content">
         <?php
        $query= "SELECT * FROM newstype WHERE sardes_category='khulna' order by nid DESC LIMIT 4";
        $rsquery= mysql_query($query); 
        while ($vquery2=mysql_fetch_array($rsquery))
        {
             
         ?>
         
         
                       <div class="saracol">
                       <img src="admin/<?php echo $vquery2 ['images'];?>" class="saraimg">
                      <div class="sara-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
                      <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
                       <div class="roko-del"> <?php   echo strip_tags(substr($vquery2 ['description'], 0, 360));  ?>....</div>
                      <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
                       </div>
        <?php 
        } 
        
        ?>
        
        </div>
    </p>
 </marquee>   
</div>

<div class="panel panel-5">
<h2>সিলেট</h2>
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
<p>
    <div class="tabs-content">
         <?php
        $query= "SELECT * FROM newstype WHERE sardes_category='sylhet' order by nid DESC LIMIT 4";
        $rsquery= mysql_query($query); 
        while ($vquery2=mysql_fetch_array($rsquery))
        {
             
         ?>
         
         
                       <div class="saracol">
                       <img src="admin/<?php echo $vquery2 ['images'];?>" class="saraimg">
                     <div class="sara-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
                     <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
                       <div class="roko-del"> <?php   echo strip_tags( substr($vquery2 ['description'], 0, 360));  ?>....</div>
                     <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
                       </div>
        <?php 
        } 
        
        ?>
        
        </div>
</p>
</marquee>
</div>

<div class="panel panel-6">
<h2>বরিশাল</h2>
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
<p>

    <div class="tabs-content">
         <?php
        $query= "SELECT * FROM newstype WHERE sardes_category='borishal' order by nid DESC LIMIT 4";
        $rsquery= mysql_query($query); 
        while ($vquery2=mysql_fetch_array($rsquery))
        {
             
         ?>
         
         
                       <div class="saracol">
                       <img src="admin/<?php echo $vquery2 ['images'];?>" class="saraimg">
                       <div class="sara-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
                       <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
                       <div class="roko-del"> <?php echo strip_tags( substr($vquery2 ['description'], 0, 360));  ?>....</div>
                        <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
                       </div>
        <?php 
        } 
        
        ?>
        
        </div>
</p>
</marquee>
</div>

<div class="panel panel-7">
<h2>রংপুর</h2>
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
<p>

    <div class="tabs-content">
         <?php //for ($i=1;$i<=10;$i++) {
        $query= "SELECT * FROM newstype WHERE sardes_category='rongpur' order by nid DESC LIMIT 4";
        $rsquery= mysql_query($query); 
        while ($vquery2=mysql_fetch_array($rsquery))
        {
             
         ?>
         
         
                       <div class="saracol">
                       <img src="admin/<?php echo $vquery2 ['images'];?>" class="saraimg">
                      <div class="sara-title"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a></div>
                      <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
                       <div class="roko-del"> <?php echo strip_tags(substr($vquery2 ['description'], 0, 360));  ?>....</div>
                       <div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
                       </div>
        <?php 
        } 
        
        ?>
        
        </div>
</p>
</marquee>
</div>

</div>


</div>

      
