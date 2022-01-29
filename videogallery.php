
 <?php
	
	$query= "SELECT * FROM videogallery order by vid DESC LIMIT 2";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>



<div class="video-box">

<!--<iframe width="383" height="194" src="<?php //echo $vquery['videogallery'];?>" frameborder="0" allowfullscreen></iframe>-->

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
<?php  $url = $vquery['urllink'];
//echo $url;
 ?>
<script type="text/javascript">
var imgUrlbig = getScreen("<?php echo $url ?>");
var imgUrlsmall = getScreen("<?php echo $url ?>", 'small');
 //document.write('<img src="' + imgUrlbig + '" class="vieoimg"/>');
//document.write('<img src="' + imgUrlsmall + '" />');
</script>

<!--<iframe width="250" height="250" src="//www.youtube.com/embed/mN7LW0Y00kE?list=RDHC5CkGe1VeACA" frameborder="0" allowfullscreen> </iframe>-->

<a href="<?php echo $url; ?>" target="_blank"> <script type="text/javascript"> document.write('<img src="' + imgUrlbig + '" class="vieoimg"/>'); </script> </a>

</div>


<?php } ?>
