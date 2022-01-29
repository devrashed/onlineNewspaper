<!--http://wowslider.com/responsive-image-gallery-glass-collage.html  -->   

<!--<div id="games">
  
     <?php
	
	$query= "SELECT * FROM newstype WHERE slideshow='yes' order by nid DESC LIMIT 8";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
			
				<img src="admin/<?php echo $vquery2['images']; ?>" alt="<?php echo $vquery2['title'];?>"/>
				
                <span>
				<a href="#" target="_blank"><?php echo $vquery2['title'];?></a><br />
                <?php //echo strip_tags(substr( $vquery2 ['description'], 0, 600));?>
                
				</span>
               
		
<?php } ?>			
            <script>
			$('#games').coinslider();
		</script>
			
		</div>-->
		
          <div class="slide-large-wrapper header-slider2">
      <div class="owl_slider slider-large owl-carousel">
               
     <?php
		
	$query= "SELECT * FROM newstype WHERE slideshow='yes' order by nid DESC LIMIT 8";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
             <div class="item_slide">
              
               <a  href="indetails.php?title=<?php echo $vquery2['title']; ?>" class="feature-link">              
<img width="582" height="410" src="admin/<?php echo $vquery2['images']; ?>" class="attachment-slider-normal wp-post-image"/> <div class="ratings-wrapper"><div class="rating-bg">
	 <div class="rating" style="width:68%"></div>
	 </div></div> 
</a>
<div class="item_slide_caption">							
                                <h1> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2['title'];?></a> </h1>
<div class="slideshowconte"><?php //$content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 500)); ?> </div>                                                      

<!--<span class="overlay_icon fa fa-picture-o"></span><p class="post-meta meta-main-img"><span class="post-author"><i class="fa fa-user"></i><a href="author/saladmag/index.html" title="Posts by saladmag" rel="author">&nbsp;</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Feb 26, 2014</span></p>                            -->

						</div>
                 </div>
               
   <?php } ?>            
               
   
      </div>
   </div>
              
