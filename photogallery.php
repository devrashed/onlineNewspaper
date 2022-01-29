		
        <link type="text/css" href="photogallary/css/base.css" rel="stylesheet" />
	
        <script type="text/javascript" src="photogallary/lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="photogallary/lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="photogallary/lib/jquery.touchwipe.min.js"></script>
		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose({carousel:true,carouselOptions:{wrap:'circular'}});
				});
		</script>



<div class="pikachoose">

	<ul id="pikame" class="jcarousel-skin-pika" style="display:none;">
         <?php
	
	$query= "SELECT * FROM photogallery order by gid DESC LIMIT 12";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>
			<li><img src="admin/<?php echo $vquery['photogallyer']; ?>" style="height:450px;"><span><?php echo $vquery['ptitle']; ?></span></li>
	
           <?php } ?> 
	</ul>

</div>




