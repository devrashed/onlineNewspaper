<div class="lifestyle-news-title"> <div class="lifestyle-news"> 
<a href="inn.php?catid=lawcourt">লাইফস্টাইল</a> </div>
<div class="clr"> </div>
</div>

<div id="services-example-10" class="theme1">
                    <ul>
					
<?php
    $query= "SELECT * FROM newstype Where category='lifestyle' order by nid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
							<li>
                            <div class="rokomhead">
								<img src="admin/<?php echo $vquery2 ['images'];?>" class="imgrokim">
								<!--<div style="margin-top:16px"></div>-->
		<div class="roktitle"> <a href="indetails.php?title=<?php echo $vquery2['title']; ?>"><?php echo $vquery2 ['title'];?></a> </div><div class="clr"></div>
       <!-- <div class="datetime"><em><?php echo $vquery2 ['bdate'];?>&nbsp;<?php echo $vquery2 ['btime'];?></em></div>-->
								 <div class="roko-del"><?php //echo substr($vquery2['description'], 0, 320); ?></div>
								<!--<div class="home-detail"><a href="indetails.php?title=<?php echo $vquery2['title']; ?>"> বিস্তারিত </a></div>-->
</div>
							</li>


<?php } ?>		
                  </ul>

						<div class="toolbar">
							<div class="left"></div><div class="right"></div>
						</div>
					</div>

			<!--</div>-->
