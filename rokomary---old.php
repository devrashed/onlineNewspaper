<div id="services-example-1" class="theme1" >
                    <ul>
					
<?php
    $query= "SELECT * FROM newstype Where category='rokomary' order by nid DESC LIMIT 7";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
							<li style="margin-left:-10px;">
                            <div class="rokomary-var">
								<img class="img-roky" src="admin/<?php echo $vquery2 ['images'];?>">
							<!--	<div style="margin-top:16px"></div>-->
		<div class="roko-title"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a> </div>
        <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
								 <div class="roko-del"><?php  $content1=$vquery2['description']; $content=preg_replace("/<\/?div[^>]*\>/i", "", $content1);  echo $content2=strip_tags(substr($content, 0, 320)); ?>....</div>
								<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>
</div>
							</li>
<?php } ?>		
                  </ul>

						<div class="toolbar">
							<div class="left"></div><div class="right"></div>
						</div>
					</div>

 
   
       
           