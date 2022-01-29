

<div class="pikachoose">

	<ul id="pikame" class="jcarousel-skin-pika">
    
     <?php
	
	$query= "SELECT * FROM photogallery order by gid DESC LIMIT 12";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>
		<li><img src="admin/<?php echo $vquery['photogallyer']; ?>"><span><?php echo $vquery['ptitle']; ?></span></li>
		<!--<li><img src="../../2.jpg"/><span>jCarousel is supported and can be integrated with PikaChoose!</span></li>
		<li><img src="../../3.jpg"/><span>Be sure to check out PikaChoose.com for updates.</span></li>
		<li><img src="../../4.jpg"/><span>You can use any type of html you want with PikaChoose</span></li>
		<li><img src="../../5.jpg"/><span>PikaChoose survives on your donations! Keep the project alive with a donation.</span></li>-->
  <?php } ?>      
	</ul>
</div>
