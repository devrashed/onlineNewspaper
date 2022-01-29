 <script type="text/javascript">

				$(document).ready(function() {
				  // $.noConflict();

					jQuery('#services-example-3').services(
						{
							width:1112,
							height:390,
                            slideAmount:5,
							slideSpacing:30,
							touchenabled:"on",
							mouseWheel:"on",
							hoverAlpha:"off",
							slideshow:2000,
							hovereffect:"on",
						  callBack:function() { }

						});

				});
			</script> 
<div id="services-example-3" class="theme1">
                    <ul>
					
<?php
   $query= "SELECT * FROM newstype WHERE sardes_category='rajshahi' order by nid DESC LIMIT 10";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
							<li style="margin-right:10px;">
                            <div class="rokomary-var">
								<img src="admin/<?php echo $vquery2 ['images'];?>" class="img-roky">
								<!--<div style="margin-top:16px"></div>-->
		<div class="roko-title"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a> </div><div class="clr"></div>
        <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>
								 <div class="roko-del"><?php echo substr($vquery2['description'], 0, 320); ?>....</div>
								<!--<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>-->
</div>
							</li>


<?php } ?>		
                  </ul>

						<div class="toolbar">
							<div class="left"></div><div class="right"></div>
						</div>
					</div>